<div class="sidebar">
  <a href="{{ Route("dashboard") }}" class="menu-item active m-2"><i class="fas fa-fire"></i> Dashboard </a>
  <div class="submenu">
    <a href="{{ route('category.index') }}" class="menu-item"><i class="fas fa-award"></i> Manage Category</a>
    <a href="{{ route('product.index') }}" class="menu-item"><i class="fas fa-layer-group"></i> Manage Product</a>
    <a href="{{ route("manageUser") }}" class="menu-item"> <i class="fas fa-database"></i>Manage User </a>
    <a href="#" class="menu-item"><i class="fas fa-users"></i> Manage Order </a>
    <a href="{{ route("manageAddress") }}" class="menu-item"><i class="fas fa-users"></i> Manage Address </a>
    <a href="#" class="menu-item"> <i class="fas fa-credit-card"></i> Manage Payment </a>
    <a href="{{ route("manageCustomiseCake") }}" class="menu-item"> <i class="fas fa-credit-card"></i> CustomiseCake
      order </a>
    <a href="{{ route("managecake") }}" class="menu-item"> <i class="fas fa-credit-card"></i>Confirm Cake Order </a>
    <a href="{{ route("manageEmploye") }}" class="menu-item"><i class="fas fa-chart-bar"></i>Manage Employe</a>
    <a href="{{ route("manageApplication") }}" class="menu-item"><i class="fas fa-chart-bar"></i> Employee
      Application</a>
    <a href="{{ route("blog.index") }}" class="menu-item"> <i class="fas fa-cog"></i>Manage Blog </a>

  </div>
  <a href="{{ route("admin.logout") }}" class="menu-item active m-2 "><i class="fas fa-sign-out-alt"></i> Logout </a>
</div>