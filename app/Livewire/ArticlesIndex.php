<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;


class ArticlesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $articles;
    public $maxPrice;
    public $priceFilter;
    public $categoryFilter;
    public $gradeFilter;
    public $is_paginate;

    public function mount(){
        $maxPrice = Article::orderByDesc('price')->get();
        $this->maxPrice = $maxPrice->first()->price;
        $this->priceFilter = $this->maxPrice;
        $this->categoryFilter = "all";
        $this->gradeFilter = 0;
    }

    public function render()
    {
        $allArticles = Article::where('is_accepted', true)
                            ->where('price', '<=', $this->priceFilter)
                            ->where('avg_grade', '>=', $this->gradeFilter);

        if($this->categoryFilter != "all"){
            $allArticles->where('category_id', $this->categoryFilter);
        }

        if($allArticles->count() <= 6){
            if($this->priceFilter != $this->maxPrice){
                $allArticles = $allArticles->orderByDesc('price')->get();
            }else{
                $allArticles = $allArticles->orderByDesc('created_at')->get();
            }
            $this->is_paginate = false;
        }else{
            if($this->priceFilter != $this->maxPrice){
                $allArticles = $allArticles->orderByDesc('price')->simplePaginate(6);
            }else{
                $allArticles = $allArticles->orderByDesc('created_at')->simplePaginate(6);
            }
            $this->is_paginate = true;

        }


        return view('livewire.articles-index', [
            'allArticles' => $allArticles
        ]);
    }


    #[On("refreshPrice")]
    public function setPriceFilter($price){
        $this->priceFilter = $price;
    }
    #[On("refreshCategories")]
    public function setCategoryFilter($category){
        $this->categoryFilter = $category;
    }
    #[On("refreshGrade")]
    public function setGradeFilter($grade){
        $this->gradeFilter = $grade;
    }
}
