<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'customer_name',
        'phone',
        'total',
        'status',
    ];

    public function items()
    {
        return $this->hasMany(orderitem::class, 'order_id');
    }

    public function payment()
    {
        return $this->hasOne(payment::class, 'order_id');
    }
}

