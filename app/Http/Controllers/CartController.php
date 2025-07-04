<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cartitem;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getUserCart()
{
   return Cart::firstOrCreate(['employee_id' => auth('employee')->id()]);

}
public function add(Product $product)
{
    $cart = $this->getUserCart();

    $item = $cart->items()->where('product_id', $product->id)->first();

    if ($item) {
        $item->increment('quantity');
    } else {
        $cart->items()->create([
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->descount_price,
        ]);
    }

    return back()->with('success', 'Product added to cart.');
}

public function increase(CartItem $item)
{
    $item->increment('quantity');
    return back()->with('success', 'Quantity increased.');
}

public function decrease(CartItem $item)
{
    if ($item->quantity > 1) {
        $item->decrement('quantity');
    } else {
        $item->delete();
    }
    return back()->with('success', 'Quantity updated.');
}

public function remove(CartItem $item)
{
    $item->delete();
    return back()->with('success', 'Item removed from cart.');
}
}
