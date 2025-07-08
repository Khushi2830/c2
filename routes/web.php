<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EnployController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\WeddingController;
use App\Models\wedding;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name("home");

Route::get("/aboutUs", [HomeController::class, "about"])->name("abuout");
Route::match(['get', 'post'], '/register', [HomeController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/login', [HomeController::class, 'login'])->name('login');

Route::get("/histroy", [HomeController::class, "histroy"])->name("histroy");
Route::get("/team", [HomeController::class, "team"])->name("team");
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
  Route::get('/checkout-success', function () {
    return view('checkout');
  })->name('checkout.success');

  Route::post('/cart/increase/{id}', [HomeController::class, 'increase'])->name('cart.increase');
  Route::post('/cart/decrease/{id}', [HomeController::class, 'decrease'])->name('cart.decrease');
  Route::post('/cart/remove/{id}', [HomeController::class, 'remove'])->name('cart.remove');
  Route::get('/search', [HomeController::class, 'search'])->name('filter.search');
  route::get('/success', [HomeController::class, 'success'])->name('success');
  Route::get("/profile", [HomeController::class, 'profile'])->name('profile');
  Route::put('/user/update/{user}', [HomeController::class, 'update'])->name('user.update');
  Route::get('/user/edit/{user}', [HomeController::class, 'edit'])->name('user.edit');
  Route::get('/order/details', [HomeController::class, 'Details'])->name('order');
  Route::get('/order/address', [HomeController::class, 'Address'])->name('address');
  Route::get('/razorpay/{orderId}', [RazorpayController::class, 'pay'])->name('razorpay.pay');
  Route::post('/razorpay/payment', [RazorpayController::class, 'handlePayment'])->name('razorpay.payment');
  // Route::get('/razorpay/success', [RazorpayController::class, 'success'])->name('razorpay.success');
  Route::get('/razorpay/failed', [RazorpayController::class, 'failed'])->name('razorpay.failed');
  Route::get('/cart', [HomeController::class, 'show'])->name('cart.show');
  route::delete("/address/delete/{id}", [AddressController::class, "delete"])->name("delete");
  Route::get('/wedding/cakeorder', [WeddingController::class, 'Customisedorder'])->name('CakeOrder');
  Route::get('/wedding/confirmcake', [WeddingController::class, 'Cake'])->name('cake');
  Route::post('/wedding/cake/confirm/{wedding}', [weddingController::class, 'Confirmcake'])->name('Confirmcake');


});



Route::middleware("admin:auth")->group(function () {

  Route::prefix("admin")->group(function () {
    Route::get("/", [AdminController::class, "index"])->name("dashboard");
    Route::get("/dashboard", [AdminController::class, "index"])->name("dashboard");
    Route::get("/user", [AdminController::class, "manageUser"])->name("manageUser");
    Route::get("/order", [AdminController::class, "manageOrder"])->name("manageOrder");
    Route::get("/Payment", [AdminController::class, "managePayment"])->name("managePayment");
    Route::resource("/product", ProductController::class, );
    Route::resource("/category", CategoryController::class, );
    Route::resource("/blog", BlogController::class, );
    Route::get("/manageAddress", [AddressController::class, "index"])->name("manageAddress");
    route::delete("/address/delete/{id}", [AddressController::class, "destroy"])->name("address.delete");
    Route::delete("/employee/delete/{id}", [AdminController::class, "delete"])->name("application.delete");
    Route::delete("/user/delete/{id}", [HomeController::class, "delete"])->name("user.delete");
    Route::delete("/wedding/delete/{id}", [AdminController::class, "distroy"])->name("wedding.delete");
    Route::get("/application/view/{id}", [AdminController::class, "viewApplication"])->name("view.application");
    Route::get("/cakeorder/view/{id}", [AdminController::class, "viewCake"])->name("view.cake");
    
  });
});
Route::get("/wedding", [WeddingController::class, "index"])->name("wedding");
Route::get("/insertwedding", [WeddingController::class, "showWeddingForm"])->name("weddingform");
Route::post("/insertwedding", [WeddingController::class, "register"])->name("weddingregister");
Route::get('/admin/customise', [AdminController::class, 'customiseCake'])->name('manageCustomiseCake');
Route::get('/admin/confirm', [AdminController::class, 'manageCake'])->name('managecake');
Route::post('/admin/cake/confirm/{wedding}', [AdminController::class, 'approvecake'])->name('admin.approvecake');
Route::get('/admin/posorder', [AdminController::class, 'managePosorder'])->name('managePosorder');
Route::get('/admin/pospayment', [AdminController::class, 'managePospayment'])->name('managePospayment');


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
  Route::get('/cart/add/{product}', [CartController::class, 'add'])->name('add');
  Route::post('/increase/{item}', [CartController::class, 'increase'])->name('increase');
  Route::post('/decrease/{item}', [CartController::class, 'decrease'])->name('decrease');
  Route::post('/remove/{item}', [CartController::class, 'remove'])->name('remove');
  Route::post('checkout', [CartController::class, 'checkout'])->name('checkout');
  Route::get('/bill/print/{id}', [CartController::class, 'print'])->name('bill.print');
  Route::get('/pos/posorder', [CartController::class, 'show'])->name('posorder');


});




Route::get('/admin/applications', [AdminController::class, 'manageApplication'])->name('manageApplication');
Route::get('/admin/employees', [AdminController::class, 'manageEmploye'])->name('manageEmploye');
Route::post('/admin/employee/approve/{employee}', [AdminController::class, 'approveEmployee'])->name('admin.approveEmployee');

route::get("/index/logout", [HomeController::class, "Indexlogout"])->name("index.logout");
