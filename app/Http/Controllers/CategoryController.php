<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(3);
        return view("admin.manageCategory", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::paginate(5);
        return view("admin.insertCategory", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat_title' => 'required|unique:categories,cat_title',
            'cat_description' => 'nullable',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $category = new Category();
        $category->cat_title = $request->cat_title;
        $category->cat_description = $request->cat_description;
        $category->category_id = $request->category_id;


        if ($request->hasFile('cover_image')) {
            $imageName = time() . '.' . $request->cover_image->extension();
            // Save with custom name
            $request->file("cover_image")->storeAs("category_images", $imageName, "public");
            $category->cover_image = 'category_images/' . $imageName;
        }

        $category->save();

        return redirect()->route('category.index')->with('msg', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::paginate(5);
        return view('admin.editCategory', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            "cat_title" => "required",
            "cat_description" => "required",
            "category_id" => "nullable|exists:categories,id",
        ]);

        $category->update($data);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('maseg', 'category Deleted successfully.');
    }
}

