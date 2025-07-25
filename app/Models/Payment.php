<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   

    protected $fillable = [
        'payment_id', 'user_id', 'order_id',
        'amount', 'currency', 'status',
        'method', 'email', 'contact'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
