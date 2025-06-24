<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\category;
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
  return  view("login");
}
 
public function index(){
  $categories = category::all();
  return view("index", compact("categories"));
}

public function Indexlogout(Request $request){
        auth()->logout();
        return redirect()->route("home")->with("success", "you have been logged out successfully.");
    }

}