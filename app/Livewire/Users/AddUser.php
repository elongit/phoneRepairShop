<?php
namespace App\Livewire\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddUser extends Component
{
    public $first_name, $last_name, $email, $phone_number, $password, $role_id;

    public function render()
    {
        $roles = Role::all();
        return view('livewire.users.add-user', compact('roles'));
    }

    protected function rules()
    {
        return [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|digits:10',
            'password' => 'required|min:8',
            'role_id' => 'required|exists:roles,id'
        ];
    }

    public function store()
    {
        $validatedData = $this->validate();

        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'password' => Hash::make($this->password),
        ]);

        // Attach the role
        $user->roles()->attach($this->role_id);

        return redirect('admin/users')->with('message', 'User added successfully!');  
    }

    public function resetForm()
    {
        $this->reset(['first_name', 'last_name', 'email', 'phone_number', 'password', 'role_id']);
        return redirect('admin/users');  

    }
}
