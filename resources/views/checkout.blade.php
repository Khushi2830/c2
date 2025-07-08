@extends('x')

@section('title', 'Complete Payment')

@section('content3')

    <style>
        body {
            background: #f4f0fb;
            font-family: 'Segoe UI', sans-serif;
        }

        .payment-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.08);
            padding: 2rem;
            transition: all 0.3s ease-in-out;
        }

        .payment-header {
            background: linear-gradient(135deg, #6f42c1, #9b59b6);
            color: #fff;
            border-radius: 10px;
            padding: 1.5rem 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .payment-header h3 {
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .payment-details h5 {
            font-size: 1.05rem;
            margin-bottom: 1rem;
            color: #555;
        }

        .payment-details span {
            font-weight: bold;
            color: #343a40;
        }

        .razorpay-payment-button {
            display: inline-block;
            padding: 0.75rem 2rem;
            background-color: #6f42c1;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            transition: 0.3s;
            box-shadow: 0 8px 16px rgba(111, 66, 193, 0.3);
        }

        .razorpay-payment-button:hover {
            background-color: #552ca0;
            box-shadow: 0 8px 20px rgba(111, 66, 193, 0.5);
        }

        @media (max-width: 576px) {
            .payment-card {
                padding: 1.2rem;
            }
        }
    </style>

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="payment-card">
                    <div class="payment-header">
                        <h6>Secure Razorpay Checkout</h6>
                    </div>
                    <div class="payment-details">
                        <h6>
                            @if(Auth::check())
                                <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                <p><strong>Phone:</strong> {{ Auth::user()->phone ?? 'Not Provided' }}</p>
                            @endif
                        </h6>
                        <h6>🧾 Order ID: <span>#{{ $order->id }}</span></h6>
                        <h5>📅 Date & Time:
                            <span class="text-dark">{{ now()->format('d M Y, h:i A') }}</span>
                        </h5>
                        <h6>
                            @if(Auth::check() && Auth::user()->address)
                                <p><strong>Street:</strong> {{ Auth::user()->address->address }}</p>
                                <p><strong>City:</strong> {{ Auth::user()->address->city }}</p>
                                <p><strong>State:</strong> {{ Auth::user()->address->state }}</p>
                                <p><strong>Pincode:</strong> {{ Auth::user()->address->pincode }}</p>
                            @endif
                        </h6>
                        <h5>💰 Total Amount:
                            <span class="text-success">
                                ₹{{ $order->orderItems->sum(fn($item) => $item->price * $item->quantity) }}
                            </span>
                        </h5>

                        <form id="razorpay-form" action="{{ route('razorpay.payment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <div class="text-center mt-4">
                                <button type="button" id="pay-button" class="razorpay-payment-button btn">
                                    <i class="fas fa-lock me-2"></i> Pay
                                    ₹{{ $order->orderItems->sum(fn($item) => $item->price * $item->quantity) }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Razorpay JS -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.getElementById('pay-button').onclick = function (e) {
            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": "{{ $order->orderItems->sum(fn($item) => $item->price * $item->quantity) * 100 }}",
                "currency": "INR",
                "name": "Your Store",
                "description": "Payment for Order #{{ $order->id }}",
                "handler": function (response) {
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('razorpay-form').submit();
                },
                "prefill": {
                    "name": "{{ Auth::user()->name }}",
                    "email": "{{ Auth::user()->email }}"
                },
                "theme": {
                    "color": "#6f42c1"
                }
            };

            var rzp = new Razorpay(options);
            rzp.open();
            e.preventDefault();
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection