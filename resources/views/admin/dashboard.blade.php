@extends('admin.parent')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="container-fluid m-0 p-0">
        <div class="row ">
                <div class="col-md-3">
                    @include("admin.sidebar")
                </div>


            <div class="col-9">
                <div class="container py-5">
                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="icon-box"><i class="fas fa-box"></i></div>
                                <small>Total Category</small>
                                <h5 class="fw-bold">{{$countCategory}}</h5>
                                <div class="chart-bg"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="icon-box"><i class="fas fa-layer-group"></i></div>
                                <small>Total Product</small>
                                <h5 class="fw-bold">{{$countProduct}}</h5>
                                <div class="chart-bg"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="icon-box"><i class="fas fa-users"></i></div>
                                <small>Total User</small>
                                <h5 class="fw-bold">{{$countUser}}</h5>
                                <div class="chart-bg"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container py-5">
                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="icon-box"><i class="bi bi-person-badge"></i></div>
                                <small>Total Provider</small>
                                <h5>59</h5>
                                <div class="chart-bg"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="icon-box"><i class="fas fa-shopping-bag"></i></div>
                                <small>Total Order</small>
                                <h5>187,13</h5>
                                <div class="chart-bg"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="stat-card">
                                <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                <small>Total Payment</small>
                                <h5>₹187,13</h5>
                                <div class="chart-bg"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection