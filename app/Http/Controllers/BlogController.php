<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(['id', 'title', 'content']);
        return response()->json($blogs);
        // return Blog::all();
    }

    public function store(Request $request)
    {
        $blog = Blog::create($request->post());
        return response()->json([
            'message'=>'Blog Created Successfully!!',
            'blog'=>$blog
        ]);
        // $validatedData = $request->validate([
        //     'title' => 'required|max:255',
        //     'content' => 'required',
        // ]);

        // $blog = Blog::create($validatedData);

        // return response()->json($blog, 201);
    }

    public function show($id)
    {
        return Blog::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($validatedData);

        return response()->json($blog, 200);
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
