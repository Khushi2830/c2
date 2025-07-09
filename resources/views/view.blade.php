@extends('x')
@section('title', 'view')

@section('content3')
<div class="container py-4">
  @if($product)
  <div class="row g-4 align-items-start">
    <!-- Product Image -->
    <div class="col-md-6 text-center mt-4">
      <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
        class="img-fluid rounded product-image shadow">
    </div>

    <!-- Product Details -->
    <div class="col-md-6">
      <h3 class="fw-bold mb-3">{{ $product->title }}</h3>

      <h4 class="text-danger fw-bold mb-2">
        <del>₹{{ $product->price }}</del> ₹{{ $product->descount_price }}
      </h4>

      <p class="text-muted mb-3">{{ $product->category->cat_title }}</p>

      <!-- Quantity -->
      <div class="mb-3">
        <label class="fw-bold mb-1">Quantity</label>
        <div class="flavour-box p-2 bg-light rounded border">{{ $product->kg }}</div>
      </div>

      <!-- Creamer -->
      <div class="mb-4">
        <h5 class="text-danger fw-bold mb-2">Creamer</h5>
        <span class="offer-box bg-danger text-white px-3 py-1 rounded small">100% {{ $product->veg }}</span>
      </div>

      <!-- Tabs -->
      <div class="mt-4">
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

        <div class="tab-content pt-3 border border-top-0 rounded-bottom bg-light p-3" id="descriptionTabsContent">
          <div class="tab-pane fade show active" id="delivery" role="tabpanel">
            <ul class="mb-2">
              <li>The delicious cake is hand-delivered by our delivery boy in a good quality cardboard box.</li>
              <li>Candle and knife will be delivered as per the availability</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="care" role="tabpanel">
            <ul class="mb-2">
              <li>Keep the cake refrigerated.</li>
              <li>Consume the cake within 24 hours for best taste.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Product Description -->
      <div class="mt-4">
        <h4 class="fw-bold">Product Description</h4>
        <p class="small" style="color: #b435d7;">{{ $product->description }}</p>
      </div>

      <!-- Add to Cart Button (Full Width) -->
      <div class="mt-4">
        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="w-100">
          @csrf
          @method('PUT')
          <button type="submit" class="btn w-100 py-3 fw-bold shadow" style="background-color: #b435d7; color:white;">
            ADD TO CART
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Related Products -->
  <div class="related-products mt-5">
    <h4 class="fw-bold mb-4" style="color: #6f42c1;">Related Products</h4>
    <div class="row g-4">
      @forelse($relatedProducts as $related)
      <div class="col-md-3">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset("storage/" . $related->image) }}" alt="{{ $related->title }}" class="card-img-top"
            alt="Related Product">
          <div class="card-body d-flex flex-column">
            <h6 class="card-title mb-2 fw-bold text-truncate">{{ $related->title }}</h6>
            <p class="text-danger fw-bold mb-3">
              <del>₹{{ $related->price }}</del> ₹{{ $related->descount_price }}
            </p>
            <a href="{{ route("view", $related->id) }}" class="btn w-100 text-white mt-auto"
              style="background-color: #6f42c1">Add</a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <p class="text-center">No related products found.</p>
      </div>
      @endforelse
    </div>
  </div>
  @else
  <h3 class="fw-bold text-center my-5">Product Not Found</h3>
  @endif
</div>

<!-- Custom Styles -->
<style>
  .product-image {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 0rem;
  }

  .flavour-box,
  .offer-box {
    display: inline-block;
    font-size: 0.9rem;
  }

  .tab-content ul {
    padding-left: 1rem;
  }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
