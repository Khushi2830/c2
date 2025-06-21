@extends('indexparent')
@section('title', 'index Page')

@section('content2')

 <div class="container-fluid m-0 p-0">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/top-banners/banner11.jpg" width="2000px"   alt="Happy Father's Day Family" class="img-fluid mx-auto d-block" />
      </div>
    </div>
  </div>
<!-- category  -->
  <div class="container py-5">
  <h2 class="section-title" style="color: #7b2dc3;">Our Categories</h2>
  <div class="row g-4">
    <!-- Cakes -->
    <div class="col-md-6 col-lg-4">
      <div class="category-card">
        <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/LTPe6PEn4d5YYV8xIVApwtjsdQa1zoaIlC6O1CCI.jpg" alt="Cakes">
        <div class="category-overlay">Cakes</div>
      </div>
    </div>
    <!-- Pastries -->
    <div class="col-md-6 col-lg-4">
      <div class="category-card">
        <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/1622273640616_44.jpg" alt="Pastries">
        <div class="category-overlay">Pastries</div>
      </div>
    </div>
    <!-- Bakesware -->
    <div class="col-md-6 col-lg-4">
      <div class="category-card">
        <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/1622099160880_54.jpg" alt="Bakesware">
        <div class="category-overlay">Bakesware</div>
      </div>
    </div>
    <!-- Savouries -->
    <div class="col-md-6 col-lg-4">
      <div class="category-card">
        <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/1622187602664_0.jpeg" alt="Savouries">
        <div class="category-overlay">Savouries</div>
      </div>
    </div>
    <!-- Chocolates -->
    <div class="col-md-6 col-lg-4">
      <div class="category-card">
        <img src="https://assets.winni.in/product/primary/2022/2/57895.jpeg?dpr=1&w=400" alt="Chocolates">
        <div class="category-overlay">Chocolates</div>
      </div>
    </div>
    <!-- Donuts -->
    <div class="col-md-6 col-lg-4">
      <div class="category-card">
        <img src="https://www.fnp.com/images/pr/l/v300/donut-shaped-cushion-pillow_1.jpg" alt="Donuts">
        <div class="category-overlay">Donuts</div>
      </div>
    </div>
  </div>
</div>

  <!-- cake product -->
<div class="container py-4">
  <h2 class="section-title" style="color: #7b2dc3;" >Cakes</h2>
  <div class="row flex-nowrap overflow-auto g-3">
    <!-- Card 1 -->
    <div class="col-10 col-sm-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
          <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/1674039776019_84.jpg" alt="Cake">
          <div class="price-tag" style=" background-color: #7b2dc3;">₹550.00</div>
        </div>
        <div class="product-details">
          <h6>Exotic Butterscotch Cake</h6>
          <p class="text-success mb-1">
            <img src="https://cdn-icons-png.flaticon.com/512/3480/3480301.png" class="veg-icon" alt=""> 100% Veg.
          </p>
          <div class="product-footer">
            <div>
              <div class="weight-box d-inline">0.5</div>
              <span class="ms-1">KGS</span>
            </div>
            <button class="add-cart-btn border-0 "  style=" background-color: #7b2dc3;">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

@endsection