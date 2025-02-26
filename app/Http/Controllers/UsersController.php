<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function usersList()
    {
        // Fetch all users except the currently authenticated user
        $users = User::where('id', '!=', Auth::id())->get();

        return view('admin.users.list', compact('users'));
    }

    public function addUser()
    {
        return view('admin.users.addUser');
    }

    public function editUser(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $user->id, // Exclude current user email from uniqueness
            'phone_number' => 'required|digits:10',
            'role_id' => 'required|exists:roles,id'
        ]);
    
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);
    
        // Sync user role
        $user->roles()->sync([$request->role_id]);
    
        return redirect()->route('users')->with('success', 'User updated successfully!');
    }
    


    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/users')->with('success', 'User deleted successfully.');
    }

}
