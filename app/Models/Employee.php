<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    protected $fillable = ['name', 'last_name', 'phone', 'property_type', 'pincode', 'state', 'city', 'address', 'description', 'email', 'password', 'status'];
    protected $hidden = ['password', 'remember_token'];
}
