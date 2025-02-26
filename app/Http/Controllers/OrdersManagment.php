<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Role;
use App\Models\Status;
use App\Models\Technicien;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersManagment extends Controller
{
    public function create(){
        $orders = Order::all();
        return view('admin.orders.ordersList' , compact('orders') );
    }

   

    
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $statuses = Status::all();
        $roles = Role::where('name', 'technician')->get();
        $technicians = $roles->flatMap(function ($role) {
            return $role->users;
        });        
        return view('admin.orders.edit', compact('order','technicians' , 'statuses'));
    }

    public function update(Request $request , Order $order){
        $order->update([
            'status_id' => $request->order_status,
            'technicien_id' => $request->technician_id

        ]);
        
        $order->status->update([
            'progress' => $request->order_progress,
        ]);

        return redirect('admin/orders')->with('success' , 'Order edited successfully');

    }       
}
