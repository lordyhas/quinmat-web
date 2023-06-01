<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\Csv\Reader;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/csv', function () {

    $csv = Reader::createFromPath(storage_path('app/data_doctor.csv'));
    $csv->setHeaderOffset(0);
    $records = $csv->getRecords();
    $data = array();
    foreach ($records as $record) {
        // Do something with the record
        // You can access the fields using the named keys
        $data[] = $record;
    }

    return response()->json($data) ; //iterator_to_array($records);

});


Route::post('/test_post', function (Request $request) {

    if($request->has('host'))
        $id = $request->get('host');
    else $id = "null";

    return response()->json([[
        'status' => true,
        'message' => "Product Created successfully!",
        'host' => $id,
    ], 200]);

});

Route::controller(DoctorController::class)->group(function () {
    Route::get('/doctor_create', 'create')->name("doctor.create");
    //Route::post('/doctor_create', 'create')->name("doctor.create");
    Route::post('/doctor_save', 'store')->name("doctor.store");
    Route::get('/doctor_get', 'show')->name("doctor.show");
});
