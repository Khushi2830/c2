<?php

namespace App\Http\Controllers;

use App\Models\blog;
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
      $blogs = blog::paginate(10);
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
    if(Auth::attempt($data)){
      if(Auth::user()->status){
        return redirect()->route("dashboard")->with("msg","Login successfully");
      }
       return redirect()->route("index")->with("msg","Login successfully");
    }
    else{
      return redirect()->back()->with("msg","Invalide credential");
    }
  }
  return  view("login");
}
 
public function index(){
  return view("index");
}

}