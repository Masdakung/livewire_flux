<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Flux;

class PostsCreate extends Component
{
    public $post_title, $post_detail;

    public function create(){
        $this->validate([
            'post_title' => "required",
            'post_detail' => "required",
        ]);
        Post::create([
            "post_title" => $this->post_title,
            "post_detail" => $this->post_detail
        ]);

        $this->resetForm();
        Flux::modal('create-post')->close();
        $this->dispatch('reloadPosts');
    }

    public function resetForm(){
        $this->post_title = "";
        $this->post_detail = "";
    }
    
    public function render()
    {
        return view('livewire.posts-create');
    }
    

}
