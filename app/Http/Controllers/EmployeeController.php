<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function showRegisterForm()
    {
        return view('employeRegister');
    }

    public function register(Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required|unique:employees',
            'address' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'property_type' => 'nullable',
            'description' => 'nullable',
            'state' => 'required',
            'password' => 'required|min:6',
        ]);
        $data['password'] = bcrypt($data['password']);
        $data['status'] = false;
        Employee::create($data);
        return redirect()->route('registerForm')->with('mis', 'Wait for admin approval.');
    }

    public function showLoginForm()
    {
        return view('employeLogin');
    }

    public function login(Request $req)
    {
        $credentials = $req->only('email', 'password');
        if (Auth::guard('employee')->attempt($credentials)) {
            $employee = Auth::guard('employee')->user();
            if ($employee->status) {
                return redirect()->route('pos')->with('msg', 'Login successful');
            } else {
                Auth::guard('employee')->logout();
                return back()->with('error', 'Not approved yet.');
            }
        }
        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::guard('employee')->logout();
        return redirect()->route('loginForm');
    }
}
