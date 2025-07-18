<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }
    public function cartItems()
{
return $this->hasMany(CartItem::class);
}
}
