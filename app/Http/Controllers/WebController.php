<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\ProfileInstagram;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Blog;
use App\Models\CategoryBlog;
use App\Models\Region;

use Dymantic\InstagramFeed\InstagramFeed;
use Dymantic\InstagramFeed\Profile;

class WebController extends Controller
{

    public function index()
    {
        $web = Web::find(1);
        $profile = \Dymantic\InstagramFeed\Profile::for('importadora_tatar');
        //$feed = [];
        //$feed = $profile->refreshFeed(4);
        $feed = \Dymantic\InstagramFeed\InstagramFeed::for('importadora_tatar');
        //dd($feed);
        $products = Product::orderBy('created_at', 'desc')->with('category', 'subcategory')->get();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('category', 'subcategory')->get();
        $productsDescount = Product::whereNotNull('descount')->with('category', 'subcategory')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category')->with('category', 'subcategory')->get();
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::where('promo', 1)->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('home')->with('web',$web)->with('feed',$feed)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function contact()
    {
        $web = Web::find(1);
        $products = Product::with('category', 'subcategory')->get();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('category', 'subcategory')->get();
        $productsDescount = Product::whereNotNull('descount')->with('category', 'subcategory')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category', 'subcategory')->get();
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::whereNotNull('promo')->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('contact')->with('web',$web)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function login()
    {
        if (Auth::check()) { return redirect('/admin/home');} //redirecciona si esta logeado
        $web = Web::find(1);
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        return view('auth.login')->with('web', $web)->with('categories', $categories);
    }
    public function register()
    {
        if (Auth::check()) { return redirect('/admin/home');} //redirecciona si esta logeado
        $web = Web::find(1);
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        return view('auth.register')->with('web', $web)->with('categories', $categories);
    }
    public function passwordconfirm()
    {
        if (Auth::check()) { return redirect('/admin/home');} //redirecciona si esta logeado
        $web = Web::find(1);
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        return view('auth.passwords.confirm')->with('web', $web)->with('categories', $categories);
    }
    public function passwordreset($token)
    {
        if (Auth::check()) { return redirect('/admin/home');} //redirecciona si esta logeado
        $web = Web::find(1);
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        return view('auth.passwords.reset')->with('web', $web)->with('token', $token)->with('categories', $categories);
    }
    public function passwordemail()
    {
        if (Auth::check()) { return redirect('/admin/home');} //redirecciona si esta logeado
        $web = Web::find(1);
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        return view('auth.passwords.email')->with('web', $web)->with('categories', $categories);
    }

    public function about()
    {
        $web = Web::find(1);
        $products = Product::with('category', 'subcategory')->get();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('category', 'subcategory')->get();
        $productsDescount = Product::whereNotNull('descount')->with('category', 'subcategory')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category', 'subcategory')->get();
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::whereNotNull('promo')->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('about')->with('web',$web)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function blog($url = null)
    {
        $web = Web::find(1);
        $products = Product::with('category', 'subcategory')->get();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('category', 'subcategory')->get();
        $productsDescount = Product::whereNotNull('descount')->with('category', 'subcategory')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category', 'subcategory')->get();
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::whereNotNull('promo')->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        $categoriesBlog = CategoryBlog::all();
        $blogs = Blog::with('user')->with('category')->get();
        //todos los tags en array
        $tagsAll = [];
        foreach ($blogs as $blog) {
            $tags = explode(',', $blog->tags);
            $tagsAll = array_merge($tagsAll, $tags);
        }
        $tagsAll = array_unique(array_map('trim', $tagsAll));// Elimina duplicados y espacios en blanco
        //--
        if($url){
            $blog = Blog::where('url',$url)->first();
            return view('blog')->with('tagsAll',$tagsAll)->with('web',$web)->with('blog',$blog)->with('blogs',$blogs)->with('categoriesBlog',$categoriesBlog)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
        }else{
            return view('blogs')->with('tagsAll',$tagsAll)->with('web',$web)->with('blogs',$blogs)->with('categoriesBlog',$categoriesBlog)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
        }
    }
    public function blogCategory($url)
    {
        $web = Web::find(1);
        $products = Product::with('category', 'subcategory')->get();
        $category = CategoryBlog::where('url',$url)->first();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('category', 'subcategory')->get();
        $productsDescount = Product::whereNotNull('descount')->with('category', 'subcategory')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category', 'subcategory')->get();
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::whereNotNull('promo')->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        $categoriesBlog = CategoryBlog::all();
        $blogs = Blog::with('user')->with('category')->get();
        //todos los tags en array
        $tagsAll = [];
        foreach ($blogs as $blog) {
            $tags = explode(',', $blog->tags);
            $tagsAll = array_merge($tagsAll, $tags);
        }
        $tagsAll = array_unique(array_map('trim', $tagsAll));// Elimina duplicados y espacios en blanco
        //--
        return view('blogs')->with('category',$category)->with('tagsAll',$tagsAll)->with('web',$web)->with('blogs',$blogs)->with('categoriesBlog',$categoriesBlog)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function blogTag($url)
    {
        $web = Web::find(1);
        $products = Product::with('category', 'subcategory')->get();
        //$category = CategoryBlog::where('url',$url)->first();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('category', 'subcategory')->get();
        $productsDescount = Product::whereNotNull('descount')->with('category', 'subcategory')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category', 'subcategory')->get();
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::whereNotNull('promo')->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        $categoriesBlog = CategoryBlog::all();
        $url = str_replace('-', ' ', $url);
        $blogs = Blog::with('user')->with('category')->where('tags', 'LIKE', '%' . $url . '%')->get();
        //todos los tags en array
        $tagsAll = Blog::distinct()
        ->pluck('tags')
        ->map(function ($tags) {
            return explode(',', $tags);
        })
        ->flatten()
        ->unique()
        ->map('trim')
        ->values()
        ->all();
        //--
        return view('blogs')->with('tagsAll',$tagsAll)->with('web',$web)->with('blogs',$blogs)->with('categoriesBlog',$categoriesBlog)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function item(Request $request, $urlCat){
        $web = Web::find(1);
        $product = Product::where('url', $urlCat)->with('category', 'subcategory')->first();
        if ($product) {
            $product->views += 1;// Incrementa el contador de vistas
            $product->save();
        }
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::where('promo', 1)->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('product')->with('web',$web)->with('product',$product)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function category(Request $request, $urlCat){
        $web = Web::find(1);
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $category = Category::where('url', $urlCat)->with('subcategories')->first();
        $productsCategory = Product::where('category_id',$category->id)->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        $subcategoriesCategory = SubCategory::where('category_id', $category->id)->get();
        return view('category')->with('web',$web)->with('category',$category)->with('productsCategory',$productsCategory)->with('categories',$categories)->with('subcategories',$subcategories)->with('subcategoriesCategory',$subcategoriesCategory)->with('productsViews',$productsViews);
    }
    public function featured(Request $request){
        $web = Web::find(1);
        $products = Product::where('promo', 1)->with('category', 'subcategory')->get();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('category', 'subcategory')->get();
        $productsDescount = Product::whereNotNull('descount')->with('category', 'subcategory')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->with('category', 'subcategory')->get();
        $productsViews = Product::whereNotNull('views')->with('category', 'subcategory')->get();
        $productsPromo = Product::whereNotNull('promo')->with('category', 'subcategory')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('featured')->with('web',$web)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
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
        $regions = Region::with('companies')->get();
        $categories = Category::with('subcategories')->orderBy('pos')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('cart')->with('iva',$iva)->with('total',$total)->with('regions',$regions)->with('web',$web)->with('subtotal',$subtotal)->with('categories',$categories)->with('subcategories',$subcategories);
    }




    public function addToCart(Request $request, $productId) {
        //session()->forget('cart');
        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['status' => 'error']);
        }
        $cart = session()->get('cart', []);
        $existingProduct = null;
        foreach ($cart as $key => $item) {
            if ($item['id'] == $product->id) {
                $existingProduct = $key;
                break;
            }
        }
        $quantity = $request->input('quantity', 1);
        if ($existingProduct !== null) {
            $cart[$existingProduct]['quantity'] += $quantity;
        } else {
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
        $totalCart = 0;
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalCart += $item['quantity'];
            $totalPrice += $item['price'] * $item['quantity'];
        }
        session()->put('totalCart', $totalCart);
        session()->put('totalPrice', $totalPrice);
        // Actualiza la sesión con el carrito modificado
        session()->put('cart', $cart);
        $latestCartItem = end($cart);//ultimo item
        // Devuelve la respuesta JSON que incluye 'quantity'
        return response()->json(['status' => 'success', 'cart' => $latestCartItem, 'totalCart' => $totalCart, 'totalPrice' => $totalPrice], 200);
    }
    



    public function quitToCart(Request $request, $productId) {
        $cart = session()->get('cart', []);
        $productIndex = null;
        foreach ($cart as $key => $item) {
            if ($item['id'] == $productId) {
                unset($cart[$key]);
                break;
            }
        }
        $totalCart = 0;
        $totalPrice = 0;
        if (!empty($cart)) {
            foreach ($cart as $item) {
                $totalCart += $item['quantity'];
                $totalPrice += $item['price'] * $item['quantity'];
            }
            session()->put('totalCart', $totalCart);
            session()->put('totalPrice', $totalPrice);
            session()->put('cart', $cart);
        }else{
            session()->put('totalCart', 0);
            session()->put('totalPrice', 0);
            session()->forget('cart');
        }    
        return response()->json(['status' => 'success', 'cart' => $cart, 'totalCart' => $totalCart, 'totalPrice' => $totalPrice], 200);
    }
    


    
    public function addToFavorite(Request $request, $productId) {
        //session()->forget('favorites');
        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['status' => 'error']);
        }
        $favorites = session()->get('favorites', []);
        $existingProduct = null;
        foreach ($favorites as $key => $item) {
            if ($item['id'] == $product->id) {
                $existingProduct = $key;
                break;
            }
        }
        if ($existingProduct == null) {
            $favorites[] = [
                'id' => $product->id,
                'name' => $product->name,
                'url' => $product->url,
                'image1' => $product->image1,
                'price' => $product->price,
                'stock' => $product->stock
            ];
        }
        session()->put('favorites', $favorites);
        $totalFav = count($favorites);
        $latestCartItem = end($favorites);//ultimo item
        $sessionFavorites = session()->get('favorites', []);
        return response()->json(['status' => 'success', 'favorites' => $latestCartItem, 'sessionFavorites' => $sessionFavorites, 'totalFav' => $totalFav], 200);
    }




    public function quitToFavorite(Request $request, $productId) {
        $favorites = session()->get('favorites', []);
        //$product = null;
        foreach ($favorites as $key => $item) {
            if ($item['id'] == $productId) {
                unset($favorites[$key]);
                //$product = $favorites[$key];
                break;
            }
        }
        session()->put('favorites', $favorites);
        $totalFav = count($favorites);
        $sessionFavorites = session()->get('favorites', []);
        return response()->json(['status' => 'success', 'favorites' => $favorites, 'sessionFavorites' => $sessionFavorites, 'totalFav' => $totalFav], 200);
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
            $totalPrice += $item['price'] * $item['quantity'];
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