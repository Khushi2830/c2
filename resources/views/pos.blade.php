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
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
<div class="container-fluid">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-2 sidebar">
      <input class="form-control mb-3" type="text" placeholder="Search Category...">
      <div class="category">All Items</div>
      <div class="category">Home Furniture</div>
      <div class="category">Office Furniture</div>
      <div class="category">Beauty and Health</div>
      <div class="category">Skin Care</div>
      <div class="category">Jewelry</div>
      <div class="category">Men Bags</div>
      <div class="category">Watches</div>
    </div>

    <!-- Product List -->
    <div class="col-6 p-3">
         <input class="form-control mb-3" type="text" placeholder="Search Product...">
      <div class="row" id="product-list">
        <!-- Example Products -->
        <div class="col-md-4">
          <div class="product-card text-center" onclick="addToCart('Dr. Martens', 299.00)">
            <img src="https://via.placeholder.com/120" class="product-img" alt="Dr. Martens">
            <div><strong>Dr. Martens</strong></div>
            <div>$299.00</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cart -->
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
        <button class="btn btn-warning w-100 mb-2 btn-checkout">💵 Fast Cash</button>
        <button class="btn btn-primary w-100 btn-checkout">✅ Check Out</button>
      </div>
    </div>

  </div>
</div>

<script>
  let cart = {};

  function addToCart(productName, price) {
    if (cart[productName]) {
      cart[productName].qty += 1;
    } else {
      cart[productName] = { price: price, qty: 1 };
    }
    renderCart();
  }

  function updateQty(productName, change) {
    if (cart[productName]) {
      cart[productName].qty += change;
      if (cart[productName].qty <= 0) delete cart[productName];
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
