<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;

class PostCreate extends Component
{
    public $title;
    public $body;

    public function addPost()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = auth()->user()->posts()->create([
            'title' => $this->title,
            'body' => $this->body,
            ]);
        $this->emit('postAdded', $post->id);
        $this->title = '';
        $this->body = '';
    }
    public function render()
    {
        return view('livewire.posts.post-create');
    }
}
