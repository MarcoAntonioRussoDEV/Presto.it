<?php

namespace App\Livewire;

use App\Jobs\RemoveFaces;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Livewire\Component;
use App\Models\Article;
use App\Jobs\ResizeImage;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;
    public $images = [];
    public $temporary_images;

    
    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|min:10')]
    public $description;
    #[Validate('required|numeric')]
    public $price;

    #[Validate('required')]
    public $category = "";
    public $article;


    public function store()
    {

        $this->validate();

        $this->article = Article::create([

            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                
                RemoveFaces::withChain([

                    new ResizeImage($newImage->path, 300,200),
                    new ResizeImage($newImage->path, 600,400),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    
                ])->dispatch($newImage->id);


                // ! Cancellazione immagine originale
                //File::delete(storage_path("app/public/$newImage->path"));
            }
            
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        //$this->reset();
        session()->flash('success', __('ui.articleCreatedSuccessfully'));
        $this->clearForm();
    }


    protected function clearForm()
   {
    $this->title = '';
    $this->description = '';
    $this->category = '';
    $this->price = '';
    $this->images = [];
    $this->temporary_images = null;

   } 

    public function render()
    {
        return view('livewire.create-article-form');
    }

    public function messages(){
        return ['temporary_images.*.dimensions' => "minimum dimensions 600x400 pixels"];
    }
    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:4086|dimensions:min_width=600,min_height=400',
            'temporary_images' => 'max:6',
            

        ])) {
        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        } 
            
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            
            unset($this->images[$key]);
        }
    }
}
