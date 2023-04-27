<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;




class HomeController extends Controller
{
    //

    public function index(): RedirectResponse | View
    {
        return view('home');
    }

    public function preview(string $lang,string $no): View
    {
        if($no!=='001') abort(404);
        return view('section.preview');
    }






}
