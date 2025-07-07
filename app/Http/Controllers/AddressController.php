<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function store(Request $request)
    {

        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'pincode' => 'required|digits:6',

        ]);

        $validated['user_id'] = auth()->id();
        Address::create($validated);


        return back()->with('msg', 'Address details saved successfully!');
    }


    public function index()
    {

        $addresses = Address::paginate(5);
        return view('admin.manageAddress', compact('addresses'))->with('msg', 'Address details retrieved successfully!');
    }
    public function destroy($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();
        return back()->with('msg', 'Address deleted successfully!');
    }
    public function delete($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();
        return back()->with('msg', 'Address deleted successfully!');
    }
}

