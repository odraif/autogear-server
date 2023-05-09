<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Brandscontroller;
use App\Http\Controllers\CategoryController;

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
// cars route
Route::post("/store/car", [CarsController::class,'store']);
Route::get("/index/cars",[CarsController::class,'index']);
Route::get("/show/car/{id}",[CarsController::class,'show']);
Route::post('/edit/car/{id}',[CarsController::class,'edit']);
Route::post('/delete/car/{id}',[CarsController::class,'destroy']);
//brands route
Route::post("/store/brand", [Brandscontroller::class,'store']);
Route::get("/index/brand", [Brandscontroller::class,'index']);
//category route
Route::get("/index/category", [CategoryController::class,'index']);
//user
Route::post("/store/user", [UserController::class,'store']);
Route::post("/auth/user", [UserController::class,'auth']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});