<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\PhoneType;
use App\Models\ServiceType;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;

class RepairForm extends Component
{
    #[Validate('required|string|max:25')]
    public $device_model;

    #[Validate('required|digits:15')]
    public $imei_number;

    #[Validate('required|max:255')]
    public $issue_description;

    #[Validate('required|exists:service_types,id')]
    public $repair_service;

    public function render()
    {
        $services = ServiceType::all();
        return view('livewire.repair-form' , compact('services'));
    }

    public function store()
    {
        $this->validate();

        $status = \App\Models\Status::where('name', 'En attente')->first();

        // Start a database transaction
        DB::beginTransaction();
    
        try {
            $phone = PhoneType::create([
                'device_model' => $this->device_model,
                'IMEI_number' => $this->imei_number,
            ]);
    
            Order::create([
                'order_id' => rand(10001, 99999), 
                'issue_description' => $this->issue_description,
                'user_id' => Auth::id(),
                'phone_type_id' => $phone->id,
                'service_type_id' => $this->repair_service,
                'status_id' => $status->id

            ]);
    
            // Commit the transaction
            DB::commit();
    
            return redirect('/appointment');
        } catch (\Exception $e) {
            // Rollback the transaction if anything goes wrong
            DB::rollBack();
            
            session()->flash('error', 'An error occurred while processing your request. Please try again.' . $e);
    
            return redirect()->back();
        }
    }
    
}
