@extends('x')
@section('title', 'View')

@section('content3')
<div class="container py-5">
  @if($product)
  <div class="row g-5">
    <!-- Product Image -->
    <div class="col-md-6 text-center">
  <img src="{{ asset('storage/' . $product->image) }}"
       alt="{{ $product->title }}"
       class="img-fluid rounded shadow product-image"
       style="width: 80%; max-height: 550px; object-fit: contain;">
</div>
    <!-- Product Details -->
    <div class="col-md-6">
      <h2 class="fw-bold text-dark mb-3">{{ $product->title }}</h2>
      <h4 class="text-danger fw-semibold mb-3">
        <del class="me-2">₹{{ $product->price }}</del>
        ₹{{ $product->descount_price }}
      </h4>
      <span class="badge bg-secondary mb-3">{{ $product->category->cat_title }}</span>

      <!-- Quantity -->
      <div class="mb-4">
        <label class="fw-bold">Quantity:</label>
        <div class="border rounded py-2 px-3 d-inline-block bg-light">{{ $product->kg }}</div>
      </div>

      <!-- Creamer Info -->
      <div class="mb-4">
        <h5 class="text-success fw-bold mb-2">Creamer</h5>
        <span class="badge bg-success">100% {{ $product->veg }}</span>
      </div>

      <!-- Tabs -->
      <div>
        <ul class="nav nav-tabs" id="descriptionTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="delivery-tab" data-bs-toggle="tab" data-bs-target="#delivery"
              type="button" role="tab">Delivery Details</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care" type="button"
              role="tab">Care Instructions</button>
          </li>
        </ul>

        <div class="tab-content pt-3" id="descriptionTabsContent">
          <div class="tab-pane fade show active" id="delivery" role="tabpanel">
            <ul class="list-unstyled">
              <li><i class="fas fa-box-open me-2 text-success"></i> Hand-delivered in quality packaging.</li>
              <li><i class="fas fa-gift me-2 text-warning"></i> Candle and knife included if available.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="care" role="tabpanel">
            <ul class="list-unstyled">
              <li><i class="fas fa-snowflake me-2 text-primary"></i> Keep refrigerated.</li>
              <li><i class="fas fa-clock me-2 text-info"></i> Best consumed within 24 hours.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Product Description -->
      <div class="mt-4">
        <h5 class="text-dark fw-bold">Product Description</h5>
        <p class="text-purple small">{{ $product->description }}</p>
      </div>

      <!-- Add to Cart Button - Full Width -->
      <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-4 w-100">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-lg w-100 text-white fw-bold shadow"
          style="background-color: #b435d7;">
          <i class="fas fa-cart-plus me-2"></i> ADD TO CART
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
        <div class="card h-100 border-0 shadow-sm">
          <img src="{{ asset("storage/" . $related->image) }}" alt="{{ $related->title }}" class="card-img-top"
            style="object-fit: cover; height: 200px;">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <h6 class="card-title text-truncate">{{ $related->title }}</h6>
              <p class="text-danger fw-semibold mb-2"><del>₹{{ $related->price }}</del> ₹{{ $related->descount_price }}</p>
            </div>
            <a href="{{ route("view", $related->id) }}" class="btn btn-sm w-100 text-white mt-2"
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
    color: #b435d7;
  }
</style>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
