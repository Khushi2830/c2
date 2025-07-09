<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\category;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PosController extends Controller
{
    public function index($id = 0)
    {
        
        $employeeId = auth('employee')->id(); 


      
        $cart = Cart::with('items.product')
            ->where( 'employee_id', $employeeId)
            ->first();

        $categories = Category::all();
        $products = $id == 0
            ? Product::paginate(5)
            : Product::where('category_id', $id)->paginate(5);

        return view('pos', compact('categories', 'products', 'cart'));
    }
    public function search(Request $request)
    {
        $categories = Category::all();
        $searchTerm = $request->input('search');
        $products = $searchTerm
            ? Product::where('title', 'like', '%' . $searchTerm . '%')->paginate(5)
            : Product::paginate(5);

        return view('pos', compact('products', 'categories'));
    }



}
