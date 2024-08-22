<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
use Livewire\Attributes\On;


class ReviewList extends Component
{

    #[On("refreshList")]
    public function render()
    {
        return view('livewire.review-list', [
            'reviews'=> Review::orderBy('id', 'DESC')->get() 
        ]);

    }
}
