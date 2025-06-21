<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\provider;
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
    public function Adminlogout(Request $request){
        auth()->logout();
        return redirect()->route("login")->with("success", "You have been logged out successfully.");
    }

    
   public function manageFranchise(){
    $providers = provider::where("status", false)->get();
    return view("admin.manageFranchise", compact("providers"));
}

public function manageEmploye(){
    $providers = provider::where("status", true)->get();
    return view('admin.manageEmploye', compact("providers"));
}
public function approveFranchise($id){
    Provider::find($id)->update(["status" => 1]);
    return redirect()->route('manageEmploye')->with("msg", "Provider approved successfully");
}

    // public function approveFranchise($id)
    // {
    //     $provider = provider::findOrFail($id);
    //     $provider->status = true;
    //     $provider->save();
    //     return redirect()->back()->with("success", "Franchise approved successfully.");
    // }
    //  public function approveFranchise(provider $provider){
    //     if($provider->status){
    //         return redirect()->route("manageEmploye")->with("msg","this student already approved");
    //     }
    //     $provider->update(["status" =>true]);
    //     return redirect()->route("manageEmploye")->with("msg","student Approved successfully");
    //  }

    // public function manageEmploye()
    // {
    //     $providers = provider::where("status", true)->get();
    //     return view("admin.manageEmploye", compact("providers"));
    // }
//     public function approveFranchise(provider $provider)
// {
//     if ($provider->status) {
//         return redirect()->route("manageEmploye")
//             ->with("msg", "This provider is already approved.");
//     }

//     $provider->update(["status" => true]);

//     return redirect()->route("manageEmploye")
//         ->with("msg", "Provider approved successfully.");
// }

// public function manageEmploye()
// {
//     $providers = provider::where("status", true)->get();

//     return view("admin.manageEmploye", compact("providers"));
// }

}
