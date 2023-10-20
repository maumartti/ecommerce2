<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\Blog;
use App\Models\CategoryBlog;

class BlogCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $web = Web::find(1);
        $blogs = Blog::all();
        $categoriesBlog = CategoryBlog::all();
        return view('admin.blogs')->with('web',$web)->with('blogs',$blogs)->with('categoriesBlog',$categoriesBlog);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
        ]);
        try {
            $tools = new Tools;
            $validatedData["url"] = $tools->generateUrl($validatedData["name"]);
            $categoryBlog = CategoryBlog::create($validatedData);
            $categoriesBlog = CategoryBlog::all();
            return response()->json(['status' => 'success', 'categoriesBlog' => $categoriesBlog], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear la categoríaBlog: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
