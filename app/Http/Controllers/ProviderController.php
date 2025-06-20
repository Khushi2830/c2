<?php

namespace App\Http\Controllers;

use App\Models\provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = provider::all();
        return view('shopFranchise',compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shopFranchise');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
         if($req->isMethod("POST")){
            $data = $req->validate([
                "name" => 'required',
                "lastname" => 'required',
                "phone" => 'required',
                "email" => 'required',
                "state" => 'required|string',
                "city" => 'required|string',
                "property_type" => 'required|string',
                "address" => 'required|string',
                "pincode" => 'required|string',
                "description" => 'required|string',
                "password" => 'required|string',
            ]);
           provider::create($data);
           return redirect()->back()->with("msg","Applied successfully.");
        }
        return view("shopFranchise");
    }

    /**
     * Display the specified resource.
     */
    public function show(provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(provider $provider)
    {
        //
    }
}
