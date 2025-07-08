@extends('admin.parent')
@section('title', 'Admin Dashboard')

@section('content')
<style>
    .stat-card {
        background: linear-gradient(135deg, #e9d5ff, #c084fc);
        color: #3b0764;
        padding: 25px;
        border-radius: 20px;
        position: relative;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        height: 100%;
    }

    .stat-card:hover {
        transform: translateY(-6px);
    }

    .stat-card .icon-box {
        font-size: 2rem;
        background-color: #fff;
        color: #7e22ce;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
    }

    .stat-card small {
        font-size: 0.9rem;
        color: #4b5563;
    }

    .stat-card h5 {
        font-size: 1.6rem;
        margin: 0;
        color: #1f2937;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #6b21a8;
        margin-bottom: 20px;
    }

    @media (max-width: 767px) {
        .stat-card {
            text-align: center;
        }
    }
</style>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col-md-3">
            @include("admin.sidebar")
        </div>

        <div class="col-md-9 px-4 py-4">
            <h4 class="section-title">📊 Overview Statistics</h4>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box"><i class="fas fa-box"></i></div>
                        <small>Total Categories</small>
                        <h5>{{ $countCategory }}</h5>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box"><i class="fas fa-layer-group"></i></div>
                        <small>Total Products</small>
                        <h5>{{ $countProduct }}</h5>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box"><i class="fas fa-users"></i></div>
                        <small>Total Users</small>
                        <h5>{{ $countUser }}</h5>
                    </div>
                </div>
            </div>

            <h4 class="section-title mt-5">🧾 Sales & Orders</h4>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box"><i class="bi bi-person-badge"></i></div>
                        <small>Total Employees</small>
                        <h5>{{ $countEmployee }}</h5>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box"><i class="fas fa-shopping-bag"></i></div>
                        <small>Total Online Orders | POS Orders</small>
                        <h5>{{ $countOrder }} | {{ $countcartitem }}</h5>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                        <small>Total Payments | POS Payments</small>
                        <h5>{{ $countPayment }} | {{ $countcash }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
