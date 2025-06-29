<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::paginate(5);
        return view('admin.manageBlog', compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.insertBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $request->validate([
                'title' => 'required|unique:blogs,title',
                'author' => 'required|unique:blogs,author',
                'content' => 'nullable',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $blog = new blog();
            $blog->title = $request->title;
            $blog->author = $request->author;
            $blog->content = $request->content;

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->file("image")->storeAs("blog_images", $imageName, "public");
                $blog->image = 'blog_images/' . $imageName;
            }

            $blog->save();

            return redirect()->route('blog.index')->with('msg', 'blog created successfully.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return view('admin.editblog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title,' . $blog->id,
            'author' => 'required|unique:blogs,author,' . $blog->id,
            'content' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->file("image")->storeAs("blog_images", $imageName, "public");
            $blog->image = 'blog_images/' . $imageName;
        }

        $blog->save();

        return redirect()->route('blog.index')->with('msg', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('maseg', 'blog Deleted successfully.');
    }
}
