<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(3);
        return view("admin.manageProduct", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.insertProduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'descount_price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kg' => 'nullable|string',
            'veg' => 'required|string',
            'description' => 'nullable|string',

        ]);

        $data["image"] = $request->file("image")->store("product_images", "public");

        $product = Product::create($data);
        return redirect()->route('product.index')->with('msg', 'product inserted successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.editproduct', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'descount_price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kg' => 'required|string',
            'veg' => 'required|string',
            'description' => 'required|string',
        ]);


        if ($request->hasFile('image')) {
            $data["image"] = $request->file("image")->store("product_images", "public");
        }

        $product->update($data);
        return redirect()->route('product.index')->with('msg', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    { {
            $product->delete();
            return redirect()->back()->with('maseg', 'product Deleted successfully.');
        }
    }
}
