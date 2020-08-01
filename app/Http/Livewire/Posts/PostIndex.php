<?php

namespace App\Http\Livewire\Posts;

use App\Post;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component {
    use WithPagination;

    protected $listeners = [
        'postAdded'
    ];
    /**
     * @var mixed|string
     */


    public function postAdded($postId)
    {
        session()->flash('success', 'Your post was added');
    }

    public function render()
    {
        return view('livewire.posts.post-index', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }
    public function setPage($url) {
        $this->currentPage = explode('page=', $url) [1];
        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }
}
