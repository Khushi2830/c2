<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['employee_id'];


public function items()
{
    return $this->hasMany(CartItem::class);
}

public function employee()
{
    return $this->belongsTo(Employee::class);
}
}
