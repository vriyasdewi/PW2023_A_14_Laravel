<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

 Route::get('/menus',[App\Http\Controllers\Api\MenuController::class,'index']);
    Route::post('/menus',[App\Http\Controllers\Api\MenuController::class,'store']);
    Route::get('/menus/{id}',[App\Http\Controllers\Api\MenuController::class,'show']);
    Route::put('/menus/{id}',[App\Http\Controllers\Api\MenuController::class,'update']);
    Route::delete('/menus/{id}',[App\Http\Controllers\Api\MenuController::class,'destroy']);

    Route::get('/orders',[App\Http\Controllers\Api\OrderController::class,'index']);
    Route::get('/ordersByUser/{id_user}',[App\Http\Controllers\Api\OrderController::class,'indexByUser']);
    Route::post('/orders',[App\Http\Controllers\Api\OrderController::class,'store']);
    Route::get('/orders/{id}',[App\Http\Controllers\Api\OrderController::class,'show']);
    Route::put('/orders/{id}',[App\Http\Controllers\Api\OrderController::class,'update']);
    Route::delete('/orders/{id}',[App\Http\Controllers\Api\OrderController::class,'destroy']);

    Route::get('/users',[App\Http\Controllers\Api\UserController::class,'index']);
    Route::get('/users/{id}',[App\Http\Controllers\Api\UserController::class,'show']);
