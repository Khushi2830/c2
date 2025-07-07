@extends('x')

@section('title', 'Payment Successful')

@section('content3')

    <style>
        body {
            background: #f5f2fc;
            font-family: 'Segoe UI', sans-serif;
        }

        .success-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .success-card {
            background: linear-gradient(135deg, #b388f9, #8e44ad);
            color: white;
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
            animation: popIn 0.5s ease-in-out;
        }

        .success-icon {
            font-size: 4rem;
            color: #fff;
            background: #27ae60;
            border-radius: 50%;
            padding: 1rem;
            width: 90px;
            height: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 1rem;
            box-shadow: 0 0 15px rgba(39, 174, 96, 0.6);
            animation: bounce 1s ease infinite alternate;
        }

        .success-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .success-details {
            font-size: 1rem;
            margin-top: 1rem;
        }

        .btn-home {
            margin-top: 2rem;
            padding: 0.75rem 2rem;
            border: none;
            background-color: #fff;
            color: #8e44ad;
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s ease-in-out;
        }

        .btn-home:hover {
            background-color: #f5f2fc;
            color: #6c3483;
        }

        @keyframes popIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }
    </style>

    <div class="container success-container">
        <div class="success-card">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <div class="success-title">Payment Successful!</div>
            <p class="success-details">
                Thank you for your purchase. Your payment has been received successfully.<br><br>
                <strong>Order ID:</strong> #{{ $order->id }}<br>
                <strong>Amount:</strong> ₹{{ $order->orderItems->sum(fn($item) => $item->price * $item->quantity) }}<br>
                <strong>Date & Time:</strong> {{ now()->format('d M Y, h:i A') }}
            </p>

            <a href="{{ route('index') }}" class="btn-home">Back to Home</a>
        </div>
    </div>

@endsection