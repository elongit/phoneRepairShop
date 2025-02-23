<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function () {
    return view('auth.signUp');
})->name('signup');

Route::get('/payment', function () {
    return view('client.payment');
})->name('payment');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


