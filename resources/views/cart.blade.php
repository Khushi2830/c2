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
    @php $subtotal = $item['price'] * $item['quantity']; @endphp
    <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
        <div class="d-flex">
            <img src="{{ asset('storage/' . $item['image']) }}" alt="Product" width="100" class="me-3 rounded">
            <div>
                <h5 class="fw-bold mb-1">{{ $item['title'] }}</h5>
                <p class="text-danger mb-1">Price: ₹{{ $item['price'] }}</p>
                <p class="text-muted mb-0">Subtotal: ₹{{ $subtotal }}</p>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <form action="{{ route('cart.decrease', $id) }}" method="POST" class="d-inline">@csrf
                <button class="btn btn-sm btn-outline-dark">−</button>
            </form>
            <span class="fw-bold">{{ $item['quantity'] }}</span>
            <form action="{{ route('cart.increase', $id) }}" method="POST" class="d-inline">@csrf
                <button class="btn btn-sm btn-outline-dark">+</button>
            </form>
            <form action="{{ route('cart.remove', $id) }}" method="POST" class="d-inline">@csrf
                <button class="btn btn-sm text-danger"><i class="bi bi-trash3-fill"></i></button>
            </form>
        </div>
    </div>
@endforeach

                    <div class="text-end">
                        <a href="{{ route("index") }}" class="btn btn-pink text-white" style="background-color: #5f3dc4;"  >ADD MORE ITEMS</a>
                    </div>
                </div>

                <div class="card mt-4 p-3">
                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <form action="{{ route('address.store') }}" method="POST" class="custom-form">
                        @csrf
                        <div class="row">
                        </div>
                        <h6 class="mt-4 mb-2">Address</h6>
                        <div class="mt-2">
                            <label for="address">Street Address</label>
                            <input type="text" id="address" name="address" class="form-control">
                            @error('address')
                                <p class="text-danger small mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" class="form-control">
                                @error('city')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" class="form-control">
                                @error('state')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="pincode">Pin Code</label>
                                <input type="text" id="pincode" name="pincode" class="form-control">
                                @error('pincode')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button class="btn text-white w-100 mt-4 " style="background-color: #5f3dc4;" type="submit">
                            Create a New Account
                        </button>
                    </form>
                </div>

              
            </div>


            <div class="col-lg-4">
                 <div class="card shadow-sm p-3 mb-3">
                  
    <h5 class="fw-bold mb-3">User Details</h5>
    
    @if(Auth::check())
        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Phone:</strong> {{ Auth::user()->phone ?? 'Not Provided' }}</p>
    @else
        <p class="text-danger">You are not logged in. Please log in to proceed with checkout.</p>
    @endif


                    
                </div>
                 <div class="card shadow-sm p-3 mb-3">
    <h5 class="fw-bold mb-3">Shipping Address</h5>

    @if(Auth::check() && Auth::user()->address)
        <p><strong>Street:</strong> {{ Auth::user()->address->address }}</p>
        <p><strong>City:</strong> {{ Auth::user()->address->city }}</p>
        <p><strong>State:</strong> {{ Auth::user()->address->state }}</p>
        <p><strong>Pincode:</strong> {{ Auth::user()->address->pincode }}</p>
    @else
        <p class="text-danger">No address found. Please fill in your address before checkout.</p>
    @endif
               </div>

                <div class="card shadow-sm p-3">
                    <h5 class="fw-bold">Summary</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between py-1">
                            <span>Sub Total</span>
                            <span>₹{{ collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']) }}</span>
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
               
                <div class="card shadow-sm p-3 justify-content-center text-center mt-4">
                    <a href="{{ route("checkout") }}" class="btn btn-success">Proceed to Checkout</a>
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