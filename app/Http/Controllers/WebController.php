<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;

class WebController extends Controller
{

    public function index()
    {
        $web = Web::find(1);
        return view('welcome')->with('web',$web);
    }

    
}
