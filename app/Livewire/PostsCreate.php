<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Flux;

class PostsCreate extends Component
{
    public $post_title, $post_detail;

    public function create(){
        try{
            $this->validate([
                'post_title' => "required",
                'post_detail' => "required",
            ]);
            $save_post = Post::create([
                "post_titlet" => $this->post_title,
                "post_detail" => $this->post_detail
            ]);
            $this->dispatch('reloadPosts');
            session()->flash('success', 'Created Post Success.');
            
        } catch (\Exception $e) {

            session()->flash('error', 'Create Post Eorror.');

        }
        
        Flux::modal('create-post')->close();
        $this->resetForm();
        
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
