<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use App\Models\Order;
use App\Models\OrderItems;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RazorpayController extends Controller
{
    public function pay($orderId)
    {
        $order = Order::with('orderItems')->findOrFail($orderId);

        return view('checkout', compact('order'));
    }

    public function handlePayment(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if ($payment->status === 'authorized') {
            $payment->capture(['amount' => $payment->amount]);


            Payment::create([
                'payment_id' => $payment->id,
                'user_id' => Auth::id(),
                'order_id' => $request->order_id,
                'amount' => $payment->amount / 100,
                'currency' => $payment->currency,
                'status' => $payment->status,
                'method' => $payment->method,
                'email' => $payment->email,
                'contact' => $payment->contact,
            ]);

            // Optionally update order status
            Order::where('id', $request->order_id)->update(['status' => 1]);

            return redirect()->route('success', ['order_id' => $request->order_id]);
        }

        return redirect()->route('razorpay.failed');
    }

    public function failed()
    {
        return view('razorpay.failed');
    }
}