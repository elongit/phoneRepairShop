<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function create(){
        $userId = Auth::id();
        $orders = Order::where('user_id' , $userId)->get();
        return view('customers.order' , compact('orders'));
    }
}
