<?php

namespace App\Livewire\UserManage;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $ListUsr = [];

    public function mount(){
        $this->ListUsr = User::all();
    }
    public function render()
    {
        return view('livewire.user-manage.users');
    }
}
