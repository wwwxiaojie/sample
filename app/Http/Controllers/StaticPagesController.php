<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static_pages/home', compact('feed_items'));
    }

    public function about()
    {
        //return "关于哥只是个传说";
        return view('static_pages/about');
    }

    public function help(){
        //return "需要哥帮忙的尽管说";
        return  view('static_pages/help');
    }


}
