<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\On;
use Flux;

class PostEdit extends Component
{
    public $postId, $post_title, $post_detail;
    #[On('editPost')]
    public function editPost($id){
        $post = Post::find($id);
        $this->postId = $id;
        $this->post_title = $post->post_title;
        $this->post_detail = $post->post_detail;
        Flux::modal('edit-post')->show();
    }

    public function render()
    {
        return view('livewire.post-edit');
    }
}
