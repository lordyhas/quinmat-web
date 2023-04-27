<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


Route::prefix('/x/blog')->name('blog.')
    ->group(function () {

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

Route::get('/articles/{name}-{no}',
    function (string $name, string $no, Request $request) {
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
