<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\blog;
use App\Models\category;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function store()
  {
    return view('storelocation');
  }
  public function home()
  {
    return view('home');
  }
  public function histroy()
  {
    return view('history');
  }
  public function about()
  {
    return view('aboutUs');
  }

  public function team()
  {
    return view('team');
  }
  public function blog1()
  {
    $blogs = blog::paginate(5);
    return view('blog1', compact("blogs"));
  }

  public function register(Request $req)
  {
    if ($req->isMethod("POST")) {
      $data = $req->validate([
        "name" => 'required',
        "lastname" => 'required',
        "date" => 'required',
        "email" => 'required|unique:users',
        "phone" => 'required|unique:users',
        "password" => 'required|string',
      ]);
      User::create($data);
      return redirect()->route('login')->with("msg", "Applied successfully. Please login.");
    }
    return view("register");
  }
  public function login(Request $req)
  {
    if ($req->isMethod("POST")) {
      $data = $req->validate([
        "email" => "required|email",
        "password" => "required",
      ]);
      $auth = Auth::attempt($data);

      if ($auth) {
        $user = Auth::user();
        if ($user->status == 1) {
          return redirect()->route("dashboard");
        } elseif ($user->status == 0) {
          return redirect()->route("index");
        } else {
          Auth::logout();
          return redirect()->route("index");
        }

      }
    }
    return view("login")->with("msg", "Invalid email or password.");
  }

  public function delete($id)
  {
    $user = User::findOrFail($id);
    $user->delete();
    return back()->with('msg', ' deleted successfully!');
  }


  public function edit(User $user)
  {
    $users = User::paginate(5);
    return view('profile', compact('user', 'user'));
  }

  public function update(Request $request, User $user)
  {
    $data = $request->validate([
      'name' => 'required|string',
      'date' => 'required|date',
      'email' => 'required|email|unique:users,email,' . $user->id,
      'phone' => 'required|unique:users,phone,' . $user->id,
    ]);

    $user->update($data);

    return redirect()->route('user.edit', $user)->with('success', 'Profile updated successfully.');
  }
  public function index()
  {
    $categories = category::all();
    $products = Product::all();
    return view("index", compact("categories", "products"));
  }


  public function Indexlogout(Request $request)
  {
    auth()->logout();
    return redirect()->route("home")->with("success", "you have been logged out successfully.");
  }

  public function filter($id)
  {
    $categories = Category::all();
    $products = Product::where('category_id', $id)->paginate(5);
    return view("filtercategory", compact("categories", "products"));
  }

  public function search(Request $request)
  {
    $categories = Category::all();
    $searchTerm = $request->input('search');
    $products = $searchTerm
      ? Product::where('title', 'like', '%' . $searchTerm . '%')->paginate(5)
      : Product::paginate(5);

    return view('filtercategory', compact('products', 'categories'));
  }

  public function viewProduct($id)
  {
    $product = Product::findOrFail($id);
    $relatedProducts = Product::where('category_id', $product->category_id)
      ->where('id', '!=', $id)
      ->take(4)
      ->get();
    return view("view", compact("product", "relatedProducts"));
  }
  public function increase($productId)
  {
    $user = Auth::user();

    $order = Order::firstOrCreate([
      'user_id' => $user->id,
      'status' => 'pending',
    ]);

    $item = OrderItems::where('order_id', $order->id)
      ->where('product_id', $productId)
      ->first();

    if ($item) {
      $item->quantity += 1;
      $item->save();
    }

    return redirect()->back();
  }
  public function decrease($productId)
  {
    $user = Auth::user();

    $order = Order::where('user_id', $user->id)
      ->where('status', 'pending')
      ->first();

    if (!$order)
      return redirect()->back();

    $item = OrderItems::where('order_id', $order->id)
      ->where('product_id', $productId)
      ->first();

    if ($item) {
      if ($item->quantity > 1) {
        $item->quantity -= 1;
        $item->save();
      } else {
        $item->delete();
      }
    }

    return redirect()->back();
  }
  public function remove($productId)
  {
    $user = Auth::user();

    $order = Order::where('user_id', $user->id)
      ->where('status', 'pending')
      ->first();

    if ($order) {
      OrderItems::where('order_id', $order->id)
        ->where('product_id', $productId)
        ->delete();
    }

    return redirect()->back()->with('msg', 'Item removed from cart.');
  }
  public function profile()
  {
    return view("profile");
  }

  public function success(Request $request)
  {
    $orderId = $request->input('order_id'); // Or get from session if needed
    $order = Order::with('orderItems')->findOrFail($orderId);

    return view("success", compact('order'));
  }
  public function Details()
  {
    $user = Auth::user();
    $order = Order::where('user_id', $user->id)->get();
    return view("Orderdetail", compact("order"));
  }

  public function Address()
  {
    $user = Auth::user();
    $order = Order::where('user_id', $user->id)->get();
    return view("Address", compact("order"));
  }
  public function show()
  {
    $order = Order::where('user_id', auth()->id())
      ->where('status', 'pending')
      ->with('items.product') // eager-load product data too
      ->first();

    $cartItems = $order ? $order->items : collect(); // prevent null error
    $addresses = Address::where('user_id', auth()->id())->paginate(5);

    return view('cart', compact('order', 'cartItems', 'addresses'));
  }

}