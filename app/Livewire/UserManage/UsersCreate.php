<?php

namespace App\Livewire\UserManage;

use Livewire\Component;

class UsersCreate extends Component
{
    public $name, $email, $password, $confirm_password;

    public function create(){
        dd($this->name);
    }

    public function render()
    {
        return view('livewire.user-manage.users-create');
    }
}
