<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>creamer dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    .form-control-custom {
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      border: 1px solid #ced4da;
      transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .form-control-custom:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, .25);
    }

    .form-error {
      font-size: 0.875rem;
      color: #dc3545;
    }

    .stat-card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      position: relative;
      overflow: hidden;
      transform: translateY(-3px);
      transition: all 0.2s ease-in-out;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.4) !important;
    }

    .stat-card .icon-box {
      width: 40px;
      height: 40px;
      background-color: #6f42c1;
      color: white;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .stat-card small {
      color: #777;
      display: block;
    }

    .stat-card h5 {
      margin: 0;
      font-weight: 600;
    }

    .chart-bg {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 60px;
      background: url('https://www.chartjs.org/img/chartjs-logo.svg') no-repeat center right;
      background-size: contain;
      opacity: 0.1;
    }

    .mini-numbers {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
      font-size: 14px;
    }

    .mini-numbers div {
      text-align: center;
    }

    .mini-numbers strong {
      display: block;
      font-size: 16px;
      color: #333;
    }

    .sidebar {
      width: 260px;
      min-height: 80vh;
      background-color: #5f3dc4;
      color: white;
      padding: 10px 0px;
      margin: 0;
    }

    .sidebar .brand {
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      padding: 5px 0;
      margin-bottom: 15px;
      background-color: #4c32a1;
    }

    .sidebar .section-title {
      padding: 10px 20px;
      font-size: 12px;
      text-transform: uppercase;
      opacity: 0.7;
      letter-spacing: 1px;
    }

    .sidebar .menu-item {
      padding: 8.5px 10px;
      color: white;
      text-decoration: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 15px;
      transition: background 0.3s ease;
    }

    .sidebar .menu-item:hover,
    .sidebar .menu-item.active {
      background-color: #7b5de4;
    }

    .sidebar .menu-item i {
      margin-right: 10px;
    }

    .submenu {
      padding-left: 40px;
      background-color: #6845c7;
    }

    .submenu a {
      color: #e0e0e0;
      font-size: 14px;
      padding: 8px 0;
      display: block;
      text-decoration: none;
      transition: color 0.3s;
    }

    .submenu a:hover {
      color: white;
    }

    .header {
      background-color: #e4e0f4;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      font-size: 20px;
      font-weight: bold;
      color: #4c32a1;
    }

    .partner {
      margin-left: 10px;
      font-weight: 500;
    }

    .search-box {
      max-width: 500px;
      flex-grow: 1;
      margin: 0 20px;
      position: relative;
    }

    .search-box input {
      width: 100%;
      padding: 10px 40px 10px 15px;
      border-radius: 6px;
      border: 1px solid #5369c0;
    }

    .search-box i {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: gray;
    }

    .icons i,
    .icons .profile {
      font-size: 22px;
      margin-left: 20px;
      color: #5369c0;
      cursor: pointer;
    }

    .icons .profile {
      background-color: #fbd25b;
      color: white;
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-size: 16px;
    }
  </style>


</head>

<body style=" overflow-x: hidden; height: 100%;  scroll-behavior: smooth;">

  <div class="header">
    <div class="d-flex align-items-center">
      <div class="logo"><img src="{{ asset("logo.png") }}" width="150px" alt="">| Admin Pannel</div>
    </div>
    <div class="icons d-flex align-items-center" width="">
      <div class="profile lg w-100 h-100 p-2 m-2 " style="background-color:  #6845c7 ;">
        {{ Auth::user()->name ?? 'student' }}
      </div>
    </div>
  </div>
  @section('content')
  @show
</body>

</html>