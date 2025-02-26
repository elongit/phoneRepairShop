<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $guarded = [];

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
