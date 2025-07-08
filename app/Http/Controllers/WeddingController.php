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


public function Customisedorder()
  {
     $wedding = wedding::where("status", false)->get();
    return view("Customisedorder" , compact("wedding"));
  }

    public function Cake()
    {
        $weddings = wedding::where("status", true)->get();
        return view('ConfirmCake', compact("weddings"));
    }

    public function Confirmcake(wedding $wedding)
    {
        if (!$wedding->status) {
            $wedding->update(['status' => true]);
            return back()->with('msg', ' order confirm.');
        }
        return back()->with('msg', 'Already confirmed.');
    }

}
