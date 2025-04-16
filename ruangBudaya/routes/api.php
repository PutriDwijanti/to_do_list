<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get ('/provinsi', [WilayahController::class, 'getProvinsiApi']);
// Route::post('/login', [LoginController::class, 'login']);

Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:api')->group(function(){
    Route::post('logout',[LoginController::class, 'logout']);
});