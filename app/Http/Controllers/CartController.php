<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cartitem;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use App\Models\Cash;
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
    public function checkout(Request $request)
    {
        $employeeId = auth('employee')->id();
        $cart = Cart::with('items')->where('employee_id', $employeeId)->first();

        if (!$cart || $cart->items->isEmpty()) {
            return back()->with('error', 'Cart is empty.');
        }

        DB::beginTransaction();

        try {
            $totalAmount = $cart->items->sum(fn($item) => $item->price * $item->quantity);

            $cash = Cash::create([
                'employee_id' => $employeeId,
                'cart_id' => $cart->id,
                'method' => $request->method, 
                'amount' => $totalAmount,
                'payment_id' => $request->payment_id ?? null,
            ]);

            DB::commit();
            return redirect()->route('bill.print', $cash->id);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Checkout failed.');
        }
    }
    public function print($id)
    {
        $cash = Cash::with(['employee', 'cart.items.product'])->findOrFail($id);
        return view('bill', compact('cash'));
    }

    public function show()
    {
        $employeeId = auth('employee')->id();

        $cartitems = Cartitem::with(['cart.employee', 'product'])
            ->whereHas('cart', function ($query) use ($employeeId) {
                $query->where('employee_id', $employeeId);
            })
            ->paginate(6);

        return view('posorder', compact("employeeId", "cartitems"));
    }



}
