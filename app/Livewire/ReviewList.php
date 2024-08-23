<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
use Livewire\Attributes\On;


class ReviewList extends Component
{
    public $article;

    #[On("refreshList")]
    public function render()
    {
        return view('livewire.review-list', [
            'reviews'=> $this->article->reviews()->orderBy('created_at', 'desc')->get()]);

    }
    public function mount($article)
    {
        $this->article = $article;
    }
}
