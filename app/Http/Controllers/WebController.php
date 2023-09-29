<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\ProfileInstagram;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;

use Dymantic\InstagramFeed\InstagramFeed;
use Dymantic\InstagramFeed\Profile;

class WebController extends Controller
{

    public function index()
    {
        $web = Web::find(1);
        $profile = \Dymantic\InstagramFeed\Profile::for('importadora_tatar');
        //$feed = [];
        $feed = $profile->refreshFeed(4);
        //$feed = \Dymantic\InstagramFeed\InstagramFeed::for('importadora_tatar');
        //dd($feed);
        $products = Product::all();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->get();
        $productsDescount = Product::whereNotNull('descount')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category')->get();
        $productsViews = Product::whereNotNull('views')->get();
        $productsPromo = Product::whereNotNull('promo')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('home')->with('web',$web)->with('feed',$feed)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
    }

    public function item(Request $request, $urlCat){
        $web = Web::find(1);
        $product = Product::where('url', $urlCat)->with('category')->first();
        if ($product) {
            $product->views += 1;// Incrementa el contador de vistas
            $product->save();
        }
        $productsViews = Product::whereNotNull('views')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('product')->with('web',$web)->with('product',$product)->with('productsViews',$productsViews)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function category(Request $request, $urlCat){
        $web = Web::find(1);
        $productsViews = Product::whereNotNull('views')->get();
        $category = Category::where('url', $urlCat)->with('subcategories')->first();
        $productsCategory = Product::where('category_id',$category->id)->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('category')->with('web',$web)->with('category',$category)->with('productsCategory',$productsCategory)->with('categories',$categories)->with('subcategories',$subcategories)->with('productsViews',$productsViews);
    }

    public function cart(Request $request){

        //se calcula el total,subtotal,iva del carrito
        $cart = session('cart', []);
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['quantity'] * $item['price'];
        }
        $iva = $subtotal * 0.19;// Suponiendo que el IVA es el 19%
        $total = $subtotal + $iva;
        // END carrito data
        
        $web = Web::find(1);
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('cart')->with('iva',$iva)->with('total',$total)->with('web',$web)->with('subtotal',$subtotal)->with('categories',$categories)->with('subcategories',$subcategories);
    }

    public function addToCart(Request $request, $productId) {
        //session()->forget('cart');
        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['status' => 'error']);
        }
    
        // Obtiene o crea el carrito de compras en la sesión
        $cart = session()->get('cart', []);
    
        // Busca el producto en el carrito por su ID
        $existingProduct = null;
        foreach ($cart as $key => $item) {
            if ($item['id'] == $product->id) {
                $existingProduct = $key;
                break;
            }
        }
    
        // Obtener la cantidad de la solicitud POST, si está presente, de lo contrario, establecer en 1
        $quantity = $request->input('quantity', 1);
    
        // Si el producto ya existe en el carrito, aumenta la cantidad en $quantity
        if ($existingProduct !== null) {
            $cart[$existingProduct]['quantity'] += $quantity;
        } else {
            // Si no existe, agrega el producto al carrito con la cantidad especificada
            $cart[] = [
                'id' => $product->id,
                'name' => $product->name,
                'url' => $product->url,
                'image1' => $product->image1,
                'price' => $product->price,
                'stock' => $product->stock,
                'quantity' => $quantity
            ];
        }
    
        // Calcula la cantidad total de productos en el carrito
        $totalCart = 0;
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalCart += $item['quantity'];
            $totalPrice += $item['price'];
        }
        session()->put('totalCart', $totalCart);
        session()->put('totalPrice', $totalPrice);
    
        // Actualiza la sesión con el carrito modificado
        session()->put('cart', $cart);
    
        // Devuelve la respuesta JSON que incluye 'quantity'
        return response()->json(['status' => 'success', 'cart' => $cart, 'totalCart' => $totalCart], 200);
    }
    
    public function actualizarCarrito(Request $request, $productId)
    {
        // Obtén el producto del carrito
        $cart = session()->get('cart', []);

        foreach ($cart as $key => $item) {
            if ($item['id'] == $productId) {
                // Actualiza la cantidad del producto con la cantidad proporcionada en la solicitud
                $cart[$key]['quantity'] = $request->input('quantity');
                break;
            }
        }

        // Actualiza la sesión con el carrito modificado
        session()->put('cart', $cart);

        // Calcula la cantidad total de productos en el carrito
        $totalCart = 0;
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalCart += $item['quantity'];
            $totalPrice += $item['price'];
        }
        session()->put('totalCart', $totalCart);
        session()->put('totalPrice', $totalPrice);

        // Devuelve una respuesta JSON con los nuevos datos del carrito
        return response()->json(['status' => 'success', 'cart' => $cart, 'totalCart' => $totalCart], 200);
    }

    
    public function clearCart(Request $request) {
        session()->forget('cart');
        return response()->json(['status' => 'success'], 200);
    }
    
}