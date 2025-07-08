@extends('x')
@section('title', 'Address')

@section('content3')
<style>
    body {
        background-color: #f4eaff;
        font-family: 'Segoe UI', sans-serif;
    }

    .sidebar {
        background-color: #7a2dc5;
        color: white;
        height: calc(100vh - 70px);
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
        padding: 30px;
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

    .address-card {
        background-color: white;
        border-left: 5px solid #7a2dc5;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease-in-out;
        height: 100%;
    }

    .address-card:hover {
        transform: translateY(-5px);
    }

    .address-icon {
        font-size: 1.3rem;
        color: #7a2dc5;
        margin-right: 10px;
    }

    @media (max-width: 767px) {
        .sidebar {
            position: static;
            width: 100%;
            height: auto;
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
            <h4 class="mb-4 fw-bold text-dark">📍 My Address</h4>

            @if(Auth::user()->address)
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="address-card">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-home address-icon"></i>
                            <div>
                                <div class="fw-semibold">Street</div>
                                <div>{{ Auth::user()->address->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="address-card">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-city address-icon"></i>
                            <div>
                                <div class="fw-semibold">City</div>
                                <div>{{ Auth::user()->address->city }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="address-card">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-flag address-icon"></i>
                            <div>
                                <div class="fw-semibold">State</div>
                                <div>{{ Auth::user()->address->state }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="address-card">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-mail-bulk address-icon"></i>
                            <div>
                                <div class="fw-semibold">Pincode</div>
                                <div>{{ Auth::user()->address->pincode }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="alert alert-info text-center">No address found.</div>
            @endif
        </div>
    </div>
</div>
@endsection
