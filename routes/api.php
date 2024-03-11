<?php

use App\Http\Controllers\Api\DishController as ApiDishController;
use App\Http\Controllers\Api\RestaurantController as ApiRestaurantController;
use App\Http\Controllers\Api\TypeController as ApiTypeController;
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

Route::get('/restaurants', [ApiRestaurantController::class, 'index'])->name('api.restaurant.index');
Route::get('/types', [ApiTypeController::class, 'index'])->name('api.type.index');
Route::get('/dishes', [ApiDishController::class, 'index'])->name('api.dish.index');
