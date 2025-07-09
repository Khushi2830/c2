@extends('x')
@section('title', 'View')

@section('content3')
<div class="container py-5">
  @if($product)
  <div class="row g-5">
    <!-- Product Image -->
    <div class="col-md-6 text-center">
      <div class="bg-white p-4 rounded shadow-lg" style="backdrop-filter: blur(8px);">
        <img src="{{ asset('storage/' . $product->image) }}"
             alt="{{ $product->title }}"
             class="img-fluid rounded"
             style="width: 90%; max-height: 500px; object-fit: contain;">
      </div>
    </div>

    <!-- Product Details -->
    <div class="col-md-6">
      <h2 class="fw-bold text-dark mb-3">{{ $product->title }}</h2>
      
      <h4 class="text-danger fw-semibold mb-2">
        <del class="me-2 text-muted">₹{{ $product->price }}</del>
        <span class="text-success">₹{{ $product->descount_price }}</span>
      </h4>
      
      <span class="badge bg-gradient bg-primary mb-3 px-3 py-2">{{ $product->category->cat_title }}</span>

      <!-- Quantity -->
      <div class="mb-3">
        <label class="fw-bold">Quantity:</label>
        <div class="border rounded px-3 py-2 d-inline-block bg-light text-dark">{{ $product->kg }}</div>
      </div>

      <!-- Creamer Info -->
      <div class="mb-4">
        <h5 class="text-success fw-bold mb-2">Creamer</h5>
        <span class="badge bg-success">100% {{ $product->veg }}</span>
      </div>

      <!-- Tabs -->
      <div class="mb-4">
        <ul class="nav nav-tabs rounded" id="descriptionTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="delivery-tab" data-bs-toggle="tab" data-bs-target="#delivery"
              type="button" role="tab">Delivery Details</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care"
              type="button" role="tab">Care Instructions</button>
          </li>
        </ul>

        <div class="tab-content p-3 border border-top-0 rounded-bottom bg-light" id="descriptionTabsContent">
          <div class="tab-pane fade show active" id="delivery" role="tabpanel">
            <ul class="list-unstyled mb-0">
              <li><i class="fas fa-box-open me-2 text-success"></i> Hand-delivered in quality packaging.</li>
              <li><i class="fas fa-gift me-2 text-warning"></i> Candle and knife included if available.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="care" role="tabpanel">
            <ul class="list-unstyled mb-0">
              <li><i class="fas fa-snowflake me-2 text-primary"></i> Keep refrigerated.</li>
              <li><i class="fas fa-clock me-2 text-info"></i> Best consumed within 24 hours.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Product Description -->
      <div class="mb-4">
        <h5 class="fw-bold text-dark">Product Description</h5>
        <p class="text-purple small">{{ $product->description }}</p>
      </div>

      <!-- Add to Cart Button -->
      <form action="{{ route('cart.add', $product->id) }}" method="POST" class="w-100">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-lg w-100 text-white fw-bold shadow"
          style="background: linear-gradient(to right, #b435d7, #8e2de2);">
          <i class="fas fa-cart-plus me-2"></i> Add to Cart
        </button>
      </form>
    </div>
  </div>

  <!-- Related Products -->
  <div class="related-products mt-5">
    <h4 class="fw-bold mb-4 text-primary">Related Products</h4>
    <div class="row g-4">
      @forelse($relatedProducts as $related)
      <div class="col-md-3">
        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
          <img src="{{ asset("storage/" . $related->image) }}"
               alt="{{ $related->title }}"
               class="card-img-top"
               style="object-fit: cover; height: 200px;">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <h6 class="card-title text-truncate fw-bold">{{ $related->title }}</h6>
              <p class="text-danger fw-semibold mb-2">
                <del class="text-muted">₹{{ $related->price }}</del>
                ₹{{ $related->descount_price }}
              </p>
            </div>
            <a href="{{ route("view", $related->id) }}" class="btn btn-sm w-100 text-white"
               style="background-color: #6f42c1;">
              View Product
            </a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <p class="text-center text-muted">No related products found.</p>
      </div>
      @endforelse
    </div>
  </div>

  @else
  <div class="alert alert-warning mt-5 text-center fw-bold">
    Product Not Found
  </div>
  @endif
</div>

<!-- Optional: Custom Styles -->
<style>
  .text-purple {
    color: #8e2de2;
  }

  .btn:hover {
    transform: scale(1.02);
    transition: all 0.2s ease-in-out;
  }
</style>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
