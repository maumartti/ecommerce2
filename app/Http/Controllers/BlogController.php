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
        $categoriesBlog = CategoryBlog::all();
        $blogs = Blog::with('user')->with('category')->get();

        //todos los tags en array
        $tagsAll = [];
        foreach ($blogs as $blog) {
            $tags = explode(',', $blog->tags);
            $tagsAll = array_merge($tagsAll, $tags);
        }
        $tagsAll = array_unique(array_map('trim', $tagsAll));// Elimina duplicados y espacios en blanco
        //-end-allTags
        return view('admin.blogs')->with('web',$web)->with('blogs',$blogs)->with('categoriesBlog',$categoriesBlog)->with('tagsAll',$tagsAll);   
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
                'category_blog_id' => 'nullable',
                'active' => 'required',
            ]);
            $tools = new Tools;
            if ($validatedData['image'] !== '' && $validatedData['image'] !== null && Tools::isValidJson($validatedData['image'])) {
                $validatedData['image'] = $tools->saveImage64('/assets/images/blogs/', $validatedData['image']);
            }   
            $validatedData['user_id'] = Auth::user()->id;
            $validatedData["url"] = $tools->generateUrl($validatedData["title"]);
            $blog = Blog::create($validatedData);
            $blogs = Blog::with('category')->get();
    
            $this->logActivity('Blog','Blog Agregado', $validatedData["title"]);//registramos Acción
            return response()->json(['status' => 'success', 'blogs' => $blogs], 200);
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
        try {
            $blog = Blog::find($id);
            if (!$blog) {
                return response()->json(['status' => 'error', 'message' => 'Blog no encontrado'], 404);
            }
            $validatedData = $request->validate([
                'image' => 'json|required',
                'title' => 'required|string|max:100',
                'cita' => 'string|max:160',
                'text' => 'string|required',
                'tags' => 'string|max:255|nullable',
                'category_blog_id' => 'nullable',
                'active' => 'required',
            ]);
            $tools = new Tools;
            // Guardar la imagen Portada
            if(isset($validatedData['image'])){
                if ($validatedData['image'] !== '' && $validatedData['image'] !== null && Tools::isValidJson($request->image)) {
                    $validatedData['image'] = $tools->saveImage64('/assets/images/blogs/', $request->image);
                } elseif($validatedData['image'] == 'empty'){
                    $validatedData['image'] = null;   
                }else{
                    $validatedData['image'] = $blog->image;
                }
            }else{
                $validatedData['image'] = $blog->image;
            }    
            $validatedData['url'] = $tools->generateUrl($validatedData['title'], false);

            $currentTags = explode(',', $blog->tags);

            //Obtener los nuevos tags del formulario y agregamo si no existen
            // $newTags = explode(',', $validatedData['tags']);
            // foreach ($newTags as $tag) {
            //     $trimmedTag = trim($tag);
            //     if (!in_array($trimmedTag, $currentTags) && $trimmedTag !== '') {
            //         $currentTags[] = $trimmedTag;
            //     }
            // }
            // $currentTags = array_intersect($currentTags, $newTags);
            // $validatedData['tags'] = implode(',', $currentTags);
            //end tags
            $blog->tags = $validatedData['tags'];
            $blog->update($validatedData);

            $blogs = Blog::with('category')->get();
            $this->logActivity('Blog','Blog Editado', $blog->title);//registramos Acción
            return response()->json(['status' => 'success', 'blogs' => $blogs], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al actualizar el blog: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Encuentra la categoría por su ID
            $blog = Blog::find($id);
            // Verifica si la categoría existe
            if (!$blog) {
                return response()->json(['status' => 'error', 'message' => 'blog no encontrado'], 404);
            }
            // Elimina la categoría
            $blog->delete();
            $blogs = Blog::with('category')->get();
            $this->logActivity('Blog','Blog Eliminado', $blog->title);//registramos Acción
            return response()->json(['status' => 'success', 'blogs' => $blogs], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar el blog: ' . $e->getMessage()], 500);
        }
    }
}
