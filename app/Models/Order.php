<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function phoneType()
    {
        return $this->belongsTo(PhoneType::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }


    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function technicien()
    {
        return $this->belongsTo(Technicien::class);
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }
}
