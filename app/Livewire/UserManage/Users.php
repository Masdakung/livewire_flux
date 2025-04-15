<?php

namespace App\Livewire\UserManage;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Users extends Component
{
    // public $listUser = [];
    use WithPagination;
    public $page_limit = 10;
    public $search_key = '';

    // public function mount(){
    //     $this->listUser = User::all();
    // }

    #[On('user_load')]
    public function user_load(){
        $query = User::query();
        if($this->search_key){
            // dd($this->search_key);
            $query->where(function($q){
                $q->where('name', 'like', '%'.$this->search_key.'%')
                ->orWhere('email', 'like', '%'.$this->search_key.'%');
            });
        }

        $users_list = $query->paginate($this->page_limit);
        return $users_list;
    }

    public function render()
    {
        $listUser = $this->user_load();
        return view('livewire.user-manage.users',compact('listUser'));
    }
}
