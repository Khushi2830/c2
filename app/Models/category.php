<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = [];

    public function subcategories()
    {
        return $this->hasOne(category::class, "id", 'category_id');
    }
}
