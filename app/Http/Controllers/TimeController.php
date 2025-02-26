<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AppointmentTime;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function create(){
        return view('admin.addAppointmentTimes' );
    }

    public function addAppointmentTime(Request $request){
        $attr =  $request->validate([
             'time' => 'required|min:3'
         ]);
 
         AppointmentTime::create($attr);
 
         return redirect()->back()->with('success' , 'Appointment Time added successfully');
 
     }
}
