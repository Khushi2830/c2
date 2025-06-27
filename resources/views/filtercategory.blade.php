@extends('x')
@section('title', 'index Page')

@section('content3')

 
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
    <div class="category-title" style="color: #6f42c1">Cakes</div>
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
            <p class="price" style="color: #6f42c1">₹775.00</p>
            <button class="add-btn" style="background-color: #6f42c1">Add</button>
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

    <div class="footer mt-2">
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
        <p><i class="fas fa-envelope"></i> support@monginis.net</p>
        <p><i class="fas fa-envelope"></i> customercare@monginis.net</p>
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

 
@endsection