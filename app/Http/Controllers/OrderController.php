<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in to add to cart.');
        }
        $order = Order::firstOrCreate(
            ['user_id' => $user->id, 'status' => 'pending'],
            ['created_at' => now(), 'updated_at' => now()]
        );
        $orderItem = OrderItems::where('order_id', $order->id)
            ->where('product_id', $id)
            ->first();
        if ($orderItem) {
            $orderItem->quantity += 1;
            $orderItem->save();
        } else {
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => 1,
                'price' => $product->descount_price ?? $product->price
            ]);
        }
        return redirect()->back()->with('success', 'Product added to cart!');
    }
    public function showCart()
    {
        $user = Auth::user();
        $order = Order::where('user_id', $user->id)->where('status', 'pending')->first();
        if (!$order || $order->items->isEmpty()) {
            return view('cart', ['cartItems' => [], 'order' => null]);
        }
        $cartItems = $order->items()->with('product')->get();
        return view('cart', compact('cartItems', 'order'));
    }
    public function checkout()
    {
        $user = Auth::user();

        $order = Order::where('user_id', $user->id)
            ->where('status', 'pending')
            ->with('items.product')
            ->first();

        if (!$order || $order->items->isEmpty()) {
            return redirect()->back()->with('msg', 'Your cart is empty.');
        }


        if (!$user->address) {
            return redirect()->back()->with('msg', 'Please add a shipping address before checkout.');
        }

        $order->status = 1;
        $order->save();

        return redirect()->route('checkout.success')->with('msg', 'Order placed successfully!');
    }


}
