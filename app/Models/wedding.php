<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wedding extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'date',
        'city',
        'description',
    ];

   
}
