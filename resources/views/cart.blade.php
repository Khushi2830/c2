@extends('x')
@section('title', 'index Page')

@section('content3')
<div class="container my-4">
    <h3 class="fw-bold mb-4">My Cart</h3>
    <p class="mb-4">total payable : ₹
        {{ collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']) + 75 }}
    </p>

    <div class="row g-4">
        
        <div class="col-lg-8">
            <div class="card shadow-sm p-3">
                @foreach($cart as $id => $item)
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="Product" width="100" class="me-3 rounded">
                            <div>
                                <h5 class="fw-bold mb-1">{{ $item['title'] }}</h5>
                                <p class="text-danger mb-0">₹{{ $item['price'] }}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <h6 class="">Total Quantity :</h6>
                            <h6><span class="quantity-value fw-bold">{{ $item['quantity'] }}</span></h6>
    <button class="btn btn-sm text-danger">
        <i class="bi bi-trash3-fill"></i>
    </button>
</div>
                    </div>
                @endforeach

                <div class="text-end">
                    <button class="btn btn-pink text-white">ADD MORE ITEMS</button>
                </div>
            </div>

            <div class="card mt-4 p-3">
                <h5>Select Delivery Date</h5>
                <input type="date" class="form-control w-25">
            </div>

            <div class="card mt-4 p-3">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Order Booked By</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="khushi kumari">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="8292057979">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Do You Want GST Invoice?</h5>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-dark">Yes</button>
                            <button class="btn btn-pink text-white">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4">
            <div class="card shadow-sm p-3 mb-4">
                <h5 class="fw-bold">Discount</h5>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Enter discount code">
                    <button class="btn btn-pink text-white">APPLY</button>
                </div>
                <a href="#" class="text-decoration-none text-dark">
                    <i class="bi bi-gear me-1"></i> View Coupons
                </a>
            </div>

            <div class="card shadow-sm p-3">
                <h5 class="fw-bold">Summary</h5>
                <ul class="list-unstyled">
                    <li class="d-flex justify-content-between py-1">
                        <span>Sub Total</span>
                        <span>₹{{ collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']) }}</span>
                    </li>
                    <li class="d-flex justify-content-between py-1">
                        <span>Delivery Charges</span>
                        <span>+₹75 <small class="text-danger">(Free above 399)</small></span>
                    </li>
                    <li class="d-flex justify-content-between py-1 border-bottom">
                        <span>Discount</span>
                        <span>-₹0.00</span>
                    </li>
                    <li class="d-flex justify-content-between fw-bold pt-2">
                        <span>Total</span>
                        <span class="text-danger">
                            ₹{{ collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']) + 75 }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-pink {
        background-color: #e6007e;
    }
    .btn-pink:hover {
        background-color: #c8006e;
    }
</style>

@endsection
