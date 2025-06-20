<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    protected $fillable = [
    'name', 'lastname', 'phone', 'email', 'state',
    'city', 'property_type', 'address', 'pincode',
    'description', 'password'
];

}
