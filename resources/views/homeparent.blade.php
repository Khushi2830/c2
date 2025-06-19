<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Monginis Style Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
    

    .container-w {
      display: flex;
      height: 80vh;
    }

    .form-container {
      flex: 1;
      background-color: #e4e0f4;
      padding: 40px;
      box-sizing: border-box;
    }

    .form-container h2 {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin: 20px 0 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 2px solid  #5f3dc4;
      border-radius: 5px;
      background-color: #fff;
    }

    .input-icon {
      display: flex;
      align-items: center;
    }

    .input-icon img {
      width: 24px;
      height: 24px;
      margin-right: 8px;
    }

    .button {
      background-color: #f06292;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
      font-size: 16px;
    }

    .image-container {
      flex: 1;
      background: url('{{ asset("banner3.jpg") }}') no-repeat center center;
      background-size: cover;
    }
     .highlight {
    color: #f529a2;
    font-weight: 600;
  }
  .section-purple {
    background-color: #eae3f9;
  }
  .form-control {
    max-width: 280px;
  }
  .btn-dark {
    background-color: #1d1d1d;
    color: white;
  }
    .highlight {
  color: #f529a2;
  font-weight: 600;
}
.btn-monginis {
  background-color: #f529a2;
  color: white;
  border: none;
  border-radius: 6px;
}
.btn-monginis:hover {
  background-color: #d31a85;
}
    .section-purple {
    background-color: #eae3f9;
    padding: 40px 0;
  }
  .section-white {
    background-color: #fff;
    padding: 40px 0;
  }
  .category-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
  }
  .category-heading h4 {
    margin: 0;
  }
  .category-box-round img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
  }
  .category-title {
    font-size: 14px;
    font-weight: 500;
  }
    .category-img {
  width: 100%;
  height: 250px; /* or your desired height */
  object-fit: cover;
  border-radius: 8px;
}
     body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fffaf6;
    }

    h2, h3 {
      font-weight: bold;
    }

    .highlight {
      color: #e6007e;
    }

    .category-box {
      border-radius: 12px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      padding: 20px;
      text-align: center;
    }

    .category-box img {
      width: 100%;
      border-radius: 8px;
    }

    .circle-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      margin: auto;
      margin-bottom: 10px;
    }

    .circle-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .btn-monginis {
      background-color: #e6007e;
      color: white;
      font-weight: 500;
      border: none;
      padding: 6px 18px;
      border-radius: 4px;
    }

    .btn-monginis:hover {
      background-color: #c3006c;
    }

    .section-purple {
      background-color: #f0e7fb;
      padding: 40px 0;
    }

    .section-white {
      background-color: white;
      padding: 40px 0;
    }
    .father-banner {
  background:light;
  padding: 40px 0;
  position: relative;
}
.btn-order-now:hover {
  background: #c2185b;
  color: white;
}

.tnc {
  font-size: 12px;
  color: #333;
  margin-top: 10px;
}


    .icon-text-row {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      margin-bottom: 40px;
    }

    .icon-text-row img {
      width: 80px;
      height: auto;
    }

    .text-content {
      font-size: 1.1rem;
      color: #111;
    }

    .text-content strong {
      font-weight: bold;
    }

    .container-custom {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 15px;
    }
     body {
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
    }

    .section-heading {
      color: #ff2d92;
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-top: 60px;
      margin-bottom: 30px;
    }

    .mission-text,
    .core-values,
    .mission-statement {
      max-width: 1100px;
      margin: auto;
      color: #111;
      font-size: 1.1rem;
    }

    .core-title {
      color: #ff2d92;
      font-size: 1.6rem;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 15px;
      text-align: left;
    }

    .core-values ol {
      padding-left: 1.5rem;
    }

    .mission-statement {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 40px;
    }

    .mission-statement img {
      width: 100px;
      height: auto;
    }

    .mission-statement p {
      font-size: 1.1rem;
      margin: 0;
    }

    .mission-statement strong {
      font-weight: bold;
    }
    .header-section {
      background-color: #150548; /* Deep purple */
      color: #ff2d92; /* Monginis pink */
      padding: 60px 0;
      text-align: center;
    }
    .header-section h2 {
      font-size: 2.5rem;
      font-weight: bold;
    }
    .story-section {
      background-color: #f9f9f9;
      padding: 60px 0;
    }
    .story-title {
      color: #ff2d92;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .story-text {
      font-size: 1.1rem;
      color: #333;
    }
    .story-image {
      width: 100%;
      max-width: 450px;
    }
    body {
      margin: 0;
      padding: 0;
    }
    .navbar {
      background-color: white;
      padding: 1rem 0;
    }
    .navbar-brand img {
      height: 45px;
    }
    .navbar-nav .nav-link {
      font-weight: bold;
      color: black;
      margin-right: 20px;
    }
    .navbar-nav .nav-link.active {
      color: #007bff; /* Blue for active */
    }
    .dropdown-menu {
      font-weight: normal;
    }
 
   
    .timeline {
      position: relative;
      max-width: 1000px;
      margin: auto;
      padding: 50px 0;
    }
    .timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #3d2b5a;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -2px;
    }
    .timeline-item {
      padding: 20px 30px;
      position: relative;
      width: 50%;
    }
    .timeline-item::after {
      content: " ";
      position: absolute;
      width: 20px;
      height: 20px;
      right: -10px;
      background-color: #fff;
      border: 4px solid #3d2b5a;
      top: 20px;
      border-radius: 50%;
      z-index: 1;
    }
    .timeline-item-left {
      left: 0;
    }
    .timeline-item-right {
      left: 50%;
    }
    .timeline-content {
      background: #fff;
      padding: 20px;
      border-radius: 6px;
      border-left: 5px solid #e91e63;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .timeline-year {
      font-weight: bold;
      color: #3d2b5a;
      margin-bottom: 10px;
    }
    .timeline-item-right::after {
      left: -10px;
    }
    @media screen and (max-width: 768px) {
      .timeline::after {
        left: 10px;
      }
      .timeline-item {
        width: 100%;
        padding-left: 40px;
        padding-right: 25px;
      }
      .timeline-item::after {
        left: 0;
      }
      .timeline-item-right {
        left: 0%;
      }
    }
  
  
    footer {
  font-family: 'Segoe UI', sans-serif;
  font-size: 15px;
  color: #111;
}

footer a {
  text-decoration: none;
  color: #111;
  transition: color 0.2s ease;
}

footer a:hover {
  color: #ec008c; /* Monginis pink */
}

footer h6 {
  color: #ec008c;
  font-weight: bold;
  margin-bottom: 15px;
}

footer img {
  object-fit: contain;
}

footer .social-icons img {
  transition: transform 0.3s;
}

footer .social-icons img:hover {
  transform: scale(1.1);
}

footer small {
  color: #666;
}

footer .border-top {
  border-color: #eee !important;
  padding-top: 20px;
  margin-top: 30px;
}
    

    .section-title {
      color: #d61a7f;
      font-weight: bold;
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }

    .content-section {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 15px;
    }

    .section-image {
      width: 100px;
      margin-bottom: 20px;
    }

    .highlight-text {
      color: #d61a7f;
      font-weight: 600;
    }

    .paragraph {
      margin-bottom: 1rem;
      line-height: 1.7;
    }

    ul {
      padding-left: 20px;
    }

    ul li {
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      .section-image {
        width: 80px;
      }
    }
    .timeline {
      position: relative;
      max-width: 1000px;
      margin: auto;
      padding: 50px 0;
    }
    .timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #3d2b5a;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -2px;
    }
    .timeline-item {
      padding: 20px 30px;
      position: relative;
      width: 50%;
    }
    .timeline-item::after {
      content: " ";
      position: absolute;
      width: 20px;
      height: 20px;
      right: -10px;
      background-color: #fff;
      border: 4px solid #3d2b5a;
      top: 20px;
      border-radius: 50%;
      z-index: 1;
    }
    .timeline-item-left {
      left: 0;
      style=" color: blueviolet;"
    }
    .timeline-item-right {
      left: 50%;
    }
    .timeline-item-right::after {
      left: -10px;
    }
    .timeline-content {
      background: #fff;
      padding: 20px;
      border-radius: 6px;
      border-left: 5px solid #e91e63;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .timeline-year {
      font-weight: bold;
      color: #3d2b5a;
      margin-bottom: 10px;
    }
    @media screen and (max-width: 768px) {
      .timeline::after {
        left: 10px;
      }
      .timeline-item {
        width: 100%;
        padding-left: 40px;
        padding-right: 25px;
      }
      .timeline-item::after {
        left: 0;
      }
      .timeline-item-right {
        left: 0%;
      }
    }
     </style>
     <style>
  .logo {
    width: 200px;
    height: 80px;
    object-fit: contain;
  }
</style>
<style>
  .cake-circle {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }

  .text-pink {
    color: #ff42b3; /* Customize the pink */
  }

  .btn-pink {
    background-color: #ff42b3;
    color: white;
    border: none;
    padding: 8px 18px;
    border-radius: 6px;
    font-weight: bold;
    text-decoration: none;
  }

  .bg-light-peach {
    background-color: #ffe2d1;
    padding: 10px;
    border-radius: 50%;
    display: inline-block;
  }
</style>
 <style>
    body {
      font-family: Arial, sans-serif;
      padding: 2rem;
      background: #fff;
      color: #333;
    }
    .blog-post {
      max-width: 800px;
      margin: 0 auto;
    }
    .blog-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }
    .blog-meta {
      color: #555;
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }
    .blog-meta a {
      color: #337ab7;
      text-decoration: none;
    }
    .blog-image {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 1rem;
    }
    .blog-description {
      font-size: 1rem;
      line-height: 1.6;
    }
    .blog-description a {
      color: #337ab7;
      text-decoration: none;
    }
  </style>

</head>
<body class="m-0 p-0" >
    <nav class="navbar navbar-expand-lg shadow-sm  ">
  <div class="container ">


    <a class="navbar-brand" href="{{ Route("home") }}">
      <img src="{{ asset("logo.png") }}" width="200vh" alt="Monginis Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: #5a66a0;" href="{{ Route("home") }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ Route("abuout") }}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("histroy") }}">Our History</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Become a Franchise
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Manufacturing Franchise</a></li>
            <li><a class="dropdown-item" href="#">Cake Shop Franchise</a></li>
          </ul>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="{{ Route("blog1") }}">Blogs</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Wedding Cakes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ Route("register") }}">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Father's Day Banner Section -->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
@section('content1')
@show
<footer class=" border-top pt-5 pb-3 mt-5" style="background-color: #e4e0f4;">
  <div class="container">
    <div class="row text-center text-md-start">
      <!-- Logo Column -->
      <div class="col-md-3 mb-4">
        <img src="{{ asset("logo.png") }}" alt="Monginis Logo" width="130">
        <p class="mt-3">
          <a href="#">Contact Us</a><br>
          <a href="#">About Us</a><br>
          <a href="#">Become Franchise</a><br>
          <a href="#">Become Vendor</a>
        </p>
      </div>

      <!-- Products Column -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold" style="color: #5a66a0;" >Products</h6>
        <p>
          <a href="#">Cakes</a><br>
          <a href="#">3D & SP Cakes</a><br>
          <a href="#">Pastries</a><br>
          <a href="#">Savouries</a><br>
          <a href="#">Chocolates</a>
        </p>
      </div>

      <!-- Info Column -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold" style="color: #5a66a0;" >Company</h6>
        <p>
          <a href="#">Download E-brochure</a><br>
          <a href="#">Recognition & Awards</a><br>
          <a href="#">Cake Studies</a><br>
          <a href="#">Our Factories</a>
        </p>
      </div>

      <!-- Policies & Social -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold" style="color: #5a66a0;" >Connect with us</h6>
        <div class="d-flex gap-2 justify-content-md-start justify-content-center">
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="30" alt="Facebook"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" width="30" alt="Twitter"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" width="30" alt="YouTube"></a>
          <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" width="30" alt="Instagram"></a>
        </div>
        <p class="mt-3">
          <a href="#">Refund Policy</a><br>
          <a href="#">Privacy Policy</a><br>
          <a href="#">Terms & Conditions</a>
        </p>
      </div>
    </div>

    <!-- Copyright -->
    <div class="row text-center pt-4 border-top">
      <div class="col-12">
        <small>Copyright © Monginis. All rights reserved</small><br>
        <small>Designed & Developed by <a href="#">QPSIT</a></small>
      </div>
    </div>
  </div>
</footer>
</body>
</html>