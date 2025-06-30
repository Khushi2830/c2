@extends('x')
@section('title', 'index Page')

@section('content3')

<div class="container py-5 text-center">
    <h2 class="text-success">🎉 Order Placed!</h2>
    <p class="lead">Thank you for shopping with us. Your order has been placed successfully.</p>
    <a href="{{ route('index') }}" class="btn btn-primary mt-3">Continue Shopping</a>
</div>

@endsection