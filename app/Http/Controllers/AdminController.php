<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Product;
use App\Models\provider;
use App\Models\User;
use App\Models\wedding;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index(){
        $countCategory = Category::where("status", true)->count();
        $countProduct = Product::where("status", false)->count();
        $countUser = User::where("status", false)->count();
        $countEmployee = Employee::where("status", true)->count();
        return view("admin.dashboard", compact("countCategory", "countProduct", "countUser","countEmployee"));  
    }

    public function manageUser(){
       $users = User::paginate(10);
        return view("admin.manageUser", compact("users"));
    }
    public function Adminlogout(Request $request){
        auth()->logout();
        return redirect()->route("home")->with("success", "You have been logged out successfully.");
    }
    public function manageApplication() {
    $applications = Employee::where("status", false)->get();
    return view("admin.manageApplication", compact("applications"));
}

public function manageEmploye() {
    $employes = Employee::where("status", true)->get();
    return view('admin.manageEmploye', compact("employes"));
}


   public function approveEmployee(Employee $employee) {
    if (!$employee->status) {
        $employee->update(['status' => true]);
        return back()->with('msg', 'Employee approved.');
    }
    return back()->with('msg', 'Already approved.');
  }
   
  public function customiseCake() {
    $wedding = wedding::where("status", false)->get();
    return view('admin.customiseCake', compact("wedding"));
}
public function manageCake() {
    $weddings = wedding::where("status", true)->get();
    return view('admin.confirmCake', compact("weddings"));
}

public function approvecake(wedding $wedding) {
    if (!$wedding->status) {
        $wedding->update(['status' => true]);
        return back()->with('msg', ' order confirm.');
    }
    return back()->with('msg', 'Already confirmed.');
  }
}
