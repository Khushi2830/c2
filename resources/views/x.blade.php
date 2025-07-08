<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creamer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    .search-box {
      max-width: 500px;
      flex-grow: 1;
      margin: 0 20px;
      position: relative;
    }

    .search-box input {
      width: 100%;
      padding: 10px 40px 10px 15px;
      border-radius: 6px;
      border: 1px solid #5369c0;
    }

    .search-box i {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: gray;
    }

    .xx {
      font-family: Arial, sans-serif;
      background-color: #fff;
      margin: 0;
      padding: 40px;
      border-left: 2px solid #ec008c;
      border-right: 2px solid #ec008c;
    }

    .faq-section {
      max-width: 1200px;
      margin: auto;
    }

    .faq-section h1 {
      text-align: center;
      color: #ec008c;
      font-size: 42px;
      font-weight: bold;
      margin-bottom: 40px;
    }

    .faq-item {
      margin-bottom: 40px;
    }

    .faq-item p {
      margin: 5px 0;
      font-size: 18px;
    }

    .faq-number {
      font-weight: bold;
    }

    .divider {
      border-top: 1px solid #000;
      margin-top: 20px;
    }
  </style>
  <style>
    .icon-group i {
      cursor: pointer;
      color: #6f42c1;
    }

    .profile {
      min-width: 40px;
      height: 40px;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .header {
      background-color: #e4e0f4;
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
      background-color: #792dc4;
      /* Pink */
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
      background-color: #ad83b3;
      /* Dark Blue */
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
    /* .header {
            background-color: #792dc4;
            color: white;
            padding: 5px 0;
            text-align: center;
        } */
    .form-container {
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    .why-choose-us {
      background-color: #e4e0f4;
      color: #000;
    }

    .text-pink {
      color: #d63384;
      font-size: 2.5rem;
    }

    .icon {
      width: 60px;
      height: 60px;
      background-color: #fda4d4;
      border-radius: 50%;
      padding: 12px;
    }
  </style>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    .cake-showcase {
      background-color: #ffeaf7;
    }

    .title-heading {
      font-size: 2.5rem;
      color: #d63384;
    }

    .title-heading .text-purple {
      color: #5e2590;
    }

    .cake-card img {
      height: 300px;
      object-fit: contain;
      padding: 1rem;
      background-color: #fff;
    }

    .card-title {
      margin-top: 1rem;
      font-size: 1.1rem;
      color: #000;
    }

    .btn-pink {
      background-color: #e6007e;
      color: #fff;
      font-weight: bold;
      border-radius: 5px;
      transition: 0.3s ease;
    }

    .btn-pink:hover {
      background-color: #cc006b;
    }
  </style>
  <style>
    .testimonial-section {
      text-align: center;
      margin-bottom: 40px;
    }

    .testimonial-section h1 {
      color: #ec008c;
      font-size: 48px;
      font-weight: bold;
    }

    .testimonial-box {
      background-color: #ffe6ea;
      padding: 30px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      max-width: 900px;
      margin: auto;
    }

    .testimonial-image {
      width: 160px;
      margin-right: 30px;
    }

    .testimonial-content {
      text-align: left;
    }

    .testimonial-content .quote {
      font-size: 60px;
      color: #ec008c;
      float: left;
      margin-right: 10px;
      line-height: 0.5;
    }

    .testimonial-content h4 {
      color: #ec008c;
      margin: 0;
      font-size: 18px;
    }

    .testimonial-content p {
      font-size: 18px;
      margin: 10px 0 0;
    }

    .testimonial-content .author {
      margin-top: 10px;
      font-weight: bold;
    }
  </style>
  <style>
    .yy {
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      background-color: #fff2f4;
      padding: 40px;
    }

    h1 {
      text-align: center;
      font-size: 42px;
      margin-bottom: 50px;
    }

    h1 span.pink {
      color: #ec008c;
    }

    h1 span.purple {
      color: #4b0082;
    }

    form {
      max-width: 1400px;
      margin: auto;
    }

    .form-group {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 20px;
    }

    .form-group div {
      flex: 1;
      min-width: 300px;
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
      font-size: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select,
    textarea {
      padding: 10px 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    textarea {
      height: 150px;
      resize: vertical;
    }

    .btn-submit {
      display: block;
      margin: 40px auto 0;
      padding: 14px 40px;
      background-color: #ec008c;
      color: white;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #c60078;
    }
  </style>
  <style>
    .header.tt {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 70px;
      background-color: #f8f9fa;
      z-index: 999;
      padding: 0 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .icon-group .profile {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
    }

    body {
      padding-top: 80px;
      /* Space for fixed header */
    }
  </style>
  <style>
    body {
      background-color: #fff;
    }

    .sidebar {
      width: 150px;
      background-color: #fff8f1;
      padding-top: 20px;
      border-right: 2px solid #f1d3eb;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      overflow-y: auto;
    }

    .sidebar img {
      width: 100%;
      height: 90px;
      object-fit: cover;
      border-radius: 5px;
    }

    .sidebar-item {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 600;
      font-size: 14px;
    }

    .content {
      margin-left: 170px;
      padding: 30px;

    }

    .card {
      transition: 0.3s ease;
      border-radius: 12px;

    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
    }

    .card-title {
      font-size: 20px;
      font-weight: 600;
    }

    .veg-icon {
      width: 20px;
      height: 20px;
      margin-right: 5px;
    }

    .price {
      color: #e91e63;
      font-weight: bold;
      font-size: 18px;
    }

    .add-btn {
      background-color: #e91e63;
      border: none;
      border-radius: 25px;
      color: white;
      padding: 6px 24px;
    }

    .card-img-top {
      height: 260px;
      object-fit: cover;
    }

    .category-title {
      font-weight: bold;
      font-size: 26px;
      margin-bottom: 30px;
    }
  </style>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff;
    }

    .veg-icon {
      width: 18px;
      margin-right: 6px;
    }

    .qty-btn {
      background-color: #ec008c;
      color: white;
      border-radius: 50%;
      width: 32px;
      height: 32px;
      border: none;
    }

    .qty-input {
      width: 40px;
      text-align: center;
      border: none;
    }

    .flavour-box {
      border: 1px solid #ec008c;
      padding: 10px 16px;
      border-radius: 8px;
      color: #ec008c;
      font-weight: 500;
      display: inline-block;
    }

    .offer-box {
      background-color: #dff0d8;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: bold;
      color: #3c763d;
      display: inline-block;
    }

    .bottom-bar {

      bottom: 0;
      background: #fff;
      display: flex;
      align-items: end;
      padding: 15px;
      border-top: 1px solid #ddd;

    }

    .btn-pink {
      background-color: #ec008c;
      color: white;
      font-weight: bold;
      border: none;
    }

    .btn-purple {
      background-color: #1d0033;
      color: white;
      font-weight: bold;
      border: none;
    }

    .related-products .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
      height: 180px;
      object-fit: cover;
    }
  </style>
  <style>
    .nav-tabs .nav-link.active {
      border: none;
      border-bottom: 2px solid #b435d7;
      color: #b435d7;
      font-weight: 500;
    }

    .nav-tabs .nav-link {
      border: none;
      color: #555;
    }

    .tab-content ul {
      list-style: none;
      padding-left: 0;
    }

    .tab-content ul li::before {
      content: "●";
      color: #d1d1d1;
      font-size: 12px;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

    .tab-content ul li {
      margin-bottom: 8px;
    }

    h4 {
      font-weight: bold;
      margin-bottom: 1rem;
    }
  </style>
  <style>
    .custom-form input {
      border-radius: 0.4rem;
      padding: 0.5rem 0.75rem;
      border: 1px solid #ccc;
    }
  </style>
  <style>
    .profile-dropdown {
      background-color: #e4c8f4;
      /* green shade */
      border-radius: 10px;
      width: 220px;
      font-family: 'Segoe UI', sans-serif;
    }

    .profile-dropdown .dropdown-item {
      color: #6f42c1;
      font-weight: 500;
    }

    .profile-dropdown .dropdown-item:hover {
      background-color: #6f42c1;
      color: #4e2c91;
    }

    .profile-dropdown .dropdown-divider {
      border-top: 1px solid #aad39a;
    }
  </style>
  <style>
    .cart-icon {
      padding: 2px;
    }

    .cart-icon i {
      transition: transform 0.2s ease;
    }

    .cart-icon:hover i {
      transform: scale(1.2);
    }

    .cart-count {
      background-color: #6610f2;
      color: white;
      font-size: 0.75rem;
      padding: 5px 7px;
      box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
      border: 2px solid #fff;
    }
  </style>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="header tt d-flex align-items-center justify-content-between" style="background-color: #e4c8f4;">

    <div class="d-flex align-items-center gap-3">
      <a href="{{ route("index") }}">
        <div class="logo"><img src="{{ asset("logo.png") }}" width="200px" alt=""></div>
      </a>
    </div>


    <div class="search-box">
      <form action="{{ route("filter.search") }}" method="GET">
        <input type="search" name="search" class="form-control" value="{{ request('search') }}"
          placeholder="Search for cakes, pastries, savories, etc.">
        <i class="fas fa-search"></i>
      </form>
    </div>




    <div class="d-flex align-items-center gap-3 icon-group">
      <div class="dropdown">
  <button class="btn btn-light rounded-pill shadow-sm dropdown-toggle d-flex align-items-center gap-2 px-3 py-1"
          type="button" id="customCakeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
          style="font-size: 0.85rem;">
    <div class="icon-box d-flex align-items-center justify-content-center">
      <i class="fas fa-birthday-cake fs-6" style="color: #6f42c1;"></i>
    </div>
    <span class="fw-semibold">Customised Cake</span>
  </button>
<ul class="dropdown-menu" aria-labelledby="customCakeDropdown">
    <li>
      <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('wedding') }}">
        <i class="fas fa-birthday-cake fs-6" style="color: #6f42c1;"></i>
        <span>Customised Cake</span>
      </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center gap-2" href="{{route('CakeOrder')}}">
        <i class="fas fa-shopping-cart fs-6" style="color: #6f42c1;"></i>
        <span>Customise Cake Order</span>
      </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center gap-2" href="{{route('cake')}}">
        <i class="fas fa-shopping-cart fs-6" style="color: #6f42c1;"></i>
        <span>Confirm  Order</span>
      </a>
    </li>
    
  </ul>
 
</div>

<style>
  .custom-cake-link {
    font-size: 0.8rem;
    padding: 2px 8px;
    background-color: #f8f6fc;
    color: #6f42c1;
}

.custom-cake-link:hover {
    background-color: #ece3fc;
    text-decoration: none;
}

.icon-box {
    width: 20px;
    height: 20px;
}

</style>
      
      <div class="">

        <div class="dropdown">
          <button class="btn btn-light rounded-circle dropdown-toggle p-2" type="button" id="profileDropdown"
            data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #6f42c1; color: white;">
            <strong> {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</strong>
          </button>

          <ul class="dropdown-menu dropdown-menu-end profile-dropdown" aria-labelledby="profileDropdown">
            <li class="px-3 py-0 ">
              <div class="fw-bold ">
                <p> <strong>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</strong></p></span>
              </div>
              <div class="text-muted mt-0"><strong>{{ Auth::user()->email }}</strong> </p>
              </div>

            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route("profile") }}"><i class="fas fa-user me-2"></i> View Profile</a>
            </li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-question-circle me-2"></i> Help</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item text-danger" href="{{ route('index.logout') }}">
                <i class="fas fa-sign-out-alt me-2 text-danger"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>

      <a href="{{ route('cart.show') }}" class="cart-icon position-relative d-inline-block">
        <i class="fas fa-shopping-cart fs-4" style="color: #5e2590;"></i>

        @php
      $order = \App\Models\Order::where('user_id', auth()->id())
        ->where('status', 'pending')
        ->with('items')
        ->first();

      $cartCount = $order ? $order->items->count() : 0;
    @endphp

        @if($cartCount > 0)
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white"
        style="font-size: 0.7rem;">
        {{ $cartCount }}
      </span>
    @endif
      </a>

    </div>
  </div>

  @section('content3')
  @show



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>