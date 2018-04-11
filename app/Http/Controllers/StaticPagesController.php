<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        //return "你可以看到帅气的我";
        return view('static_pages/home');
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
