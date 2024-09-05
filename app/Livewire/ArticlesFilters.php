<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticlesFilters extends Component
{

    public $priceFilter, $categoryFilter, $gradeFilter, $maxPrice;
    // public function render()
    // {
    //     return view('livewire.articles-filters');
    // }

    public function updatedpriceFilter(){
        $this->dispatch("refreshPrice", $this->priceFilter);
    }
    public function updatedcategoryFilter(){
        $this->dispatch("refreshCategories", $this->categoryFilter);
    }
    public function updatedgradeFilter(){
        $this->dispatch("refreshGrade", $this->gradeFilter);
    }

    public function mount(){
        $maxPrice = Article::orderByDesc('price')->get();
        $maxPrice = $maxPrice->first()->price;
        $this->maxPrice = $maxPrice;
        $this->priceFilter = $maxPrice;
        $this->categoryFilter = "all";
        $this->gradeFilter = 0;
    }

    public function resetFilters(){
        $this->priceFilter = $this->maxPrice;
        $this->gradeFilter = 0;
        $this->categoryFilter = "all"; 
        $this->dispatch("refreshPrice", $this->priceFilter);
        $this->dispatch("refreshCategories", $this->categoryFilter);
        $this->dispatch("refreshGrade", $this->gradeFilter);

    }
}
