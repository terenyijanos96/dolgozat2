<?php

use App\Http\Controllers\ProductTypeController;
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

Route::get('product_type', [ProductTypeController::class, 'index']);
Route::get('product_type/{id}', [ProductTypeController::class, 'show']);
Route::post('product_type', [ProductTypeController::class, 'store']);
Route::put('product_type/{id}', [ProductTypeController::class, 'update']);
Route::delete('product_type/{id}', [ProductTypeController::class, 'destroy']);
