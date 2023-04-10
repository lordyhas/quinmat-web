<?php

namespace App\Http\Controllers;

use AppConstant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UnderMaintenanceController extends Controller
{
    //

    public function index(string $lang): View
    {
        return view('comingsoon', ['app_x'=> new AppConstant(),"lang"=>$lang]);
    }
}
