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

Route::get('/doctor-sample/csv', function () {
    //data_doctor
    ///doctor-sample-data1
    $csv = Reader::createFromPath(storage_path('app/data_doctor1.csv'));
    $csv->setHeaderOffset(0);
    $records = $csv->getRecords();
    $data = array();
    foreach ($records as $record) {
        $data[] = $record;
    }
    return response()->json(["data" => $data]);

});


Route::post('/test_post', function (Request $request) {
    $data = array();
    if ($request->has('id')){
        $id = $request->get('id');
        $email = $request->get('email');
        $password = $request->get('password');

        $data = [
            'email' => $email,
            'password' => $password,
        ];
    }
    else $id = "null";

    return response()->json([
        'status' => true,
        'message' => "Message received successfully!",
        'id' => $id,
        'data' => $data,
    ]);
});

Route::get('/test_get', function () {
    return response()->json([
        'status' => true,
        'message' => "Connection work successfully!",
    ]);
});

Route::controller(DoctorController::class)->group(function () {
    Route::post('/doctor/create', 'create')->name("doctor.create");
    //Route::post('/doctor_create', 'create')->name("doctor.create");
    Route::post('/doctor/save', 'store')->name("doctor.store");
    Route::get('/doctor/retrieve', 'show')->name("doctor.show");
});
