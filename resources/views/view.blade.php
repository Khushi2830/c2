@extends('x')
@section('title', 'index Page')

@section('content3')

 <div class="container">
  <div class="row g-4">
    <!-- Product Image -->
    <div class="col-md-6">
      <img src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/1621947382796_62.jpg" alt="Rainbow Pastry" class="img-fluid rounded">
    </div>

    <!-- Product Details -->
    <div class="col-md-6">
        @if( $product)
            
       
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
  <div class="related-products mt-5">
    <h4 class="fw-bold mb-4 text-primary">Related Products</h4>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card h-100">
          <img src="https://www.monginis.net/wp-content/uploads/2022/05/Oreo-Designer.jpg" class="card-img-top" alt="Oreo Cake">
          <div class="card-body">
            <h6 class="card-title">Oreo Cake</h6>
            <p class="text-danger fw-bold mb-1">₹450.00</p>
            <button class="btn btn-sm btn-pink w-100">Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100">
          <img src="https://www.monginis.net/wp-content/uploads/2022/05/KitKat-Ferrero.jpg" class="card-img-top" alt="Kitkat Cake">
          <div class="card-body">
            <h6 class="card-title">Kitkat Ferrero Cake</h6>
            <p class="text-danger fw-bold mb-1">₹500.00</p>
            <button class="btn btn-sm btn-pink w-100">Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100">
          <img src="https://www.monginis.net/wp-content/uploads/2022/05/Designer-Choco-Bite.jpg" class="card-img-top" alt="Choco Bite">
          <div class="card-body">
            <h6 class="card-title">Choco Bite Cake</h6>
            <p class="text-danger fw-bold mb-1">₹480.00</p>
            <button class="btn btn-sm btn-pink w-100">Add</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100">
          <img src="https://www.monginis.net/wp-content/uploads/2022/05/Designer-Choco-Stick.jpg" class="card-img-top" alt="Choco Stick">
          <div class="card-body">
            <h6 class="card-title">Choco Stick Cake</h6>
            <p class="text-danger fw-bold mb-1">₹475.00</p>
            <button class="btn btn-sm btn-pink w-100">Add</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection