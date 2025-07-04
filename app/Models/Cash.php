<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
     protected $fillable = ['employee_id', 'cart_id', 'method', 'amount', 'payment_id'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
    public function cart() {
        return $this->belongsTo(Cart::class);
    }
}
