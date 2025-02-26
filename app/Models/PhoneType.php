<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneType extends Model
{
    protected $guarded = [];

    

    public function Orders()
    {
        return $this->hasMany(Order::class);
    }
}
