@extends('x')

@section('title', 'Complete Payment')

@section('content3')
<style>
    .payment-card {
        background: #ffffff;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .payment-header {
        background: linear-gradient(90deg, #6f42c1, #9b59b6);
        color: #fff;
        padding: 1.5rem;
        border-bottom: 1px solid #ddd;
        text-align: center;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
    }

    .payment-details h5 {
        font-size: 1rem;
        color: #6c757d;
    }

    .payment-details span {
        font-weight: 600;
        color: #343a40;
    }

    .razorpay-payment-button {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background-color: #6f42c1;
        color: #fff !important;
        border: none;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s ease;
        margin-top: 1.5rem;
    }
    .razorpay-payment-button:hover {
        background-color: #5a36a0;
     }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="payment-card">

                <div class="payment-header">
                    <h3 class="mb-0">Secure Razorpay Checkout</h3>
                </div>

                <div class="card-body p-4 payment-details">
                    <h5 class="mb-3">Order ID: <span>#{{ $order->id }}</span></h5>
                    <h5 class="mb-4">Total Amount: 
                        <span class="text-success">₹{{ $order->orderItems->sum(fn($item) => $item->price * $item->quantity) }}</span>
                    </h5>
                    <h5 class="mb-4">Order Date: 
    <span class="text-info">{{ \Carbon\Carbon::now()->format('d M, Y') }}</span>
</h5>

                    <form action="{{ route('razorpay.payment') }}" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->id }}">

                        <div class="text-center">
                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="{{ env('RAZORPAY_KEY') }}"
                                data-amount="{{ $order->orderItems->sum(fn($item) => $item->price * $item->quantity) * 100 }}"
                                data-currency="INR"
                                data-name="Your Store"
                                data-description="Order Payment"
                                data-image="{{ asset('logo.png') }}"
                                data-prefill.name="{{ Auth::user()->name }}"
                                data-prefill.email="{{ Auth::user()->email }}"
                                data-theme.color="#6f42c1">
                            </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
