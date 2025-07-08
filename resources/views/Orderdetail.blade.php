@extends('x')
@section('title', 'Order')

@section('content3')
<style>
    body {
        background-color: #f4eaff;
        font-family: 'Segoe UI', sans-serif;
    }

    .sidebar {
        background-color: #7a2dc5;
        color: white;
        height: 100vh;
        position: fixed;
        top: 70px;
        left: 0;
        padding: 30px 20px;
        width: 280px;
        overflow-y: auto;
        z-index: 999;
    }

    .main-content {
        margin-left: 280px;
        margin-top: 70px;
        padding: 20px 30px;
        background-color: #f4eaff;
        min-height: calc(100vh - 70px);
    }

    .avatar {
        width: 90px;
        height: 90px;
        background-color: #e4c8f4;
        border-radius: 50%;
        font-size: 2.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 15px;
        color: #7a2dc5;
        font-weight: bold;
    }

    .nav-link {
        background-color: white;
        color: #7a2dc5;
        margin-bottom: 12px;
        border-radius: 10px;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        font-weight: 500;
        transition: 0.3s;
    }

    .nav-link:hover {
        background-color: #e4c8f4;
        color: #5a1ca1;
    }

    .logout {
        background-color: #dc3545 !important;
        color: white !important;
    }

    .order-card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        padding: 15px 18px;
        font-size: 0.85rem;
        margin-bottom: 20px;
        transition: transform 0.2s ease-in-out;
        border-left: 5px solid #7a2dc5;
    }

    .order-card:hover {
        transform: translateY(-5px);
    }

    .order-id {
        font-weight: bold;
        color: #7a2dc5;
    }

    .order-total {
        font-weight: bold;
        color: #198754;
    }

    @media (max-width: 767px) {
        .sidebar {
            position: static;
            width: 100%;
            height: auto;
            padding: 20px;
        }

        .main-content {
            margin-left: 0;
            margin-top: 0;
            padding: 20px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-12 sidebar d-flex flex-column">
            <div class="avatar">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <div class="text-center fw-semibold mb-2">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</div>
            <div class="text-center small mb-3">{{ Auth::user()->email }}</div>

            <a href="{{ route('profile') }}" class="nav-link"><i class="fas fa-pen"></i> Edit Details</a>
            <a href="{{ route('order') }}" class="nav-link"><i class="fas fa-box"></i> My Orders</a>
            <a href="{{ route('address') }}" class="nav-link"><i class="fas fa-map-marker-alt"></i> My Address</a>
            <a href="#" class="nav-link"><i class="fas fa-cog"></i> Settings</a>
            <a href="{{ route('index.logout') }}" class="nav-link logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-12 main-content">
            <h5 class="mb-4 fw-bold text-dark">🧾 My Orders</h5>

            <div class="row">
                @forelse($order as $singleOrder)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="order-card">
                            <div class="mb-1"><span class="order-id">#{{ $singleOrder->id }}</span></div>
                            <div class="mb-1 text-muted">{{ $singleOrder->created_at->format('d M Y, h:i A') }}</div>

                            @if(Auth::check())
                                <div class="mb-1"><strong>Name:</strong> {{ Auth::user()->name }}</div>
                                <div class="mb-1"><strong>Email:</strong> {{ Auth::user()->email }}</div>
                                <div class="mb-1"><strong>Phone:</strong> {{ Auth::user()->phone ?? 'Not Provided' }}</div>
                            @endif

                            @if(Auth::user()->address)
                                <div class="mb-1"><strong>City:</strong> {{ Auth::user()->address->city }}</div>
                                <div class="mb-1"><strong>Pincode:</strong> {{ Auth::user()->address->pincode }}</div>
                            @endif

                            <div class="text-end mt-2">
                                <span class="order-total">₹{{ $singleOrder->orderItems->sum(fn($item) => $item->price * $item->quantity) }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <div class="alert alert-info small">No orders found.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
