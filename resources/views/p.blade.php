<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Employe Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .sidebar {
      background-color: #ffffff;
      height: 100vh;
      border-right: 1px solid #ddd;
      padding: 20px;
    }

    .category {
      padding: 10px;
      margin-bottom: 5px;
      cursor: pointer;
      background-color: #f1f1f1;
      border-radius: 4px;
      transition: background-color 0.2s;
    }

    .category:hover {
      background-color: #e2e6ea;
    }

    .product-card {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 15px;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .product-card:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-img {
      height: 100px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 5px;
    }

    .cart-section {
      background-color: #ffffff;
      padding: 20px;
      border-left: 1px solid #ddd;
      height: 100vh;
      overflow-y: auto;
    }

    .cart-summary {
      font-size: 20px;
      font-weight: bold;
      margin-top: 15px;
      border-top: 1px solid #ddd;
      padding-top: 10px;
    }

    .btn-checkout {
      font-weight: bold;
      font-size: 16px;
    }

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

    .qty-btn {
      padding: 2px 8px;
      font-size: 14px;
    }
  </style>
  <style>
    body {
      overflow: hidden;
      /* prevent full-page scroll */
    }

    .sidebar,
    .cart-section {
      height: calc(100vh - 100px);
      /* adjust based on navbar height */
      overflow: hidden;
    }

    .product-section {
      height: calc(100vh - 180px);
      /* adjust as needed */
      overflow-y: auto;
      padding-right: 10px;
    }

    .product-card {
      cursor: pointer;
      padding: 10px;
      border-radius: 5px;
    }

    .product-card:hover {
      background-color: #f3f3f3;
    }

    .product-img {
      width: 100%;
      height: 140px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .category {
      padding: 10px;
      background-color: #f1f1f1;
      margin-bottom: 5px;
      border-radius: 5px;
      cursor: pointer;
    }

    .category.active {
      background-color: #6f42c1;
      color: white;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <div class="header tt d-flex align-items-center justify-content-between" style="background-color:#e4e0f4;">
    <a class="navbar-brand d-flex align-items-center" href="{{ route("pos")}}">
      <img src="{{ asset('logo.png') }}" alt="Creamer Logo" height="40" class="me-2">
    </a>

    <div class="ms-auto d-flex align-items-center">
      @auth
      <span class="me-3 fw-semibold text-dark">
      👤 {{ Auth::user()->name }}
      </span>

      <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="btn  btn-sm" style="background-color: #6f42c1; color: white;">
        Logout
      </button>
      </form>
    @endauth

      @guest
      <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Login</a>
    @endguest
    </div>
  </div>
  @section('content 4')
  @show
</body>

</html>