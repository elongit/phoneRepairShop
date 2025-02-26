<?php

namespace App\Livewire;

use App\Models\AppointmentTime;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class Appointment extends Component
{
    public $appointment_date;
    public $selected_time;
    public $address;

    public function render()
    {
        $times =  AppointmentTime::all();

        return view('livewire.appointment', compact('times'));
    }

    protected function rules()
    {
        return [
            'appointment_date' => 'required|date',
            'selected_time' => 'required|exists:appointment_times,id',  // Ensuring that the selected time exists in the database
            'address' => 'required|max:25',
        ];
    }

    public function store()
    {
        $validatedData = $this->validate();
    
        // Get the phone repair request for the authenticated user
        $requestUser = Order::where('user_id', Auth::id())->first();
    
        if (!$requestUser) {
            session()->flash('error', 'No repair request found for this user.');
            return redirect()->back();
        }
    
        // Start a database transaction
        DB::beginTransaction();
    
        try {
            // Create the appointment record
            $appointment =\App\Models\Appointment::create([
                'appointment_date' => $this->appointment_date,
                'appointment_time_id' => $this->selected_time,
                'address' => $this->address,
            ]);
    
            // Associate the appointment with the user's phone repair request
            $requestUser->update([
                'appointment_id' => $appointment->id,
            ]);
    
            // Commit the transaction
            DB::commit();
    
            session()->flash('message', 'Your appointment has been scheduled successfully!');
            return redirect('/order');
        } catch (\Exception $e) {
            // If an error occurs, roll back the transaction
            DB::rollBack();
    
            // Flash an error message
            session()->flash('error', 'An error occurred while scheduling your appointment: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
