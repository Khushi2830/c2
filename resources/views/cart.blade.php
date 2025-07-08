@extends('x')

@section('title', 'My Cart')

@section('content3')
    <div class="container py-4">
        <h3 class="fw-bold mb-4" style="color: #782fc2;">🛒 My Cart</h3>




        <div class="row g-4">
            <!-- Left: Cart + Address -->
            <div class="col-lg-8">
                <div class="card shadow p-4 mb-4">

                    @foreach($cartItems as $item)

                        @php

                            $product = $item->product;
                            $subtotal = $item->quantity * $item->price;
                        @endphp
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                            <div class="d-flex">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product" width="100"
                                    class="me-3 rounded">
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $product->title }}</h5>
                                    <p class="text-danger mb-1">Price: ₹{{ $item->price }}</p>
                                    <p class="text-muted mb-0">Subtotal: ₹{{ $subtotal }}</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <form action="{{ route('cart.decrease', $product->id) }}" method="POST">@csrf
                                    <button class="btn btn-sm btn-outline-dark">−</button>
                                </form>
                                <span class="fw-bold">{{ $item->quantity }}</span>
                                <form action="{{ route('cart.increase', $product->id) }}" method="POST">@csrf
                                    <button class="btn btn-sm btn-outline-dark">+</button>
                                </form>
                                <form action="{{ route('cart.remove', $product->id) }}" method="POST">@csrf
                                    <button class="btn btn-sm text-danger"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                    <div class="text-end">
                        <a href="{{ route('index') }}" class="btn text-white" style="background-color: #782fc2;">
                            ➕ Add More Items
                        </a>
                    </div>
                </div>

                <!-- Address Form (only if address not filled) -->
                @if(Auth::check() && !Auth::user()->address)
                    <div class="card p-4">
                        @if (session('msg'))
                            <div class="alert alert-success">{{ session('msg') }}</div>
                        @endif

                        <form action="{{ route('address.store') }}" method="POST">
                            @csrf
                            <h6 class="mb-3 fw-bold">Address</h6>

                            <div class="mb-3">
                                <label>Street Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                                @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                                    @error('city') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control" value="{{ old('state') }}">
                                    @error('state') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Pincode</label>
                                    <input type="text" name="pincode" class="form-control" value="{{ old('pincode') }}">
                                    @error('pincode') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <button class="btn text-white w-100 mt-3" style="background-color: #782fc2;">Save Address</button>
                        </form>
                    </div>
                @endif
            </div>

            <!-- Right: User + Summary -->
            <div class="col-lg-4">
                <!-- User Details -->
                <div class="card shadow p-3 mb-3">
                    <h5 class="fw-bold mb-3">👤 User Details</h5>
                    @if(Auth::check())
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Phone:</strong> {{ Auth::user()->phone ?? 'Not Provided' }}</p>
                    @else
                        <p class="text-danger">You are not logged in. Please log in to checkout.</p>
                    @endif
                </div>

                <!-- Address Summary -->
                <div class="card shadow p-3 mb-3 position-relative">
                    @if (Auth::check() && Auth::user()->address)
                        <form action="{{ route('delete', Auth::user()->address->id) }}" method="post" class="position-absolute"
                            style="top: 15px; right: 15px;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete Address">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    @endif

                    <h5 class="mb-3">
                        <i class="fas fa-map-marker-alt me-1 text-danger"></i>
                        <strong>Shipping Address</strong>
                    </h5>

                    @foreach ($addresses as $address)
                        @if(Auth::check() && Auth::user()->address)
                            <p><strong>Street:</strong> {{ $address->address }}</p>
                            <p><strong>City:</strong> {{ $address->city }}</p>
                            <p><strong>State:</strong> {{ $address->state }}</p>
                            <p><strong>Pincode:</strong> {{ $address->pincode }}</p>
                        @else
                            <p class="text-danger">Please fill your address before checkout.</p>
                        @endif
                    @endforeach
                </div>

                <!-- Summary -->
                <div class="card shadow p-3 mb-3">
                    <h5 class="fw-bold mb-3">💰 Summary</h5>
                    @php
                        $subtotal = collect($cartItems)->sum(fn($item) => $item['price'] * $item['quantity']);
                        $delivery = 75;
                        $total = $subtotal + $delivery;
                    @endphp

                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between">
                            <span>Subtotal</span>
                            <span>₹{{ number_format($subtotal, 2) }}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Delivery</span>
                            <span>₹{{ number_format($delivery, 2) }}</span>
                        </li>
                        <li class="d-flex justify-content-between fw-bold border-top pt-2">
                            <span>Total</span>
                            <span class="text-danger">₹{{ number_format($total, 2) }}</span>
                        </li>
                    </ul>




                </div>




                <!-- Checkout Button -->
                <div class="card shadow p-3 text-center">
                    @if ($order)
                        <a href="{{ route('razorpay.pay', $order->id) }}" class="btn btn-success w-100">Proceed to Checkout</a>
                    @else
                        <p class="text-danger">No order found. Please add items to cart.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-pink {
            background-color: #782fc2;
        }


        .btn-pink:hover {
            background-color: #632aa8;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection