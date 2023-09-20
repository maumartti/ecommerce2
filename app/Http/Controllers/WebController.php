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
        $feed = $profile->refreshFeed(8);
        //$feed = \Dymantic\InstagramFeed\InstagramFeed::for('importadora_tatar');
        //dd($feed);
        $products = Product::all();
        $productsNew = Product::where('created_at', '>=', Carbon::now()->subDays(7))->get();
        $productsDescount = Product::whereNotNull('descount')->get();
        $productsLikes = Product::orderBy('likes', 'desc')->get();
        $productsViews = Product::whereNotNull('views')->get();
        $productsPromo = Product::whereNotNull('promo')->get();
        $categories = Category::with('subcategories')->get();
        $subcategories = SubCategory::with('category')->get();
        return view('home')->with('web',$web)->with('feed',$feed)->with('products',$products)->with('productsPromo',$productsPromo)->with('productsViews',$productsViews)->with('productsLikes',$productsLikes)->with('productsNew',$productsNew)->with('productsDescount',$productsDescount)->with('categories',$categories)->with('subcategories',$subcategories);
    }

    public function item(Request $request, $url){
        $web = Web::find(1);
        $product = Product::where('url', $url)->with('category')->first();
        return view('product')->with('web',$web)->with('product',$product);
    }
}
