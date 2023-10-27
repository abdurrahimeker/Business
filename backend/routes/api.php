<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Users;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;

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

Route::post('/add/users', [UserController::class , 'create']);
Route::post('/add/sellers', [SellerController::class , 'create']);
Route::post('/add/product', [ProductController::class , 'create']);
Route::get('/get/users', [UserController::class , 'get']);
Route::get('/get/sellers', [SellerController::class , 'get']);
Route::get('/get/product', [ProductController::class , 'get']);
Route::get('/get/products', [ProductController::class , 'gets']);
