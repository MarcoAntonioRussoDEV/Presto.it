<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;



class ReviewForm extends Component
{
    public $title;
    public $content;
    #[Validate]
    public $vote;

    public function render()
    {
        return view('livewire.review-form');
    }

    public function rules(){
        return [
            'vote' => "min:1|max:5"
        ];
    }

    public function submit(){
        Review::create([
            'title' => $this->title,
            'content' => $this->content,
            'vote' => $this->vote,
            'user_id' => auth()->user()->id,
        ]);

        self::resetForm();
        $this->dispatch("refreshList");
    }

    public function resetForm(){
        $this->title = '';
        $this->content = '';
        $this->vote = null;

    }
}
