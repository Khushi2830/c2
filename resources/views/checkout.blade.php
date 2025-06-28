@extends('x')
@section('title', 'index Page')

@section('content3')
<div class="container mt-5">
    <h3 class="mb-4 fw-bold text-primary">Checkout</h3>

    <div class="card shadow-sm p-4 mb-4">
        <ul class="list-group list-group-flush">
            @foreach($cart as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <span class="fw-semibold">{{ $item['title'] }}</span>
                        <small class="text-muted ms-2">(x{{ $item['quantity'] }})</small>
                    </div>
                    <div class="fw-bold text-success">₹{{ $item['price'] * $item['quantity'] }}</div>
                </li>
            @endforeach
        </ul>

        <div class="d-flex justify-content-between align-items-center mt-4 border-top pt-3">
            <h5 class="mb-0 fw-bold">Total Payable:</h5>
            <h5 class="text-danger mb-0">₹{{ collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']) + 75 }}</h5>
        </div>

        <div class="text-end mt-4">
            <a href="#" class="btn btn-lg btn-success px-4 shadow">Place Order</a>
        </div>
    </div>
</div>

<style>
    .list-group-item {
        border-left: 4px solid #5f3dc4;
        transition: background 0.2s ease;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
    }

    .btn-success {
        background-color: #5f3dc4;
        border-color: #5f3dc4;
    }

    .btn-success:hover {
        background-color: #4c2fa2;
        border-color: #4c2fa2;
    }
</style>
@endsection
