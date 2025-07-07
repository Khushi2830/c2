@extends('homeparent')
@section('title', 'Home')

@section('content1')
  <section class="father-banner text-center m-4 p-4">
    <div class="container-fluid p-0">
    <div class="row">
      <!-- Banner Carousel -->
      <div id="cakeBannerCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
        <img src="{{ asset('banner11.png') }}" class="d-block w-100 banner-img" alt="Banner 1">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
        <img src="{{ asset('banner12.png') }}" class="d-block w-100 banner-img" alt="Banner 2">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
        <img src="{{ asset('banner0.png') }}" class="d-block w-100 banner-img" alt="Banner 3">
        </div>
      </div>
      </div>
    </div>
    </div>

    <style>
    .banner-img {
      max-height: 500px;
      object-fit: cover;
      width: 100%;
    }
    </style>


    <div class="container text-center my-5">
    <h2>Bring A Box Of <span class="highlight" style="color: #5f3dc4;">Happiness Today</span></h2>
    <div class="row mt-4 g-0">
      <div class="row">
      <div class="col-md-6 ">
        <img src="{{ asset("banner1.png") }}" width="600px" alt="Order Online" class="img-fluid rounded">
        <a href="{{ route("storelocation") }}" class="btn btn-monginis mt-3" style=" background-color: #5f3dc4;">Visit
        Our Nearest Store</a>
      </div>
      <div class="col-md-6">
        <img src="{{ asset("banner2.jpg") }}" width="600px" alt="Visit Store" class="img-fluid rounded">

        <a class="btn btn-monginis mt-3" style=" background-color: #5f3dc4;" href="{{ route("index") }}">Order
        Online</a>
      </div>
      </div>
    </div>
    </div>


    <div class="section-purple text-center py-5">
    <h3>Shop By <span class="highlight" style="color:#5f3dc4;">Bestseller Categories</span></h3>
    <div class="container mt-4">
      <div class="row g-4 justify-content-center">


      <div class="col-md-6">
        <div class="d-flex align-items-center bg-white rounded shadow-sm p-3 h-100">
        <img
          src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/UpgSwpmUAW25IThPFxmqb5lgYpVDrmvQOycqbVEh.jpg"
          alt="Birthday Surprises" class="img-fluid rounded-start category-card-img"
          style="max-width: 200px; object-fit: cover;">
        <div class="ms-4 text-start flex-grow-1">
          <h5 class="fw-bold mb-2">Birthday Surprises</h5>
          <a class="btn btn-monginis" style=" background-color: #5f3dc4;" href="{{ route("index") }}">View all</a>
        </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="d-flex align-items-center bg-white rounded shadow-sm p-3 h-100">
        <img
          src="https://d1f3aa6ifduais.cloudfront.net/assets/images/products/DjWGuuNebRAIMkrlCGel6OB4jbQKd4mBZ28v4y84.jpg"
          alt="Anniversary Surprises" class="img-fluid rounded-start category-card-img"
          style="max-width: 200px; object-fit: cover;">
        <div class="ms-4 text-start flex-grow-1">
          <h5 class="fw-bold mb-2">Anniversary Surprises</h5>
          <a class="btn btn-monginis" style=" background-color: #5f3dc4;" href="{{ route("index") }}">View all</a>
        </div>
        </div>
      </div>

      </div>
    </div>
    </div>


    <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold">Shop By <span style=" color: #5f3dc4;">Cake</span></h2>
      <a class="btn btn-monginis" style=" background-color: #5f3dc4;" href="{{ route("index") }}">View all</a>
    </div>

    <div class="row text-center">
      <!-- Cake Item -->
      <div class="col-6 col-md-3 mb-4">
      <img
        src=https://www.monginis.net/wp-content/uploads/elementor/thumbs/Tall-and-Fancy-Cake-9-min-scaled-pr2q5nk8snomjr875pa6dqsqo2am0csfgkpnbldtxs.jpg
        class="cake-circle" alt="Tall and Fancy">
      <p class="fw-bold mt-2">TALL AND FANCY</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src=https://www.monginis.net/wp-content/uploads/elementor/thumbs/tall-and-fancy-pqouxp5t8lfjjchur84emwklu7ry19ddvnjqowky4w.jpg
        class="cake-circle" alt="Exotic Cakes">
      <p class="fw-bold mt-2">EXOTIC CAKES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src=https://www.monginis.net/wp-content/uploads/elementor/thumbs/Premium-Cakes-pqov0r4xg7m39q23x1nr8mtjcapw1uhzarvjua1vww.jpg
        class="cake-circle" alt="Premium Cakes">
      <p class="fw-bold mt-2">PREMIUM CAKES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src=https://www.monginis.net/wp-content/uploads/elementor/thumbs/Designer-Cakes-pqov1whtsx6pgke17jjcacdth921gj264gkwygckb4.jpg
        class="cake-circle" alt="Designer Cakes">
      <p class="fw-bold mt-2">DESIGNER CAKES</p>
      </div>
    </div>
    </div>

  </section>
  <div class="section-purple py-5">
    <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold">Shop By <span class="text-pink" style=" color: #5f3dc4;">3D Cakes</span></h2>
      <a class="btn btn-monginis" style=" background-color: #5f3dc4;" href="{{ route("index") }}">View all</a>
    </div>

    <div class="row text-center">
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes15-pqovduzwr1k15z0pdpmh0bqxjq45dwj8fndar6m95c.jpg"
        class="cake-circle" alt="Wedding Cakes">
      <p class="fw-bold mt-2">WEDDING CAKES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes113-pqovf9r703hikwyz5bkbqyxtmj5yxk4qmmlio4iztc.jpg"
        class="cake-circle" alt="Photo Cakes">
      <p class="fw-bold mt-2">PHOTO CAKES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes112-pqovgmmsvhcfcmzz7woxcmlsikh21tis5cirmiiits.jpg"
        class="cake-circle" alt="E-Motion Cakes">
      <p class="fw-bold mt-2">E-MOTION CAKES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/3D-Special-Occasions-Cakes110-pqovj7oto2vta18t4iwzph4fbpqe7us7i53u4wojps.jpg"
        class="cake-circle" alt="3D Cakes">
      <p class="fw-bold mt-2">3D CAKES</p>
      </div>
    </div>
    </div>
  </div>


  <div class="section-white py-5">
    <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
      <h2 class="fw-bold mb-3 mb-md-0">Shop By <span style=" color: #5f3dc4;">Pastry</span></h2>
      <a class="btn btn-monginis" style=" background-color: #5f3dc4;" href="{{ route("index") }}">View all</a>
    </div>

    <div class="row text-center">
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-12-04_16_04_50_black-forest-pastry-pr0nigmilh4bbuiwh5cf4uj5mb4in6tk07fi3xpm8g.jpg"
        class="cake-circle" alt="Fresh Cream Pastries">
      <p class="fw-bold mt-2">FRESH CREAM PASTRIES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-12-04_16_06_16_devils-delight-pastry-pr0niuq3fznm5zyf6tfto8z2j370undj257sb34pn4.jpg"
        class="cake-circle" alt="Chocolate Pastries">
      <p class="fw-bold mt-2">CHOCOLATE PASTRIES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-05-27_16_14_08_Cherry-chocolate-mousse-cup-pr0nj52bj61rppjeifwpxod52bs27bikrke4l4pdqo.jpg"
        class="cake-circle" alt="Cup Pastries">
      <p class="fw-bold mt-2">CUP PASTRIES</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1622273916612_41-scaled-pr0s5rwb3u5px3hrhgxqymkw7egkrn1j0buxd1muog.jpg"
        class="cake-circle" alt="Swiss Miss Pastry">
      <p class="fw-bold mt-2">SWISS MISS PASTRY</p>
      </div>
    </div>
    </div>
  </div>


  <div class="section-purple py-5">
    <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
      <h2 class="fw-bold mb-3 mb-md-0">Shop By <span style=" color: #5f3dc4;">Savories</span></h2>
      <a class="btn btn-monginis" style=" background-color: #5f3dc4;" href="{{ route("index") }}">View all</a>
    </div>

    <div class="row text-center">
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1621336263762_50-pr2qhm2bqs1y95uvbvdb3q5uqjcpxq9hrri14bnis0.jpg"
        class="cake-circle" alt="Burgers">
      <p class="fw-bold mt-2">BURGERS</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1621336385045_97-pr2qhvgpn4eth9h7szfksnsgoe2e2pat520vx39l1s.jpg"
        class="cake-circle" alt="Pizza">
      <p class="fw-bold mt-2">PIZZA</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1622187517738_26-pr0rvqya7gfm2u2214x0d5nw3fvmnv8lmpch2si11s.jpg"
        class="cake-circle" alt="Rolls">
      <p class="fw-bold mt-2">ROLLS</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/2021-05-26_17_30_11_Classic-Veg-Pattice-pr0nglvz48kyfj7uauhwptdffy9ggogm31411agki8.jpg"
        class="cake-circle" alt="Patties and Puffs">
      <p class="fw-bold mt-2">PATTIES & PUFFS</p>
      </div>
    </div>
    </div>
  </div>


  <div class="section-white py-5">
    <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
      <h2 class="fw-bold mb-3 mb-md-0">Shop By <span style=" color: #5f3dc4;">Chocolates</span></h2>
      <a class="btn btn-monginis" style=" background-color: #5f3dc4;" href="{{ route("index") }}">View all</a>
    </div>

    <div class="row text-center">
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/MC-pr0o4u67ahr1po0stbjozp96piu2vsniqyime2j840.jpg"
        class="cake-circle" alt="Chocolate Bars">
      <p class="fw-bold mt-2">CHOCOLATE BARS</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/MB-pr0o53kl6u3wxrn5aflyomvsndjr0rou491h6u5ads.jpg"
        class="cake-circle" alt="Chocolate Bouquets">
      <p class="fw-bold mt-2">CHOCOLATE BOUQUETS</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/MB-pr0o53kl6u3wxrn5aflyomvsndjr0rou491h6u5ads.jpg"
        class="cake-circle" alt="Rose Sensation">
      <p class="fw-bold mt-2">ROSE SENSATION BOUQUET</p>
      </div>
      <div class="col-6 col-md-3 mb-4">
      <img
        src="https://www.monginis.net/wp-content/uploads/elementor/thumbs/1643866120701_79-pr0nb5fpfv4111575zkvqoy3af5qrxspo0rjqgjumo.jpg"
        class="cake-circle" alt="Valentine Chocolate Bar">
      <p class="fw-bold mt-2">VALENTINE CHOCOLATE BAR</p>
      </div>
    </div>
    </div>
  </div>


  <div style="background-color: #5f3dc4; color:white; text-align:center; padding:15px 10px;">
    <strong>Placing your first order ? Get Upto 10% Off</strong><br>
    Use Code : <strong>monginis</strong>
  </div>


  <div class="container my-5 text-center">
    <h3>What our clients say <span class="highlight" style="color: #5f3dc4;">about us</span></h3>

  </div>


  <div class="section-purple py-5 text-center">
    <h4><strong>Know The Sweet <span class="highlight" style="color: #5f3dc4;">Deal First</span> !</strong></h4>
    <p>Sign Up to our newsletter and get to know the sweets first !</p>
    <form class="d-flex justify-content-center mt-3">
    <input type="email" class="form-control w-25 me-2" placeholder="Enter your email address">
    <button class="btn btn-dark">Subscribe</button>
    </form>
  </div>


<div class="container text-center my-5">
  <h4>Our <span class="highlight" style="color: #5f3dc4;">Speciality</span></h4>
  <div class="row mt-4">
    <div class="col-md-3 col-6 mb-4">
      <img src="{{ asset('c.png') }}" alt="Safe Bakery" class="speciality-img"><br>
      <small>Safe & Hygienic Bakery</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="{{ asset('a.png') }}" alt="Delivery" class="speciality-img"><br>
      <small>Delivery in 700+ Cities</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="{{ asset('b.png') }}" alt="Trusted" class="speciality-img"><br>
      <small>Trusted by 20 Million</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="{{ asset('b.png') }}" alt="Pin" class="speciality-img"><br>
      <small>Services in 18000+ pincodes</small>
    </div>
  </div>
</div>



  <div class="bg-light text-center py-4">
    <strong style=" color: #5f3dc4;">MOST SEARCHED FOR ON CREAMER :</strong>
    <br>
    <small style="font-size:13px;">
    Cakes | 3D & 5D Cakes | Pastries | Savories | Baker Wears | Cakes | Chocolates | Cake Deals <br>
    CAKES: Packaged cakes | Chocolate Cake | Pineapple Cake | Truffle Cake | Walnut Truffle Cake | Chocolate Cake <br>
    SAVORIES: Namkeen | Rusk | Pizza Slices | Veg Rolls | Veg Paneer Patty | Breads | Tea Time Snacks
    </small>
  </div>
  <style>
  .speciality-img {
    width: 80px; /* Increase to desired size */
    height: auto;
  }
</style>

@endsection