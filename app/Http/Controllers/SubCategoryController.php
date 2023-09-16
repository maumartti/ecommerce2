<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\Category;
use App\Models\SubCategory;


class SubCategoryController extends Controller
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
        // $web = Web::find(1);
        // $categories = Category::all();
        // $subcategories = SubCategory::all();
        // return view('admin.categories')->with('web',$web)->with('categories',$categories)->with('subcategories',$subcategories);   
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
            'category_id' => 'required'
        ]);
    
        try {
            $category = SubCategory::create($validatedData);
            $subcategories = SubCategory::with('category')->get();
            return response()->json(['status' => 'success', 'subcategories' => $subcategories], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear la categoría: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subcategories = SubCategory::where('category_id', $id)->get();
        return response()->json(['subcategories' => $subcategories], 200);
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
            $subcategory = SubCategory::find($id);
    
            if (!$subcategory) {
                return response()->json(['status' => 'error', 'message' => 'SubCategoría no encontrada'], 404);
            }
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'category_id' => 'required',
                // Add other validation rules as needed
            ]);
    
            $subcategory->update($validatedData);
            
            $subcategories = SubCategory::with('category')->get();
            return response()->json(['status' => 'success', 'subcategories' => $subcategories], 200);
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
            $subcategory = SubCategory::find($id);
            if (!$subcategory) {
                return response()->json(['status' => 'error', 'message' => 'Categoría no encontrada'], 404);
            }
            // Elimina
            $subcategory->delete();
            $subcategories = SubCategory::with('category')->get();
            return response()->json(['status' => 'success', 'subcategories' => $subcategories], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar la sub-categoría: ' . $e->getMessage()], 500);
        }
    }
}
