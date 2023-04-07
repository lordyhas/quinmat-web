<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class RouteName {
    static string $home_index = "home.index";
    static string $blog_home = "blog.index";
    static string $blog_compose = "blog.index";

}

//if(true) exit();

Route::redirect("/", "/home");


/*Route::get('/{home}', function (string $home) {
    if ($home === 'home') {
        return to_route("home.index",);
    }
    return view('home');
});*/

Route::prefix('/home')->name('home.')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('index');
});

Route::get('/compo', function () {
    return view('components');
});

Route::get('/hotfix', function () {
    return view('comingsoon');
});


Route::prefix('/home/blog')->name('blog.')->group(function () {

    Route::get('/', function (Request $request) {
        return [
            "id" => $request->input("id", "0"),
            "title" => "Nom titre",
            "contents" => "Bonjour contents",
        ];
    })->name("index");

    Route::get('/{title}-{id}', function (string $title, string $id) {
        return [
            "id" => $id,
            "title" => $title,
            "contents" => "Bonjour contents",
        ];
    })->where([
        'id' => '[0-9]+',
        'title' => '[a-z0-9\-]+',
    ])->name("compose ");

});

Route::get('/articles/{name}-{no}', function (string $name, string $no, Request $request) {
    return [
        "id" => $request->input("id", "0"),
        "product_name" => $name,
        "pno" => $no,
        "contents" => "Bonjour contents",
    ];
})->where([
    'no' => '[0-9]+',
    'name' => '[a-z0-9\-]+',
])->name("ventes");

