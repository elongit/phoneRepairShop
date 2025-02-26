<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];
    public function appointmentTime()
    {
        return $this->belongsTo(AppointmentTime::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
