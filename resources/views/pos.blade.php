@extends('p')
@section('title', 'pos Page')

@section('content4')

<div class="container-fluid mt-5 p-3">
  <div class="row mt-4">

    <!-- Sidebar: Category List (Not Scrollable) -->
    <div class="col-2 sidebar">
      <a href="{{ route('filter') }}" style="text-decoration:none; color:inherit;">
        <h4 class="category {{ request()->route('id') == null ? 'active' : '' }}">All categories</h4>
      </a>
      @foreach ($categories as $category)
        <a href="{{ route('filter', $category->id) }}" style="text-decoration:none; color:inherit;">
          <div class="category {{ request()->route('id') == $category->id ? 'active' : '' }}">
            {{ $category->cat_title }}
          </div>
        </a>
      @endforeach
    </div>

    <!-- Product Section (Scrollable Only This) -->
    <div class="col-7 p-2">
      <form action="{{ route('pos.search') }}" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search Product...">
      </form>

      <h4 class="m-1">Products</h4>
      <div class="product-section">
        <div class="row m-1" id="product-list">
          @foreach ($products as $product)
            <div class="col-md-3 g-2">
              <div class="product-card shadow-sm border-4 text-center"
                onclick="addToCart('{{ $product->title }}', {{ $product->descount_price }})">
                <img src="{{ asset('storage/' . $product->image) }}" class="product-img" alt="{{ $product->title }}">
                <div>{{ $product->title }}</div>
                <div><del>₹{{ $product->price }}</del> ₹{{ $product->descount_price }}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Cart Section (Not Scrollable) -->
    <div class="col-3 cart-section">
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
        <span id="cart-total">₹0.00</span>
      </div>

      <div class="mt-3">
        <button class="btn w-100 mb-2 btn-checkout" style="background-color: #6f42c1; color: white;">💵 Fast Cash</button>
        <button class="btn w-100 btn-checkout" style="background-color: #6f42c1; color: white;">✅ Check Out</button>
      </div>
    </div>

  </div>
</div>

<script>
  function addToCart(name, price) {
    alert(`${name} added to cart at ₹${price}`);
  }
</script>

 

</body>

</html>