<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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
        $products = Product::with('category', 'subcategory')->get();
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
            'image1' => 'required',
            'category_id' => 'required',
            'price' => 'string|max:255',
            'price_old' => 'string|max:255',
            'stock' => 'required',
            'description' => 'string|max:255',
            'descount' => 'nullable|string',
            'kilos' => 'nullable|string',
            'color' => 'nullable|string',
            'size' => 'nullable|string',
            'promo' => 'string'
        ]);

        try {
            $tools = new Tools;
            if ($validatedData['image1'] !== '' && $validatedData['image1'] !== null && Tools::isValidJson($validatedData['image1'])) {
                $validatedData['image1'] = $tools->saveImage64('/assets/images/products/', $validatedData['image1']);
            }
            $validatedData['url'] = $tools->generateUrl($validatedData['name'], true);
            $validatedData['user_id'] = Auth::user()->id;
            $validatedData['promo'] = $request->has('promo') && $request->input('promo') === 'on' ? 1 : 0;
            $validatedData['code'] = strtoupper(Str::random(6));//AT5F1P
            //dd($validatedData);
            $category = Product::create($validatedData);
            $products = Product::with('category', 'subcategory')->get();
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
            $product = Product::find($id);
    
            if (!$product) {
                return response()->json(['status' => 'error', 'message' => 'Producto no encontrada'], 404);
            }
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'image1' => 'json|required',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'image6' => '',
                'category_id' => 'required',
                'price' => 'string|max:255',
                'price_old' => 'string|max:255',
                'stock' => 'required',
                'description' => 'string|min:0|max:255',
                'descount' => 'nullable|string',
                'promo' => 'string'
            ]);
            $tools = new Tools;
            if ($validatedData['image1'] !== 'empty' && $validatedData['image1'] !== null && Tools::isValidJson($validatedData['image1'])) {
                $validatedData['image1'] = $tools->saveImage64('/assets/images/products/', $validatedData['image1']);
            }
            if ($validatedData['image2'] !== 'empty' && $validatedData['image2'] !== null && Tools::isValidJson($validatedData['image2'])) {
                $validatedData['image2'] = $tools->saveImage64('/assets/images/products/', $validatedData['image2']);
            }
            if ($validatedData['image3'] !== 'empty' && $validatedData['image3'] !== null && Tools::isValidJson($validatedData['image3'])) {
                $validatedData['image3'] = $tools->saveImage64('/assets/images/products/', $validatedData['image3']);
            }
            if ($validatedData['image4'] !== 'empty' && $validatedData['image4'] !== null && Tools::isValidJson($validatedData['image4'])) {
                $validatedData['image4'] = $tools->saveImage64('/assets/images/products/', $validatedData['image4']);
            }
            if ($validatedData['image5'] !== 'empty' && $validatedData['image5'] !== null && Tools::isValidJson($validatedData['image5'])) {
                $validatedData['image5'] = $tools->saveImage64('/assets/images/products/', $validatedData['image5']);
            }
            if ($validatedData['image6'] !== 'empty' && $validatedData['image6'] !== null && Tools::isValidJson($validatedData['image6'])) {
                $validatedData['image6'] = $tools->saveImage64('/assets/images/products/', $validatedData['image6']);
            }
            if($validatedData['image1'] == 'empty'){ $validatedData['image1'] = null;}
            if($validatedData['image2'] == 'empty'){ $validatedData['image2'] = null;}
            if($validatedData['image3'] == 'empty'){ $validatedData['image3'] = null;}
            if($validatedData['image4'] == 'empty'){ $validatedData['image4'] = null;}
            if($validatedData['image5'] == 'empty'){ $validatedData['image5'] = null;}
            if($validatedData['image6'] == 'empty'){ $validatedData['image6'] = null;}

            $validatedData['url'] = $tools->generateUrl($validatedData['name'], true);
            $validatedData['user_id'] = Auth::user()->id;
            $validatedData['promo'] = $request->has('promo') && $request->input('promo') === 'on' ? 1 : 0;
            $product->update($validatedData);

            $products = Product::with('category', 'subcategory')->get();
            $subcategories = SubCategory::with('category')->get();
            return response()->json(['status' => 'success', 'products' => $products, 'subcategoriesAll' => $subcategories], 200);
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
            // Encuentra la Producto por su ID
            $product = Product::find($id);
            // Verifica si la Producto existe
            if (!$product) {
                return response()->json(['status' => 'error', 'message' => 'Producto no encontrada'], 404);
            }
            // Elimina la Producto
            $product->delete();
            $products = Product::with('category', 'subcategory')->get();
            return response()->json(['status' => 'success', 'products' => $products], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar la Producto: ' . $e->getMessage()], 500);
        }
    }
}
