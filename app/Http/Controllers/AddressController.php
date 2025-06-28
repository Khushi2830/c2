<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function store(Request $request)
    {
        // Validate form input
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
        // Fetch all addresses for the authenticated user
        $addresses = Address::paginate(5);
        return view('admin.manageAddress', compact('addresses'))->with('msg', 'Address details retrieved successfully!');
    }
    public function destroy($id)
    {
        // Find the address by ID and delete it
        $address = Address::findOrFail($id);
        $address->delete();

        return back()->with('msg', 'Address deleted successfully!');
    }
}
