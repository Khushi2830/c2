@extends('homeparent')
@section('title', 'About Us')

@section('content1')

<!-- Hero Section -->
<section class="hero-section text-center py-5" style="background-color: #5f3dc4;">
  <h2 class="text-light fw-bold">About Us</h2>
</section>

<!-- Our Story -->
<section class="story-section py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 text-center">
        <img src="https://www.monginis.net/wp-content/uploads/2022/06/Untitled-design-37.png" alt="Cake Sketch" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6">
        <h3 style="color: #5f3dc4;">Our Story</h3>
        <p>Our journey began with one humble shop in Fort, Mumbai in 1956, under the inspiring vision of our founder, Hussein Khorakiwala. Over time, we have grown to over a thousand locations across India, working together with a community of collaborative shop owners, suppliers, and partners.</p>
        <p>We empower budding entrepreneurs by offering franchises, partnering with them to achieve excellence and shared success.</p>
      </div>
    </div>
  </div>
</section>

<!-- Mission and Values -->
<section class="mission-section py-5">
  <div class="container">
    <h3 class="text-center mb-4" style="color: #5f3dc4;">Our Mission, Values, and Vision</h3>
    <p class="text-center px-4">Creating exceptional cakes is our passion. We focus on customer satisfaction and foster strong partnerships with franchise owners and suppliers. We uphold integrity across every link in our value chain.</p>

    <div class="core-values px-4 mt-5">
      <h4 style="color: #5f3dc4;">Our Core Values</h4>
      <ol>
        <li>Every product is made with love, care, and affection—as if it’s for our most beloved.</li>
        <li>We treat all stakeholders with fairness, believing that good intentions yield great products and relationships.</li>
      </ol>
    </div>

    <!-- Mission Section -->
<div class="mission-statement mt-5 text-center">
  <img src="{{ asset('g.png') }}" alt="Cake Icon" class="img-fluid mb-3" style="max-width: 300px;">
  <h4 class="fw-bold" style="color: #5f3dc4;">Our Mission</h4>
  <p class="text-muted px-3 px-md-5">
    To deliver gourmet cakes and sweets that become part of all life’s celebrations and joyful memories.
  </p>
</div>

<!-- Core Values Section -->
<div class="row text-center mt-5 justify-content-center">
  <!-- Core Purpose -->
  <div class="col-md-5 mb-4">
    <div class="p-4 border rounded-4 shadow-sm h-100 bg-light">
      <img src="{{ asset('e.png') }}" alt="Core Icon" class="img-fluid mb-3" style="max-width: 150px;">
      <h5 class="fw-semibold" style="color: #5f3dc4;">Our Core Purpose</h5>
      <p class="text-muted">
        To help people express happiness in meaningful ways.
      </p>
    </div>
  </div>

  <!-- Our Passion -->
  <div class="col-md-5 mb-4">
    <div class="p-4 border rounded-4 shadow-sm h-100 bg-light">
      <img src="{{ asset('f.png') }}" alt="Cake Icon" class="img-fluid mb-3" style="max-width: 200px;">
      <h5 class="fw-semibold" style="color: #5f3dc4;">Our Passion</h5>
      <p class="text-muted">
        Cakes are our heart and soul. Every product is baked with personal care and attention, as if made for our own family.
      </p>
    </div>
  </div>
</div>

  </div>
</section>

<!-- Our Secret -->
<section class="content-section py-5 bg-light text-center mt-0">
  <div class="container">
    <img src="https://www.monginis.net/wp-content/uploads/2022/06/Untitled-design-38.png" width="300px" class="img-fluid mb-3" alt="Secret Image">
    <h3 style="color: #5f3dc4;">Our Secret</h3>
    <p>We only use the finest ingredients in our creations, upholding premium quality and hygiene. Every cake is crafted with love, passion, and technology to deliver joy in every bite.</p>
  </div>
</section>

<!-- Our Stores -->
<section class="content-section py-5 text-center">
  <div class="container">
    <h3 style="color: #5f3dc4;">Our Stores</h3>
    <p>Our stores are conveniently located across local markets and communities. Whether for birthdays, weddings, or a sweet craving, Monginis is always near you. With 10,000+ stores and online ordering options, celebrations are now more accessible than ever.</p>
  </div>
</section>

<!-- Moral Responsibility -->
<section class="content-section py-5 bg-light">
  <div class="container">
    <h3 class="text-center" style="color: #5f3dc4;">Our Moral Responsibility</h3>

    <h5 style="color: #5f3dc4;" class="mt-4">Food Safety - ISO 22000</h5>
    <p>We voluntarily ensure high compliance with food safety regulations. Clean, well-lit, and hygienic conditions are our priority.</p>

    <h5 style="color: #5f3dc4;">Our Standards</h5>
    <p>We follow FSSAI and FSSC 22000 norms with strict sanitation practices and Good Manufacturing Practices (GMP).</p>

    <h5 style="color: #5f3dc4;">Our Values</h5>
    <p>We never compromise on quality or deadlines. All equipment is sterilized regularly. We are a 100% vegetarian company and follow all FSA regulations rigorously.</p>

    <h5 style="color: #5f3dc4;">Good Manufacturing Practices</h5>
    <ul>
      <li>Strict adherence to GMP sanitation guidelines (GMPs 110.10 Part 110.20; 110.35 Sub Part B).</li>
      <li>Daily sterilization of food contact surfaces and hygiene of team members ensured.</li>
      <li>Only FSSAI-approved ingredients used.</li>
      <li>Quarterly inspections by municipal bodies. Damaged goods removed promptly.</li>
    </ul>
  </div>
</section>
<ul class="dropdown-menu" aria-labelledby="customCakeDropdown">
    <li>
      <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('wedding') }}">
        <i class="fas fa-birthday-cake fs-6" style="color: #6f42c1;"></i>
        <span>Customised Cake</span>
      </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center gap-2" href="{{route('CakeOrder')}}">
        <i class="fas fa-shopping-cart fs-6" style="color: #6f42c1;"></i>
        <span>Customise Cake Order</span>
      </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center gap-2" href="{{route('cake')}}">
        <i class="fas fa-shopping-cart fs-6" style="color: #6f42c1;"></i>
        <span>Confirm  Order</span>
      </a>
    </li>
    
  </ul>
@endsection
