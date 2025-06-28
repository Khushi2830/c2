<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>EloERP UI - With Add/Minus</title>
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

    .qty-btn {
      padding: 2px 8px;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light  shadow-sm px-4" style="background-color:#e4e0f4;">
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
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
  </nav>

  <div class="container-fluid">
    <div class="row">


      <div class="col-2 sidebar">
        <input class="form-control mb-3" type="text" placeholder="Search Category...">
        <div class="category active">All Items</div>
        @foreach ($categories as $category)

      <div class="category">{{ $category->cat_title }}</div>
    @endforeach
      </div>


      <div class="col-6 p-2">
        <input class="form-control mb-3" type="text" placeholder="Search Product...">
        <div class="row" id="product-list">
          @foreach ($products as $product)
          <div class="col-md-4 g-2  ">
            <div class="product-card text-center" onclick="addToCart('{{$product->title}}', '₹{{$product->descount_price}}')">
              <img src="{{ asset("storage/" . $product->image) }}" class="product-img" alt="Dr. Martens">
              <div><strong>{{$product->title}}</strong></div>
              <div><del>₹{{$product->price}}</del>₹{{$product->descount_price}}</div>
            </div>
          </div>
          @endforeach
        </div>
      </div>


      <div class="col-md-4 cart-section">
        <h5>🛒 Cart</h5>
        <table class="table table-bordered table-sm">
          <thead class="table-secondary">
            <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody id="cart-body"></tbody>
        </table>
        <div class="cart-summary d-flex justify-content-between">
          <span>Total:</span>
          <span id="cart-total">$0.00</span>
        </div>
        <div class="mt-3">
          <button class="btn  w-100 mb-2 btn-checkout" style="background-color: #6f42c1; color: white; ">💵 Fast
            Cash</button>
          <button class="btn  w-100 btn-checkout" style="background-color: #6f42c1; color: white; ">✅ Check Out</button>
        </div>
      </div>

    </div>
  </div>

  <script>
    let cart = {};

    function addToCart(title, discount_price) {
      if (cart[title]) {
        cart[title].qty += 1;
      } else {
        cart[title] = { discount_price: discount_price, qty: 1 };
      }
      renderCart();
    }

    function updateQty(title, change) {
      if (cart[title]) {
        cart[title].qty += change;
        if (cart[title].qty <= 0) delete cart[title];
      }
      renderCart();
    }

    function renderCart() {
      const cartBody = document.getElementById("cart-body");
      const cartTotal = document.getElementById("cart-total");
      cartBody.innerHTML = "";
      let total = 0;

      for (let product in cart) {
        const { price, qty } = cart[product];
        const itemTotal = price * qty;
        total += itemTotal;

        cartBody.innerHTML += `
        <tr>
          <td>${product}</td>
          <td>
            <div class="d-flex align-items-center">
              <button class="btn btn-sm btn-danger qty-btn" onclick="updateQty('${product}', -1)">-</button>
              <span class="mx-2">${qty}</span>
              <button class="btn btn-sm btn-success qty-btn" onclick="updateQty('${product}', 1)">+</button>
            </div>
          </td>
          <td>$${price.toFixed(2)}</td>
          <td>$${itemTotal.toFixed(2)}</td>
        </tr>`;
      }

      cartTotal.innerText = "$" + total.toFixed(2);
    }
  </script>
</body>

</html>