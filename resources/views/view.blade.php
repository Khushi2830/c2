@extends('x')
@section('title', 'index Page')

@section('content3')

  <div class="container">
    <div class="row g-4">
    @if($product)
     <div class="col-md-6 text-center mt-4 ">
      <img src="{{ asset('storage/' . $product->image) }}" 
           alt="{{ $product->title }}" 
           class="img-fluid rounded product-image shadow">
    </div>


    <div class="col-md-6">



      <h3 class="fw-bold">{{$product->title}}</h3>

      <h4 class="text-danger fw-bold"><del>₹{{$product->price}} </del>₹{{$product->descount_price}}</h4>
      <p class="text-muted">{{$product->category->cat_title}}</p>



      <div class="my-3">
      <label class="fw-bold d-block mb-2">Quantity</label>
      <div class="flavour-box">{{$product->kg}}</div>
      </div>


      <div class="my-4">
      <h5 class="text-danger fw-bold">Creamer</h5>
      <div class="mb-2">
      <span class="offer-box">100% {{$product->veg}}</span>

      </div>

      <div class="container mt-5">


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
        <ul>
        <li>The delicious cake is hand-delivered by our delivery boy in a good quality cardboard box.</li>
        <li>Candle and knife will be delivered as per the availability</li>
        </ul>
      </div>
      <div class="tab-pane fade" id="care" role="tabpanel">
        <ul>
        <li>Keep the cake refrigerated.</li>
        <li>Consume the cake within 24 hours for best taste.</li>
        </ul>
      </div>
      </div>
      </div>
      <h4>Product Description</h4>
      <p class=" small" style=" color: #b435d7;">
      {{ $product->description }}
      </p>
      </div>
    @else
      <h3 class="fw-bold">Product Not Found</h3>
    @endif
    </div>
    </div>


    <div class="bottom-bar mt-2 d-flex gap-2 ">
    <form action="{{ route('cart.add', $product->id) }}" method="POST" class=" btn   w-50 " style=" background-color: #b435d7;">
      @csrf
        @method('PUT')
         <button type="submit" class="btn px-3 py-3 w-50 fw-bold" style="background-color: #b435d7; color:white;">ADD TO CART</button>
    </form>
     
    <form action="" method="POST" class=" btn w-50">
      @csrf
          <button type="submit" class="btn w-100 btn-purple px-4 py-3" style="background-color: #350243; color:white;">PROCEED TO CHECKOUT</button>
    </form>
    </div>


    <div class="related-products mt-2">
    <h4 class="fw-bold mb-4 " style="color: #6f42c1;">Related Products</h4>
    <div class="row g-4">
      @forelse($relatedProducts as $related)
      <div class="col-md-3">
      <div class="card h-100">
      <img src="{{ asset("storage/" . $related->image) }}" alt="{{ $related->title }}" class="card-img-top"
      alt="Oreo Cake">
      <div class="card-body">
      <h6 class="card-title">{{ $related->title }}</h6>
      <p class="text-danger fw-bold mb-1"><del>₹{{$related->price}} </del>₹{{$related->descount_price}}</p>
      <a href="{{ route("view", $related->id) }}" class="btn w-100 text-white"
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
  </div>

 <style>
  
.product-image {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  border-radius: 0rem;
}
 </style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection