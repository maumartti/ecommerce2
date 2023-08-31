<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\ProfileInstagram;

use Dymantic\InstagramFeed\InstagramFeed;
use Dymantic\InstagramFeed\Profile;

class WebController extends Controller
{

    public function index()
    {
        $web = Web::find(1);

        $profile = \Dymantic\InstagramFeed\Profile::for('importadora_tatar');
        //$feed = [];
        //$feed = $profile->refreshFeed(8);
        $feed = \Dymantic\InstagramFeed\InstagramFeed::for('importadora_tatar');
    //dd($feed);
        return view('welcome')->with('web',$web)->with('feed',$feed);
    }

    
}
