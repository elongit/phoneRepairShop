<?php

namespace App\Livewire\Users;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public $first_name, $last_name, $email, $phone_number, $role_id;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
    }

    public function render()
    {
        $roles = Role::all();  
        return view('livewire.users.edit-user', compact('roles'));
    }

    public function updateUser()
    {
        $this->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|digits:10',
            'role_id' => 'required|exists:roles,id'
        ]);

        $this->user->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);

        // Update the user role
        $this->user->roles()->sync([$this->role_id]);

        session()->flash('message', 'User updated successfully!');
        return redirect()->route('user.edit', $this->user->id);
    }
}
