<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $countCategory = Category::where("status", true)->count();
        $countProduct = Product::where("status", false)->count();
        $countUser = User::where("status", false)->count();
        return view("admin.dashboard", compact("countCategory", "countProduct", "countUser"));  
    }

    public function manageUser(){
       $users = User::paginate(10);
        return view("admin.manageUser", compact("users"));
    }

}
