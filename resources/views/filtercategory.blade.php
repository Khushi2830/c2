@extends('indexparent')
@section('title', 'index Page')

@section('content2')

 
 <div class="sidebar">
    <div class="sidebar-item">
      <img src="https://i.imgur.com/FfR19iK.png" alt="Cake">
      <div>Cakes</div>
    </div>
     @foreach ($categories as $category )
    <div class="sidebar-item">
      <img src="{{ asset('storage/' . $category->cover_image) }}" alt="Pastries">
      <div>{{ $category->cat_title }}</div>
    </div>
    @endforeach
  </div>

  <!-- Main Content -->
  <div class="content">
    <div class="category-title">Cakes</div>
    <div class="row g-4">

      <!-- Cake Card 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="https://i.imgur.com/ixy2zZD.jpg" class="card-img-top" alt="Cake 1">
          <div class="card-body">
            <h5 class="card-title">Special Designer Choco Bite</h5>
            <p class="text-muted mb-2">Special Designer Dutch Choco Heart</p>
            <p class="d-flex align-items-center text-success mb-1">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Indian_vegetarian_mark.svg/2048px-Indian_vegetarian_mark.svg.png" class="veg-icon" alt="Veg Icon">
              100% Veg.
            </p>
            <p class="price">₹775.00</p>
            <button class="add-btn">Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="https://i.imgur.com/ixy2zZD.jpg" class="card-img-top" alt="Cake 1">
          <div class="card-body">
            <h5 class="card-title">Special Designer Choco Bite</h5>
            <p class="text-muted mb-2">Special Designer Dutch Choco Heart</p>
            <p class="d-flex align-items-center text-success mb-1">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Indian_vegetarian_mark.svg/2048px-Indian_vegetarian_mark.svg.png" class="veg-icon" alt="Veg Icon">
              100% Veg.
            </p>
            <p class="price">₹775.00</p>
            <button class="add-btn">Add</button>
          </div>
        </div>
      </div>

    </div>
  </div>

 
@endsection