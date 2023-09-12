<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;


class ProductsController extends Controller
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
        $products = Product::all();
        $categories = Category::all();
        $subcategories = SubCategory::with('category')->get();
        return view('admin.products')->with('web',$web)->with('products',$products)->with('categories',$categories)->with('subcategories',$subcategories);   
    }

    public function all()
    {
        $products = Product::all();
        return response()->json(['products' => $products]);
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
            'name' => 'required|string|max:255',
        ]);
    
        try {
            $category = Product::create($validatedData);
            $products = Product::all();
            return response()->json(['status' => 'success', 'products' => $products], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear la categoría: ' . $e->getMessage()], 500);
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
            $category = Product::find($id);
    
            if (!$category) {
                return response()->json(['status' => 'error', 'message' => 'Categoría no encontrada'], 404);
            }
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                // Add other validation rules as needed
            ]);
    
            $category->update($validatedData);

            $products = Product::all();
            return response()->json(['status' => 'success', 'products' => $products], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al actualizar la categoría: ' . $e->getMessage()], 500);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Encuentra la categoría por su ID
            $category = Product::find($id);
            // Verifica si la categoría existe
            if (!$category) {
                return response()->json(['status' => 'error', 'message' => 'Categoría no encontrada'], 404);
            }
             // Encuentra y borra todas las SubCategory relacionadas con esta categoría
            $subcategories = SubProduct::where('category_id', $category->id)->get();
            foreach ($subcategories as $subcategory) {
                $subcategory->delete();
            }
            // Elimina la categoría
            $category->delete();
            return response()->json(['status' => 'success', 'message' => 'Categoría eliminada con éxito'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar la categoría: ' . $e->getMessage()], 500);
        }
    }
}
