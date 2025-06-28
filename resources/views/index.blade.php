@extends('indexparent')
@section('title', 'index Page')

@section('content2')

  <div class="container-fluid m-0 mt-2 p-0">
    <div class="row justify-content-center">
    <div class="col-md-12">
      <img src="{{ asset("banner10.png") }}" width="2000px" alt="Happy Father's Day Family"
      class="img-fluid mx-auto d-block" />
    </div>
    </div>
  </div>

  <div class="container p-0 mt-0">
    <h2 class="section-title" style="color: #7b2dc3;">Our Categories</h2>
    <div class="row g-4">

    @foreach ($categories as $category)

    <div class="col-md-6 col-lg-4">
      <a href="{{ route("filtercategory", $category->id) }}">
      <div class="category-card">
      <img src="{{ asset('storage/' . $category->cover_image) }}" alt="{{ $category->cat_title }}">
      <div class="category-overlay">{{ $category->cat_title }}</div>
      </div>
      </a>
    </div>

    @endforeach
    </div>
  </div>


  <div class="container p-0 mt-0">
    <h2 class="section-title" style="color: #7b2dc3;">All Products</h2>
    <div class="row flex-nowrap overflow-auto g-3">
  @foreach ($products as $product)
    <div class="col-10 col-sm-6 col-md-4 col-lg-3">
     
      <div class="product-card">
      <div class="product-img">
       <img src="{{ asset("storage/" . $product->image) }}" class="card-img-top" alt="Cake 1">
        <div class="price-tag" style=" background-color: #7b2dc3;"><del>₹{{$product->price}}</del>₹{{$product->descount_price}}</div>
      </div>
      <div class="product-details">
        <h6>{{$product->title}}</h6>
        <p class="text-success mb-1">
        <img src="https://cdn-icons-png.flaticon.com/512/3480/3480301.png" class="veg-icon" alt=""> 100% Veg.
        </p>
        <div class="product-footer">
        <a class="add-cart-btn border-0 " href="{{ route("view", $product->id) }}" style=" background-color: #7b2dc3;">
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

@endsection