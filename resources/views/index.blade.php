@extends('indexparent')
@section('title', 'Index ')

@section('content2')

  <div class="container-fluid p-0">
    <div class="row">
    <!-- Banner Carousel -->
    <div id="cakeBannerCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="{{ asset('banner11.png') }}" class="d-block w-100 banner-img" alt="Banner 1">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="{{ asset('banner12.png') }}" class="d-block w-100 banner-img" alt="Banner 2">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="{{ asset('banner0.png') }}" class="d-block w-100 banner-img" alt="Banner 3">
      </div>
      </div>
    </div>
    </div>
  </div>

  <style>
    .banner-img {
    max-height: 500px;
    object-fit: cover;
    width: 100%;
    }
  </style>
  <div class="container p-0 mt-5">
    <h2 class="section-title text-center mb-4 fw-bold" style="color: #7b2dc3;">Our Categories</h2>
    <div class="row g-4">
    @foreach ($categories as $category)
    <div class="col-md-6 col-lg-4">
      <a href="{{ route("filtercategory", $category->id) }}" class="text-decoration-none">
      <div class="card border-0 shadow-sm category-card position-relative overflow-hidden">
      <img src="{{ asset('storage/' . $category->cover_image) }}" class="card-img-top"
      alt="{{ $category->cat_title }}">
      <div class="position-absolute bottom-0 start-0 end-0 text-white text-center py-2 fw-bold"
      style="background: rgba(123, 45, 195, 0.7); font-size: 1.1rem;">
      {{ $category->cat_title }}
      </div>
      </div>
      </a>
    </div>
    @endforeach
    </div>
  </div>
  <div class="container p-0 mt-5">
    <h2 class="section-title text-center mb-4 fw-bold" style="color: #7b2dc3;">All Products</h2>
    <div class="row flex-nowrap overflow-auto g-3 px-2">
    @foreach ($products as $product)
    <div class="col-10 col-sm-6 col-md-3 col-lg-3">
      <div class="card  border-4 shadow-sm">
      <div class="position-relative">
      <img src="{{ asset("storage/" . $product->image) }}" class="card-img-top rounded-top"
      alt="{{ $product->title }}">
      <div class="position-absolute top-0 end-0  text-white px-2 py-1 rounded-pill "
      style="background-color: #7b2dc3;" style="background-color: #7b2dc3;">
      <small>{{$product->category->cat_title}}</small>
      </div>
      </div>
      <div class="card-body">
      <h6 class="card-title fw-semibold">{{ $product->title }}</h6>
      <h6 class="card-title"><del>₹{{ $product->price }}</del> ₹{{ $product->descount_price }}</h6>
      <p class="text-success small">
      <img src="https://cdn-icons-png.flaticon.com/512/3480/3480301.png" class="veg-icon" style="width: 14px;"
        alt="">
      100% Veg.
      </p>
      <div class="text-end">
      <a href="{{ route("view", $product->id) }}" class="btn btn-sm"
        style="background-color: #7b2dc3; color: white;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="white" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"
        viewBox="0 0 24 24">
        <circle cx="9" cy="21" r="1" />
        <circle cx="20" cy="21" r="1" />
        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
        </svg>
      </a>
      </div>
      </div>
      </div>
    </div>
    @endforeach
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection