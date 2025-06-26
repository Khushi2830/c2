<?php

namespace App\Http\Controllers;

use App\Models\wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index()
    {
        return view('wedding');
    }

    public function insertwedding()
    {
        return view('wedding'); // or a separate form view
    }

    public function register(Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:weddings',
            'phone' => 'required|unique:weddings',
            'date' => 'nullable',
            'city' => 'nullable',
            'description' => 'nullable',
        ]);

        $data['status'] = false;
        Wedding::create($data);
        return redirect()->route('insertwedding')->with('msg', 'Wait for admin approval.');
    }
}
