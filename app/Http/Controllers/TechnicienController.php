<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Technicien;
use Illuminate\Http\Request;

class TechnicienController extends Controller
{
    public function ShowTechList(){
        $techniciens = Technicien::all();
        return view('admin.techList' , compact('techniciens') );
    }

    public function ShowTechForm(){
        return view('admin.users.addTechnicien');
    }
    public function AddTech(Request $request){
       $attr =  $request->validate([
            'technicien_name' => 'required|min:3'
        ]);

        Technicien::create($attr);

        return redirect('/techList')->with('success' , 'Technicien added successfully');

    }

}
