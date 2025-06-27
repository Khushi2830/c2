<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        return view('pos', ['categories' => $categories]);
    }
}
