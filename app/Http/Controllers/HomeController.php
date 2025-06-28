<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }  
    public function histroy(){
        return view('history');
    }
    public function about(){
        return view('aboutUs');
    }
    public function blog1() {
      $blogs = blog::paginate(5);
      return view('blog1', compact("blogs"));
    }
   
  public function register(Request $req){
    if($req->isMethod("POST")){
      $data =$req->validate([
        "name"  => 'required',
        "lastname"  => 'required',
        "date"  => 'required',
        "email"  => 'required|unique:users',
        "phone"  => 'required|unique:users',
        "password"  => 'required|string',
      ]);
      User::create($data);
     return redirect()->route('login')->with("msg", "Applied successfully. Please login.");
    }
    return view("register");
} 
    public function login(Request $req){
   if($req->isMethod("POST")){
    $data = $req->validate([
      "email"=> "required|email",
      "password"=> "required",
    ]);
    $auth=Auth::attempt($data);

   if($auth){
     $user = Auth::user();
     if($user->status == 1){
       return redirect()->route("dashboard");
     }
      elseif($user->status == 0){
        return redirect()->route("index");
      }
     else{
       Auth::logout();
       return redirect()->route("index");
     }

   }
  }
  return  view("login")->with("msg", "Invalid email or password.");  ;
}
 
public function index(){
  $categories = category::all();
  return view("index", compact("categories"));
}

public function Indexlogout(Request $request){
        auth()->logout();
        return redirect()->route("home")->with("success", "you have been logged out successfully.");
    }

public function filter($id){
  $categories = Category::all();
  $products = Product::where('category_id', $id)->paginate(5);
  return view("filtercategory", compact("categories" , "products") );
}

// // public function search(Request $request){
// //   $search = $request->input('search');
// //   $products = Product::where('name', 'LIKE', "%{$search}%")->paginate(5);
// //   return view("search", compact("products"));
// }

public function viewProduct($id) {
    $product = Product::findOrFail($id);
     $relatedProducts = Product::where('category_id', $product->category_id)
      ->where('id', '!=', $id)
      ->take(4) // limit to 4 items
      ->get();
    return view("view", compact("product", "relatedProducts"));
}

public function addToCart(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $cart = session()->get('cart', []);
      if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
       
        $cart[$id] = [
            "title" => $product->title,
            "quantity" => 1,
            "price" => $product->descount_price,
            "image" => $product->image
        ];
    }
    session()->put('cart', $cart);
 return redirect()->back()->with('success', 'Product added to cart!');
}

public function showCart()
{
    $cart = session()->get('cart', []);
     $user = Auth::user();
    $address = $user?->address;

    return view('cart', compact('cart', 'address'));
}
 
public function increase($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    // Decrease quantity
    public function decrease($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity'] -= 1;
            } else {
                unset($cart[$id]); // remove item if quantity becomes 0
            }
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    // Remove item completely
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('msg', 'Item removed from cart.');
    }
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('msg', 'Your cart is empty.');
        }

        return view('checkout', compact('cart'));
    }

}