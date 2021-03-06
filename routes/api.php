<?php

use App\Http\Controllers\API\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::ApiResource('patients', 'App\Http\Controllers\API\PatientController');
Route::ApiResource('doctors', 'App\Http\Controllers\API\DoctorController');
Route::ApiResource('records', 'App\Http\Controllers\API\RecordController');
