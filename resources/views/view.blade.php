@extends('x')
@section('title', 'index Page')

@section('content3')

  <div class="container">
    <div class="row g-4">
    @if($product)
    <div class="col-md-6">
      <img src="{{ asset("storage/" . $product->image) }}" alt="{{ $product->title }}" alt="Rainbow Pastry"
      class="img-fluid rounded">
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


    <div class="bottom-bar mt-4 d-flex gap-2 ">
    <form action="{{ route('add.to.cart', $product->id) }}" method="POST" class=" btn px-4 py-2 btn-pink w-50 "
      style=" background-color: #b435d7;">
      @csrf
      <button type="submit" class="btn px-4 py-2 btn-pink w-50" style="background-color: #b435d7;">ADD TO CART</button>
    </form>
    <form action="" method="POST" class=" btn px-4 py-2 btn-purple w-50">
      @csrf
      <button action="" class="btn w-50 btn-purple px-4 py-2">PROCEED TO CHECKOUT</button>
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection