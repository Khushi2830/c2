@extends('x')
@section('title', 'index Page')

@section('content3')

 <div class="container">
  <div class="row g-4">
    @if( $product)
    <div class="col-md-6">
      <img src="{{ asset("storage/" . $product->image) }}" alt="{{ $product->title }}" alt="Rainbow Pastry" class="img-fluid rounded">
    </div>

    <!-- Product Details -->
    <div class="col-md-6">
       
            
       
      <h3 class="fw-bold">{{$product->title}}</h3>
      
      <h4 class="text-danger fw-bold"><del>₹{{$product->price}} </del>₹{{$product->descount_price}}</h4>
      <p class="text-muted">{{$product->category->cat_title}}</p>

      <!-- Quantity -->
      <div class="my-3">
        <label class="fw-bold me-3">Qty</label>
        <button class="qty-btn">−</button>
        <input type="text" value="1" class="qty-input" readonly>
        <button class="qty-btn">+</button>
      </div>

      <!-- Flavours -->
      <div class="my-3">
        <label class="fw-bold d-block mb-2">Quantity</label>
        <div class="flavour-box">{{$product->kg}}</div>
      </div>

      <!-- Offers -->
      <div class="my-4">
        <h5 class="text-danger fw-bold">Creamer</h5>
        <div class="mb-2">
          <span class="offer-box">100% {{$product->veg}}</span>
         
        </div>
        <p class="text-info small">
           {{ $product->description }}
        </p>
      </div>
       @else
       <h3 class="fw-bold">Product Not Found</h3>
         @endif
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="bottom-bar mt-4 d-flex gap-2 ">
       <button class="btn w-50 btn-pink px-4 py-2">ADD TO CART</button>
      <button class="btn w-50 btn-purple px-4 py-2">PROCEED TO CHECKOUT</button>
  </div>

  <!-- Related Products -->
  <div class="related-products mt-2">
    <h4 class="fw-bold mb-4 " style="color: #6f42c1;">Related Products</h4>
    <div class="row g-4">
        @forelse($relatedProducts as $related)
      <div class="col-md-3">
        <div class="card h-100">
          <img src="{{ asset("storage/" . $related->image) }}" alt="{{ $related->title }}" class="card-img-top" alt="Oreo Cake">
          <div class="card-body">
            <h6 class="card-title">{{ $related->title }}</h6>
            <p class="text-danger fw-bold mb-1"><del>₹{{$related->price}} </del>₹{{$related->descount_price}}</p>
            <a href="{{ route("view", $related->id) }}" class="btn w-100 text-white" style="background-color: #6f42c1">Add</a>
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
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
