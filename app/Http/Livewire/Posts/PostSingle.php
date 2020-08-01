<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;

class PostSingle extends Component
{
    public $post;
    public function mount($post)
    {
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.posts.post-single');
    }
}
