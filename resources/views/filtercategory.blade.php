@extends('x')
@section('title', 'filtercategory')

@section('content3')
<div class="sidebar">
    <div class="sidebar-item">
        <img src="https://i.imgur.com/FfR19iK.png" alt="Cake">
        <div>Cakes</div>
    </div>

    @foreach ($categories as $category)
        <div class="sidebar-item">
            <a href="{{ route("filtercategory", $category->id) }}" style="text-decoration: none; color: inherit;">
                <img src="{{ asset('storage/' . $category->cover_image) }}" alt="{{ $category->cat_title }}">
                <div>{{ $category->cat_title }}</div>
            </a>
        </div>
    @endforeach
</div>

<div class="content">
    @if($products->isEmpty())
        <div class="alert alert-warning text-center fs-5 py-4 rounded-3 mt-4">
            🚫 No products found in this category.
        </div>
    @else
        <div class="row g-4 mt-2">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card shadow-sm border-4 h-100 rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset("storage/" . $product->image) }}" class="card-img-top object-fit-cover"
                                alt="Cake" style="height: 220px; object-fit: cover;">
                            <span class="badge position-absolute top-0 end-0 m-2 px-2 py-1 rounded-pill fs-6"
                                style="background-color:#5936a8;">{{$product->category->cat_title}}</span>
                        </div>

                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-semibold mt-0">{{ $product->title }}</h5>
                                <p class="text-muted small">{{ Str::limit($product->description, 50) }}</p>

                                <p class="d-flex align-items-center text-success mb-0">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3480/3480301.png" class="veg-icon"
                                        style="width: 14px;" alt="">
                                    100% {{ $product->veg }}
                                </p>

                                <p class="mb-2">
                                    <span class="text-muted text-decoration-line-through">₹{{ $product->price }}</span>
                                    <span class="text-primary fw-bold">₹{{ $product->descount_price }}</span>
                                </p>
                            </div>

                            <a href="{{ route('view', $product->id) }}" class="btn btn-purple mt-3 w-100">Add</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="footer mt-5">
        <div class="row text-center text-md-start">
            <div class="col-md-3 mb-3">
                <div class="logo" style="color: #6f42c1">CREAMER</div>
                <div>Magic every time</div>
            </div>

            <div class="col-md-2 mb-3">
                <h5>Quick Links</h5>
                <a href="#">About Us</a><br>
                <a href="#">Menu</a>
            </div>

            <div class="col-md-3 mb-3">
                <h5>Connect With Us</h5>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <h5>Contact Us</h5>
                <p><i class="fas fa-phone-alt"></i> 7838587043</p>
                <p><i class="fas fa-phone-alt"></i> 8419992244</p>
                <p><i class="fas fa-envelope"></i> support@creamer.net</p>
                <p><i class="fas fa-envelope"></i> customercare@creamer.net</p>
            </div>
        </div>

        <div class="footer-bottom mt-4">
            <div>Creamer © 2025. All Rights Reserved.</div>
            <div class="mt-2">
                <a href="#">Contact Us</a> |
                <a href="#">Privacy</a> |
                <a href="#">Terms Of Use</a>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-purple {
        background-color: #6f42c1;
        color: #fff;
        border: none;
        transition: 0.3s ease;
    }

    .btn-purple:hover {
        background-color: #5936a8;
    }

    .card-title {
        font-size: 1.1rem;
    }

    .card-body {
        padding: 1.2rem;
    }

<<<<<<< HEAD
    .veg-icon {
        width: 18px;
        height: 18px;
    }

    .sidebar {
        width: 200px;
        float: left;
        background: #f4f4f4;
        padding: 20px;
        border-right: 1px solid #ddd;
        height: 100vh;
    }

    .sidebar-item {
        margin-bottom: 15px;
        text-align: center;
    }

    .sidebar-item img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .sidebar-item div {
        margin-top: 8px;
        font-weight: 500;
        color: #333;
    }

    .content {
        margin-left: 220px;
        padding: 20px;
    }

    .alert-warning {
        background-color: #fff3cd;
        border-color: #ffeeba;
        color: #856404;
    }
</style>
@endsection
=======
        .veg-icon {
            width: 18px;
            height: 18px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
>>>>>>> aeae50c5a6203fcda41d66e3a096045d0de54728
