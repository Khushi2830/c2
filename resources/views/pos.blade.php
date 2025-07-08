@extends('p')
@section('title', 'POS')

@section('content 4')
  <div class="container-fluid mt-5 p-3">
    <div class="row mt-4">

    
    <div class="col-2 sidebar p-3 border-end bg-light-purple rounded-start">
      <a href="{{ route('filter') }}" class="text-decoration-none text-dark">
      <h5
        class="category py-2 px-3 mb-3 rounded border {{ request()->route('id') == null ? 'bg-purple text-white border-purple' : 'bg-white text-dark border-light' }}">
        All Categories
      </h5>
      </a>
      @foreach ($categories as $category)
      <a href="{{ route('filter', $category->id) }}" class="text-decoration-none text-dark">
      <div
      class="category py-2 px-3 mb-2 rounded border {{ request()->route('id') == $category->id ? 'bg-purple text-white border-purple' : 'bg-white text-dark border-secondary' }}">
      {{ $category->cat_title }}
      </div>
      </a>
    @endforeach
      <div class="mt-4">
      <a href="{{ route('posorder') }}"
        class="btn w-100 fw-semibold shadow-sm border-purple rounded-pill bg-purple text-white">
        <i class="fas fa-receipt me-2"></i> Manage POS Orders
      </a>
      </div>
    </div> 
    <div class="col-7 p-3">
      <form action="{{ route('pos.search') }}" method="GET" class="mb-3">
      <input type="text" name="search" class="form-control shadow-sm rounded-pill px-4"
        value="{{ request('search') }}" placeholder="🔍 Search Product...">
      </form>

      <div class="product-section mt-3">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 m-3">
       @forelse ($products as $product)
    @php
        $discount = 0;
        if ($product->price > 0 && $product->descount_price < $product->price) {
            $discount = round((($product->price - $product->descount_price) / $product->price) * 100);
        }
    @endphp
    <div class="col">
        <div
            class="product-card text-center shadow-sm p-2 rounded-3 bg-light-purple border border-purple position-relative h-100">
            @if($discount > 0)
                <span class="badge bg-danger position-absolute top-0 start-0 m-2">-{{ $discount }}%</span>
            @endif

            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded mb-2"
                style="height: 100px; object-fit: cover;" alt="{{ $product->title }}">
            <div class="mt-2">
                <h6>{{ $product->title }}</h6>
            </div>
            <div>
                <del class="text-muted">₹{{ $product->price }}</del>
                <span class="text-success">₹{{ $product->descount_price }}</span>
            </div>
            <a href="{{ route('add', $product->id) }}" class="btn btn-sm mt-2 bg-purple text-white rounded-pill">Add to Cart</a>
        </div>
    </div>

@empty
   <div class="col-12 d-flex justify-content-center align-items-center py-5">
    <div class="p-4 rounded-4 bg-light-purple border border-2 border-purple shadow-sm text-center animate-fade" style="max-width: 400px;">
        <img src="https://cdn-icons-png.flaticon.com/512/2748/2748558.png" 
             alt="Empty Category" width="80" class="mb-3 opacity-75">
        <h5 class="text-muted fw-bold">No products found in this category.</h5>
        <p class="text-secondary">Try selecting a different category or explore all products.</p>
        <a href="{{ route('filter') }}" class="btn btn-purple px-4 rounded-pill mt-2">View All Products</a>
    </div>
</div>

@endforelse

      </div>
      </div>
    </div>
    
    <div class="col-3 cart-section bg-light-purple p-3 rounded-end">
      <h5 class="text-purple">🛒 Cart</h5>
      <div class="table-responsive small-cart-table">
      <table class="table table-bordered table-sm shadow-sm rounded bg-white">
        <thead class="table-light text-center">
        <tr>
          <th>Product</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody id="cart-body">
        @if($cart && $cart->items->count())
        @foreach($cart->items as $item)
        <tr>
        <td>{{ $item->product->title }}</td>
        <td>
        <div class="d-flex align-items-center justify-content-center gap-2">
        <form method="POST" action="{{ route('decrease', $item->id) }}">@csrf
        <button class="btn btn-sm btn-outline-danger">&minus;</button>
        </form>
        <span class="fw-bold">{{ $item->quantity }}</span>
        <form method="POST" action="{{ route('increase', $item->id) }}">@csrf
        <button class="btn btn-sm btn-outline-success">+</button>
        </form>
        </div>
        </td>
        <td>₹{{ number_format($item->price, 2) }}</td>
        <td>₹{{ number_format($item->price * $item->quantity, 2) }}</td>
        <td>
        <form method="POST" action="{{ route('remove', $item->id) }}">@csrf
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i>X</button>
        </form>
        </td>
        </tr>
        @endforeach
      @else
      <tr>
        <td colspan="5" class="text-center text-muted">🛒 Cart is empty.</td>
      </tr>
      @endif
        </tbody>
      </table>
      </div>

      @php
    $totalOriginal = $cart->items->sum(fn($item) => $item->product->price * $item->quantity);
    $totalDiscounted = $cart->items->sum(fn($item) => $item->price * $item->quantity);
    $totalSaved = $totalOriginal - $totalDiscounted;
    @endphp

      <div class="fw-bold mt-2">
      <div class="d-flex justify-content-between">
        <span>Subtotal:</span>
        <span>₹{{ number_format($totalOriginal, 2) }}</span>
      </div>
      <div class="d-flex justify-content-between text-success mt-1">
        <span>You Save:</span>
        <span>− ₹{{ number_format($totalSaved, 2) }}</span>
      </div>
      <div class="d-flex justify-content-between mt-1">
        <span>Total:</span>
        <span id="cart-total" class="text-success">₹{{ number_format($totalDiscounted, 2) }}</span>
      </div>
      </div>

      
      <div class="mt-3">
      <form method="POST" action="{{ route('checkout') }}">@csrf
        <input type="hidden" name="method" value="cash">
        <button class="btn btn-success w-100 mb-2 rounded-pill">💵 Cash</button>
      </form>

      <form method="POST" action="{{ route('checkout') }}">@csrf
        <input type="hidden" name="method" value="online">
        <input type="hidden" name="payment_id" value="TXN12345">
        <button class="btn btn-info w-100 rounded-pill">💳 Online</button>
      </form>
      </div>
    </div>
    </div>
  </div>

  <style>
    .bg-light-purple {
    background-color: #f3effd;
}

.border-purple {
    border-color: #6f42c1 !important;
}

.btn-purple {
    background-color: #6f42c1;
    color: #fff;
    border: none;
    transition: background-color 0.3s ease;
}

.btn-purple:hover {
    background-color: #5936a8;
}

.animate-fade {
    animation: fadeIn 0.8s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    .bg-purple {
    background-color: #6f42c1 !important;
    }

    .border-purple {
    border-color: #6f42c1 !important;
    }

    .text-purple {
    color: #6f42c1;
    }

    .bg-light-purple {
    background-color: #f1e9fc !important;
    }

    .category:hover,
    .sidebar a:hover .category {
    background-color: #d8c4f1 !important;
    cursor: pointer;
    border-color: #6f42c1;
    }

    .btn:hover {
    opacity: 0.92;
    }

    .product-card:hover {
    transform: scale(1.03);
    transition: 0.2s ease-in-out;
    }

    .small-cart-table table td,
    .small-cart-table table th {
    font-size: 0.75rem;
    padding: 4px 6px;
    vertical-align: middle;
    }
  </style>
@endsection