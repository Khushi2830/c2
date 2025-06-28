<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\orderitem;
use App\Models\payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
        $cart = session()->get('cart');

        if (!$cart || count($cart) == 0) {
            return back()->with('error', 'Cart is empty!');
        }

        $total = 0;

       
        foreach ($cart as $id => $item) {
            $total += $item['price'] * $item['quantity'];
        }

        
        $order = order::create([
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'total' => $total,
            'status' => 'pending',
        ]);

        foreach ($cart as $productId => $item) {
            orderitem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

     
        payment::create([
            'order_id' => $order->id,
            'payment_method' => $request->payment_method,
            'payment_status' => 'pending',
            'amount' => $total,
        ]);

        session()->forget('cart');

        return redirect()->back()->with('msg', 'Order placed successfully!');
    }
}
