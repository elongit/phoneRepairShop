<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function showForm(){
        return view('auth.login');
    }


    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
