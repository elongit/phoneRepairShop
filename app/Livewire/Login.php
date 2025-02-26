<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Validate('required|email')]
    public $email = '';
    #[Validate('required')]
    public $password = ''; 
    public function render()
    {
        if (Auth::check()) {
            return redirect(); 
        }
        return view('livewire.login');
    }

    public function store()
    {
        $attributes = $this->validate();
        // attempt login user
        if (!Auth::attempt($attributes)) {
            $this->reset('password'); 
            throw ValidationException::withMessages([
                'Invalidcredentials' => ['Invalid credentials'],
         ]);

        }
        $this->reset(['email' , 'password']);


          // re genrate the session
          session()->regenerate();
          $user = Auth::user();
         $dashboard = $user->hasRole('Admin') ? '/admin/dashboard' : '/user/repair';
          return redirect($dashboard)->with('success', 'Welcome' .' ' .ucfirst($user->first_name));
    }
}
