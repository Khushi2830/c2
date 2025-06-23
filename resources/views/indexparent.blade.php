<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creamer Index</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
         body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .header {
      background-color:  #e4e0f4;
      padding: 10px 20px;
    }
    .logo {
      color: white;
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
    }
    .partner-btn {
      background-color: #f8d5f8;
      border: none;
      border-radius: 6px;
      padding: 6px 12px;
      font-weight: 500;
    }
    .search-bar {
      border: 1px solid #782ec3;
      border-radius: 6px;
    }
    .search-input {
      border: none;
      outline: none;
      width: 100%;
      padding: 6px 10px;
    }
    .search-icon {
      color: gray;
      padding-right: 10px;
    }
    .icon-group i {
      color: white;
      font-size: 20px;
      margin: 0 10px;
    }
    .location {
      color: white;
      font-weight: 500;
    }
    .profile-circle {
      background-color: #1a1249;
      color: white;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
    }
    </style>
     <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .top-section {
      background-color: #792dc4; /* Pink */
      color: white;
      padding: 60px 30px;
    }

    .top-section h2 {
      font-weight: bold;
      font-size: 2.5rem;
    }

    .find-stores-btn {
      margin-top: 20px;
    }

    .footer {
      background-color: #ad83b3; /* Dark Blue */
      color: white;
      padding: 40px 30px;
    }

    .footer a {
      color: white;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .footer .logo {
      font-size: 2rem;
      font-weight: bold;
      color: #e4007e;
    }

    .footer .social-icons i {
      font-size: 1.5rem;
      margin-right: 15px;
      color: white;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid #444;
      font-size: 14px;
    }

    .cake-image {
      max-width: 100%;
      height: auto;
    }

    @media (min-width: 768px) {
      .top-section,
      .footer {
        padding-left: 80px;
        padding-right: 80px;
      }
    }
  </style>
  <style>
    body {
      background-color: #fdf8f4;
    }
    .category-card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      height: 200px;
    }
    .category-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .category-card:hover img {
      transform: scale(1.05);
    }
    .category-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.5);
      color: #fff;
      padding: 10px;
      text-align: center;
      font-weight: bold;
      font-size: 1.2rem;
    }
    .section-title {
      color: #e91e63;
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
  <style>
    body {
      background-color: #fdf8f4;
    }

    .product-card {
      border: none;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s;
    }

    .product-card:hover {
      transform: scale(1.01);
    }

    .product-img {
      position: relative;
      height: 220px;
      overflow: hidden;
    }

    .product-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .price-tag {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background-color: #e91e63;
      color: #fff;
      padding: 5px 12px;
      border-radius: 20px;
      font-weight: bold;
      font-size: 14px;
    }

    .veg-icon {
      height: 18px;
      margin-right: 6px;
    }

    .add-cart-btn {
      background-color: #e91e63;
      border-radius: 50%;
      color: white;
      padding: 8px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .product-details {
      padding: 12px;
    }

    .product-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
    }

    .weight-box {
      border: 1px solid #ddd;
      padding: 4px 8px;
      border-radius: 6px;
    }

    h2.section-title {
      color: #e91e63;
      font-weight: 700;
      text-align: center;
      margin: 30px 0 20px;
    }
  </style>
  <style>
        body {
            background: #fdf4ff url('https://www.transparenttextures.com/patterns/cup-cakes.png') repeat;
            font-family: 'Segoe UI', sans-serif;
        }
        /* .header {
            background-color: #792dc4;
            color: white;
            padding: 5px 0;
            text-align: center;
        } */
        .form-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin-top: 30px;
            margin-bottom: 60px;
            padding: 40px;
        }
        .form-label {
            font-weight: bold;
            color: #792dc4;
        }
        .form-control,
        .form-select {
            border: 2px solid #e4c8f4;
            border-radius: 8px;
        }
        .btn-submit {
            background-color: #792dc4;
            color: white;
            border-radius: 8px;
            padding: 10px 30px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #5e21a3;
        }
        .terms {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .terms a {
            color: #792dc4;
            text-decoration: underline;
        }
    </style>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header d-flex align-items-center justify-content-between">
    <!-- Left Section -->
    <div class="d-flex align-items-center gap-3">
      <a href="{{ route("index") }}"> <div class="logo"><img src="{{ asset("logo.png") }}" width="200px" alt=""></div></a>
     
      
    </div>

    <!-- Center Section -->
    <div class="flex-grow-1 mx-4">
      <div class="d-flex align-items-center search-bar bg-white px-2">
        <input type="text" class="search-input"   placeholder="Search for cakes, pastries, savories, etc.">
        <i class="fas fa-search search-icon"></i>
      </div>
    </div>

    <!-- Right Section -->
    <div class="d-flex align-items-center gap-3 icon-group">
      <i class="fas fa-birthday-cake"></i>
      <div class="location text-dark "><i class="fas fa-map-marker-alt"></i> Delhi, India <i class="fas fa-chevron-down"></i></div>
      <i class="fas fa-shopping-cart"></i>
      <div class="profile-circle">M</div>
    </div>
  </div>

@section('content2')
@show
     <div class="row g-0 mt-5">
    <div class="col-md-6 top-section d-flex flex-column justify-content-center">
      <h2>Visit & Experience Our Service In Your City</h2>
      <button class="btn btn-dark find-stores-btn">
        FIND STORES <i class="fas fa-arrow-circle-right ms-2"></i>
      </button>
    </div>
    <div class="col-md-6">
      <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/1621947382796_62.jpg" alt="Cake" class="cake-image">
    </div>
  </div>

  <!-- Footer Section -->
  <div class="footer">
    <div class="row text-center text-md-start">
      <div class="col-md-3 mb-3">
        <div class="logo">CREAMER</div>
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

</body>
</html>