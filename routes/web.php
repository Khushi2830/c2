<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class, "home"])->name("home");

Route::get("/aboutUs",[HomeController::class, "about"])->name("abuout");
Route::match(['get', 'post'], '/register', [HomeController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/login', [HomeController::class, 'login'])->name('login');

Route::get("/histroy",[HomeController::class, "histroy"])->name("histroy");
Route::get("/blog1",[HomeController::class, "blog1"])->name("blog1");

 Route::prefix("index")->group(function(){
        Route::get("/page",[HomeController::class, "index"])->name("index");
   });

Route::middleware("admin:auth")->group(function(){

   Route::prefix("admin")->group(function(){
   
    Route::get("/", [AdminController::class, "index"])->name("dashboard");
       Route::get("/dashboard", [AdminController::class, "index"])->name("dashboard");
       Route::get("/user", [AdminController::class, "manageUser"])->name("manageUser");
       Route::resource("/product",ProductController::class, );
       Route::resource("/category", CategoryController::class, );
       Route::resource("/blog", BlogController::class, );
       
   });
});
  route::get("/admin/logout", [AdminController::class, "Adminlogout"])->name("admin.logout");
Route::resource("/provider", ProviderController::class,);
Route::get("/shopFranchise", [ProviderController::class, "index"])->name("shopFranchise");
Route::get("/admin/manageFranchise", [AdminController::class, "index1"])->name("manageFranchise");
Route::get("/admin/manageEmploye", [AdminController::class, "manageEmploye"])->name("manageEmploye");
 
Route::get('/admin/manage-employee', [AdminController::class, 'manageEmploye'])->name('manageEmployee');
Route::post('/admin/approve-franchise/{provider}', [AdminController::class, 'approveFranchise'])->name('approveFranchise');