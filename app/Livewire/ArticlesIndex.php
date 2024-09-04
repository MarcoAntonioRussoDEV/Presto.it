<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;


class ArticlesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $articles;
    public $maxPrice;
    public $priceFilter;
    public $categoryFilter;
    public $gradeFilter;

    public function mount(){
        $maxPrice = Article::orderByDesc('price')->get();
        $this->maxPrice = $maxPrice->first()->price;
        $this->priceFilter = $this->maxPrice;
        $this->categoryFilter = "all";
        $this->gradeFilter = 0;
    }

    public function render()
    {
        $allArticles = Article::where('price', '<=', $this->priceFilter)
                            ->where('avg_grade', '>=', $this->gradeFilter);

        if($this->categoryFilter != "all"){
            $allArticles->where('category_id', $this->categoryFilter);
        }

        $allArticles = $allArticles->orderByDesc('created_at')->paginate(6);

        return view('livewire.articles-index', [
            'allArticles' => $allArticles
        ]);
    }

    public function gradeFilterReset(){
        $this->gradeFilter = 0;
    }

    public function resetFilters(){
        $this->articles = Article::all();
        $this->priceFilter = $this->maxPrice;
        $this->gradeFilter = 0;
        $this->categoryFilter = "all"; 
    }
}
