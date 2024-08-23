<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;



class ReviewForm extends Component
{
    #[Validate]
    public $title;
    #[Validate]
    public $content;
    #[Validate]
    public $grade;
    public $article;

    public function render()
    {
        return view('livewire.review-form');
    }

    public function mount($article)
    {
        $this->article = $article;
    }

    public function rules(){
        return [
            'title' => "required",
            'content' => "required",
            'grade' => "min:1|max:5|required",
        ];
    }

    public function messages(){
        return [
            'grade.min' => "Select at least 1 star",
        ];
    }
    public function submit($article_id){

        $this->validate();
        
        Review::create([
            'title' => $this->title,
            'content' => $this->content,
            'grade' => $this->grade,
            'user_id' => auth()->user()->id,
            'article_id' => $article_id,
        ]);

        self::resetForm();
        $this->dispatch("refreshList");
    }

    public function resetForm(){
        $this->title = '';
        $this->content = '';
        $this->grade = null;

    }
}
