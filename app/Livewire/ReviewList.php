<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
use Livewire\Attributes\On;
use Livewire\WithPagination;


class ReviewList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $article;

    #[On("refreshList")]
    public function render()
    {
        return view('livewire.review-list', [
            'reviews'=> $this->article->reviews()->orderBy('created_at', 'desc')->simplePaginate(5)]);

    }
    public function mount($article)
    {
        $this->article = $article;
    }
}
