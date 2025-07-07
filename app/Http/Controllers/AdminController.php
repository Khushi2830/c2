<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cartitem;
use App\Models\Cash;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Payment;
use App\Models\Product;
use App\Models\provider;
use App\Models\User;
use App\Models\wedding;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $countCategory = Category::where("status", true)->count();
        $countProduct = Product::where("status", false)->count();
        $countUser = User::where("status", false)->count();
        $countEmployee = Employee::where("status", true)->count();
        $countOrder = Order::where("status", true)->count();
        $countcartitem = Cartitem::where("status", false)->count();
        $countcash = Cash::all()->count();
        $countPayment = Payment::where("status", 'authorized')->count();
        return view("admin.dashboard", compact("countCategory", "countProduct", "countUser", "countEmployee", "countOrder", "countPayment", "countcartitem", "countcash"));
    }

    public function managePosorder()
    {
        $cartitems = Cartitem::with(['cart.employee', 'product'])->paginate(6);
        return view("admin.managePosorder", compact("cartitems"));
    }

    public function managePospayment()
    {
        $cashs = Cash::with(['cart.employee'])->paginate(6);
        return view("admin.managePospayment", compact("cashs"));
    }

    public function manageUser()
    {
        $users = User::paginate(10);
        return view("admin.manageUser", compact("users"));
    }
    public function manageOrder()
    {
        $orderitems = OrderItems::with(['order.user', 'product'])->paginate(6);
        return view("admin.manageOrder", compact("orderitems"));
    }
    public function managePayment()
    {
        $payments = Payment::where("status", 'authorized')->paginate(6);
        return view("admin.managePayment", compact("payments"));
    }
    public function Adminlogout(Request $request)
    {
        auth()->logout();
        return redirect()->route("home")->with("success", "You have been logged out successfully.");
    }
    public function manageApplication()
    {
        $applications = Employee::where("status", false)->get();
        return view("admin.manageApplication", compact("applications"));
    }

    public function manageEmploye()
    {
        $employes = Employee::where("status", true)->get();
        return view('admin.manageEmploye', compact("employes"));
    }


    public function approveEmployee(Employee $employee)
    {
        if (!$employee->status) {
            $employee->update(['status' => true]);
            return back()->with('msg', 'Employee approved.');
        }
        return back()->with('msg', 'Already approved.');
    }


    public function viewCake($id)
    {
        $wedding = wedding::findOrFail($id);
        return view("admin.viewCake", compact("wedding"));
    }
    public function viewApplication($id)
    {
        $employee = Employee::findOrFail($id);
        return view("admin.viewApplication", compact("employee"));
    }

    public function customiseCake()
    {
        $wedding = wedding::where("status", false)->get();
        return view('admin.customiseCake', compact("wedding"));
    }
    public function manageCake()
    {
        $weddings = wedding::where("status", true)->get();
        return view('admin.confirmCake', compact("weddings"));
    }

    public function approvecake(wedding $wedding)
    {
        if (!$wedding->status) {
            $wedding->update(['status' => true]);
            return back()->with('msg', ' order confirm.');
        }
        return back()->with('msg', 'Already confirmed.');
    }
    public function distroy($id)
    {
        $wedding = Wedding::findOrFail($id);
        $wedding->delete();
        return redirect()->back()->with('msg', 'Wedding deleted successfully.');
    }

    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->back()->with('maseg', 'Application deleted successfully.');
    }

}
