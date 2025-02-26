<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\OrdersManagment;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\UsersController;

// Public Routes
Route::get('/', function () {
    return view('customers.home');
});

Route::get('/signup', function () {
    return view('auth.signUp');
})->name('signup');



Route::controller(SessionController::class)->group(function() {
    Route::get('/login', 'showForm')->name('login');
    Route::post('/logout', 'destroy')->name('logout');
});

// Admin Routes (with admin prefix and middleware)
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');

    Route::controller(TechnicienController::class)->group(function() {
        Route::get('/techList', 'ShowTechList')->name('techList');
        Route::get('/techList/create', 'ShowTechForm')->name('addTech.create');
        Route::post('/addTech/store', 'AddTech')->name('addTech.store');
    });

    Route::controller(ServicesController::class)->group(function() {
        Route::get('/addService/create', 'create')->name('addService.create');
        Route::post('/addService/store', 'AddService')->name('addService.store');
    });

    Route::controller(TimeController::class)->group(function() {
        Route::get('/addAppointment/create', 'create')->name('addAppointment.create');
        Route::post('/addAppointment/store', 'addAppointmentTime')->name('addAppointment.store');
    });

    Route::controller(OrdersManagment::class)->group(function() {
        Route::get('/orders', 'create')->name('orders');
        Route::get('/order/{order}/edit', 'edit')->name('order.edit');
        Route::patch('/order/{order}', 'update')->name('order.update');
    });

    Route::controller(UsersController::class)->group(function() {
        Route::get('/users', 'usersList')->name('users');
        Route::get('/addUser/create', 'addUser')->name('user.create');
        Route::GET('/user/{user}/edit', 'editUser')->name('user.edit');
        Route::patch('/user/{user}', 'updateUser')->name('user.update');
        Route::delete('/user/{user}','destroy')->name('user.destroy');

    });

    Route::get('/addRole', function () {
        return view('admin.addRoles');
    })->name('addRole');
});

// Public order route
Route::prefix('user')->middleware('auth')->group( function(){
    
    Route::get('/repair', function () {
        return view('customers.repairForm');
    })->name('repair');

    Route::get('/appointment', function () {
        return view('client.appointment');
    })->name('customers.appointment');
    
    Route::get('/contact', function () {
        return view('customers.contact');
    })->name('contact');

    Route::get('/order', [UserOrderController::class, 'create'])->name('order');


});

