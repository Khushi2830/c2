<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EnployController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\WeddingController;
use App\Models\wedding;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name("home");

Route::get("/aboutUs", [HomeController::class, "about"])->name("abuout");
Route::match(['get', 'post'], '/register', [HomeController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/login', [HomeController::class, 'login'])->name('login');

Route::get("/histroy", [HomeController::class, "histroy"])->name("histroy");
Route::get("/blog1", [HomeController::class, "blog1"])->name("blog1");
Route::get("/storelocation", [HomeController::class, "store"])->name("storelocation");

Route::middleware("index:auth")->group(function () {

  Route::prefix("index")->group(function () {
    Route::get("/page", [HomeController::class, "index"])->name("index");
  });
  route::get("/filtercategory/{id}", [HomeController::class, "filter"])->name("filtercategory");
  route::get("/view/{id}", [HomeController::class, "viewProduct"])->name("view");
  Route::get('/product/{id}', [HomeController::class, 'viewProduct'])->name('viewProduct');
  Route::put('/add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('cart.add');
  Route::get('/cart', [OrderController::class, 'showCart'])->name('cart.show');
  Route::post('/cart', [AddressController::class, 'store'])->name('address.store');
  Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
  Route::get('/checkout-success', function () {return view('checkout'); })->name('checkout.success');

  Route::post('/cart/increase/{id}', [HomeController::class, 'increase'])->name('cart.increase');
  Route::post('/cart/decrease/{id}', [HomeController::class, 'decrease'])->name('cart.decrease');
  Route::post('/cart/remove/{id}', [HomeController::class, 'remove'])->name('cart.remove');
  Route::get('/search', [HomeController::class, 'search'])->name('filter.search');

});



Route::middleware("admin:auth")->group(function () {

  Route::prefix("admin")->group(function () {

    Route::get("/", [AdminController::class, "index"])->name("dashboard");
    Route::get("/dashboard", [AdminController::class, "index"])->name("dashboard");
    Route::get("/user", [AdminController::class, "manageUser"])->name("manageUser");
    Route::resource("/product", ProductController::class, );
    Route::resource("/category", CategoryController::class, );
    Route::resource("/blog", BlogController::class, );
    Route::get("/manageAddress", [AddressController::class, "index"])->name("manageAddress");
    route::delete("/address/delete/{id}", [AddressController::class, "destroy"])->name("address.delete");

  });
});


Route::get("/wedding", [WeddingController::class, "index"])->name("wedding");
Route::get("/insertwedding", [WeddingController::class, "showWeddingForm"])->name("weddingform");
Route::post("/insertwedding", [WeddingController::class, "register"])->name("weddingregister");
Route::get('/admin/customise', [AdminController::class, 'customiseCake'])->name('manageCustomiseCake');
Route::get('/admin/confirm', [AdminController::class, 'manageCake'])->name('managecake');
Route::post('/admin/cake/confirm/{wedding}', [AdminController::class, 'approvecake'])->name('admin.approvecake');



route::get("/admin/logout", [AdminController::class, "Adminlogout"])->name("admin.logout");




Route::prefix("/employee")->group(function () {
  Route::get('/register', [EmployeeController::class, 'showRegisterForm'])->name('registerForm');
  Route::post('/register', [EmployeeController::class, 'register'])->name('employeregister');
  Route::get('/login', [EmployeeController::class, 'showLoginForm'])->name('loginForm');
  Route::post('/login', [EmployeeController::class, 'login'])->name('.login');
  Route::post('/logout', [EmployeeController::class, 'logout'])->name('logout');


});

Route::middleware(['auth:employee'])->group(function () {
  Route::get('/pos', [PosController::class, 'index'])->name('pos');
  Route::get('/pos/category/{id?}', [PosController::class, 'index'])->name('filter');
  Route::get('/pos/search', [PosController::class, 'search'])->name('pos.search');


});




Route::get('/admin/applications', [AdminController::class, 'manageApplication'])->name('manageApplication');
Route::get('/admin/employees', [AdminController::class, 'manageEmploye'])->name('manageEmploye');
Route::post('/admin/employee/approve/{employee}', [AdminController::class, 'approveEmployee'])->name('admin.approveEmployee');

route::get("/index/logout", [HomeController::class, "Indexlogout"])->name("index.logout");
