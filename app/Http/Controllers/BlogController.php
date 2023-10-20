<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\Blog;
use App\Models\CategoryBlog;

class BlogController extends Controller
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
        try {
            $validatedData = $request->validate([
                'image' => 'json|required',
                'title' => 'required|string|max:100',
                'cita' => 'string|max:160',
                'text' => 'string|required',
                'tags' => 'string|max:255|nullable',
                'category' => 'required',
                'active' => 'required',
            ]);
            $tools = new Tools;
            if ($validatedData['image'] !== '' && $validatedData['image'] !== null && Tools::isValidJson($validatedData['image'])) {
                $validatedData['image'] = $tools->saveImage64('/assets/images/blogs/', $validatedData['image']);
            }   
            $validatedData['user_id'] = Auth::user()->id;
            $blog = Blog::create($validatedData);
    
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving data:' . $e], 500);
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
