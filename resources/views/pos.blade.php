@extends('p')
@section('title', 'pos Page')

@section('content4')

<div class="container-fluid mt-5 p-3">
  <div class="row mt-4">

    
    <div class="col-2 sidebar m-0 " style=" background-color: #e4e0f4;" >
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
      
    <a href="{{route("posorder")}}" class="menu-item"><i class="fas fa-receipt"></i>Manage Pos Order</a>
    </div>

   
    <div class="col-7 p-2">
      <form action="{{ route('pos.search') }}" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search Product...">
      </form>

      <h4 class="m-1">Products</h4>
      <div class="product-section">
        <div class="row m-1" id="product-list">
          @foreach ($products as $product)
            <div class="col-md-3 g-2">
              <div class="product-card shadow-sm border-4 text-center"  style="background-color: #e4e0f4; border: 2px solid #9580ba; border-radius: 10px;"   
                onclick="addToCart('{{ $product->title }}', {{ $product->descount_price }})">
                <img src="{{ asset('storage/' . $product->image) }}" class="product-img" alt="{{ $product->title }}">
                <div>{{ $product->title }}</div>
                <div><del>₹{{ $product->price }}</del> ₹{{ $product->descount_price }}</div>
                <div class="text-muted">
                  
                  <a href="{{route('add', $product->id)}}" class="btn btn btn-sm" onclick="addToCart('{{ $product->title }}', {{ $product->descount_price }})" style=" background-color:#6f42c1; color: white;"  >Add to Cart</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Cart Section (Not Scrollable) -->
    <div class="col-3 cart-section" style=" background-color: #e4e0f4;" >
      <h5>🛒 Cart</h5>
     <table class="table table-bordered table-sm border border-dark shadow-sm rounded">
    <thead class="table-secondary border-dark">
        <tr class="border-dark">
            <th class="border-dark">Product</th>
            <th class="border-dark">Qty</th>
            <th class="border-dark">Price</th>
            <th class="border-dark">Total</th>
            <th class="border-dark">Action</th>
        </tr>
    </thead>
    <tbody id="cart-body">
        @if($cart && $cart->items->count())
            @foreach($cart->items as $item)
                <tr class="border-dark">
                    <td class="align-middle fw-semibold border-dark">{{ $item->product->title }}</td>

                    <td class="align-middle border-dark">
                        <div class="d-flex align-items-center justify-content-start gap-2">
                            <form method="POST" action="{{ route('decrease', $item->id) }}">
                                @csrf
                                <button class="btn btn-sm btn-outline-danger" type="submit">−</button>
                            </form>

                            <span class="fw-bold">{{ $item->quantity }}</span>

                            <form method="POST" action="{{ route('increase', $item->id) }}">
                                @csrf
                                <button class="btn btn-sm btn-outline-success" type="submit">+</button>
                            </form>
                        </div>
                    </td>

                    <td class="align-middle border-dark">₹{{ number_format($item->price, 2) }}</td>
                    <td class="align-middle text-success fw-semibold border-dark">₹{{ number_format($item->price * $item->quantity, 2) }}</td>

                    <td class="align-middle border-dark">
                        <form method="POST" action="{{ route('remove', $item->id) }}">
                            @csrf
                            <button class="btn btn-sm btn-outline-secondary" type="submit">
                                <i class="fas fa-trash-alt me-1"></i> Remove
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr class="border-dark">
                <td colspan="5" class="text-center text-muted py-4 border-dark">🛒 Cart is empty.</td>
            </tr>
        @endif
    </tbody>
</table>


      <div class="cart-summary d-flex justify-content-between">
        <span>Total:</span>
        
        <span id="cart-total">₹{{ number_format($item->price * $item->quantity, 2) }}</span>
      </div>

      <div class="mt-3">
        <form method="POST" action="{{ route('checkout') }}">
  @csrf
  <input type="hidden" name="method" value="cash">
  <button class="btn btn-success w-100 mb-2"  >💵 Cash</button>
</form>

<form method="POST" action="{{ route('checkout') }}">
  @csrf
  <input type="hidden" name="method" value="online">
  <input type="hidden" name="payment_id" value="TXN12345"> 
  <button class="btn btn-info w-100">💳 Online</button>
</form>
      </div>
    </div>

  </div>
</div>

<style>
  table tr td {
    font-size: 0.88rem;
    vertical-align: middle;
}
  </style>

</body>
</html>