<?php

namespace App\Livewire;

use App\models\Post;
use Livewire\Component;
use \Livewire\WithPagination;
use Livewire\Attributes\On;
use Flux;

class Posts extends Component
{
    public $posts = [];
    public $postId = null;

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

    public function deleteConfirm($id){
        Flux::modal('delete-post')->show();
        $this->postId = $id;
    }

    public function delete(){
        $id = $this->postId;
        try{
            if($id){
                Post::find($this->postId)->delete();
                $this->reloadPosts();
                session()->flash('success', 'Delete Post Success.');
            }
        }catch(\Exception $e){
            session()->flash('error', 'Delete Post Error.');
        }
        
        Flux::modal('delete-post')->close();
    }

    public function render()
    {
        return view('livewire.posts');
    }
    
}
