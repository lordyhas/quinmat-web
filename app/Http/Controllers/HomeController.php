<?php

namespace App\Http\Controllers;

use AppConstant;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(string $lang): RedirectResponse | View
    {
        if(!str_contains($lang,"fr")){
            return Redirect::route("home.index",["lang"=>"fr"]);
        }
        return view('home',['app_x'=> new AppConstant(),"lang"=>$lang]);
    }

    public function prod(string $lang): View
    {
        return view('section.products', ['app_x'=> new AppConstant(),"lang"=>$lang]);
    }

    public function nws(string $lang): View
    {
        return view('section.news', ['app_x'=> new AppConstant(),"lang"=>$lang]);
    }
}
