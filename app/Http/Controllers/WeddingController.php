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

public function showWeddingForm()
{
    return view('insertwedding');
}

public function register(Request $req)
{
    $data = $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:weddings',
        'phone' => 'required|unique:weddings',
        'date' => 'required|nullable',
        'city' => 'required|nullable',
        'description' => 'required|nullable',
    ]);

    $data['status'] = false;
    Wedding::create($data);

    return redirect()->route('weddingform')->with('msg', 'Wait for employe approval.');
}
}
