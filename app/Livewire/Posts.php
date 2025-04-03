<?php

namespace App\Livewire;

use App\models\Post;
use Livewire\Component;
use \Livewire\WithPagination;
use Livewire\Attributes\On;

class Posts extends Component
{
    public $posts = [];

    public function mount(){
        $this->posts = Post::all();
    }

    #[On('reloadPosts')]
    public function reloadPosts(){
        $this->posts = Post::all();
    }

    public function edit($id){
        $this->dispatch('editPost', $id);
    }

    public function render()
    {
        return view('livewire.posts');
    }
    
}
