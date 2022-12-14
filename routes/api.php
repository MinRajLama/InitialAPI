<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
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

Route::resource('/category', CategoryController::class);
Route::resource('/product', ProductController::class);
Route::post('product/{id}', [ProductController::class, 'update']);

Route::get('/category/products/{id}', [CategoryController::class, 'getCategoryWithProducts']);
Route::get('/category/all/products', [CategoryController::class, 'getAllCategoryWithProducts']);
