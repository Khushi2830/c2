<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address',
        'city',
        'state',
        'pincode',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
