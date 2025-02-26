<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create(){
        return view('admin.addServices' );
    }

    public function AddService(Request $request){
        $attr =  $request->validate([
             'service_name' => 'required|min:3'
         ]);
 
         ServiceType::create($attr);
 
         return redirect()->back()->with('success' , 'Service added successfully');
 
     }
 
}
