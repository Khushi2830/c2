<div class="sidebar">

  <a href="{{ Route("dashboard") }}" class="menu-item active fw-bold"><i class="fas fa-tachometer-alt"></i>
    Dashboard</a>
  <div class="submenu">

    <a href="{{route('category.index')}}" class="menu-item"><i class="fas fa-tags"></i>Manage Category</a>
    <a href="{{route('product.index')}}" class="menu-item"><i class="fas fa-box-open"></i>Manage Product</a>
    <a href="{{route("manageUser")}}" class="menu-item"><i class="fas fa-users-cog"></i>Manage User</a>
    <a href="{{route("manageOrder")}}" class="menu-item"><i class="fas fa-receipt"></i>Manage Order</a>
    <a href="{{route("managePosorder")}}" class="menu-item"><i class="fas fa-receipt"></i>Manage Pos Order</a>
    <a href="{{route("manageAddress")}}" class="menu-item"><i class="fas fa-map-marker-alt"></i>Manage Address</a>
    <a href="{{route("managePayment")}}" class="menu-item"><i class="fas fa-wallet"></i>Manage Payment</a>
    <a href="{{route("managePospayment")}}" class="menu-item"><i class="fas fa-wallet"></i>Manage Pos Payment</a>
    <a href="{{route("manageCustomiseCake")}}" class="menu-item"><i class="fas fa-birthday-cake"></i>CustomiseCake
      Order</a>
    <a href="{{route("managecake")}}" class="menu-item"><i class="fas fa-check-circle"></i>Confirm Cake Order</a>
    <a href="{{route("manageEmploye")}}" class="menu-item"><i class="fas fa-user-tie"></i>Manage Employe</a>
    <a href="{{route("manageApplication")}}" class="menu-item"><i class="fas fa-file-signature"></i>Employee
      Application</a>
    <a href="{{route("blog.index")}}" class="menu-item"><i class="fas fa-blog"></i>Manage Blog</a>
  </div>
  <a href="{{route("admin.logout")}}" class="menu-item active"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>