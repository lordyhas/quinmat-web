<?php

use App\Http\Controllers\UnderMaintenanceController;
use Illuminate\Support\Facades\Route;

Route::get('/compo', function () {
    return view('components');
});

Route::get('/compox', function () {
    return view('components');
});

Route::get('/hotfix', [UnderMaintenanceController::class, 'index']);
