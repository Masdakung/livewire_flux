<?php

namespace App\Livewire\UserManage;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Flux;

class UsersCreate extends Component
{
    public string $name, $email, $password, $password_confirmation;
    public $picture;
    use WithFileUploads;

    public function save(){
        
        try{
            $data = $this->validate([
                'name' =>   'required',
                'email' =>  ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                // Rule::unique(User::class)->ignore($user->id) สำหรับการอัพเดท
                'picture' =>['nullable', 'image', 'mimes:jpeg, jpg, png, gif, svg', 'max:2048'],
                'password' => ['required', 'min:8', 'string', 'max:50', 'confirmed'],
                'password_confirmation' => ['same:password'],

            ]);
            $data['password']   = Hash::make($data['password']);
            $data['created_at'] = now();
            $data['updated_at'] = now();
            if($this->picture){
                $avatar_name = 'User'.time(). '.' . $this->picture->extension();
                $data['picture'] = $this->picture->storeAs('profiles', $avatar_name, 'public');
            }

            User::create($data);
            $this->dispatch('user_load');
            $this->reset_form();
            Flux::modal('create-users')->close();

        }catch(\Eception $e){

        }
        
    }

    public function reset_form(){
        $this->picture     = "";
        $this->name     = "";
        $this->email    = "";
    }

    public function render()
    {
        return view('livewire.user-manage.users-create');
    }
}
