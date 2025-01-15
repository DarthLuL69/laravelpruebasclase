<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DrinkController;
use App\Models\Shop;
use App\Models\Drink;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/shop/{id}', [ShopController::class, 'show']);
Route::get('/drink/{id}/shop', [DrinkController::class, 'showShop']);
Route::get('/shop/{id}/drinks', [ShopController::class, 'showDrinks']);
Route::post('/shop', [ShopController::class, 'store']);
Route::post('/drink', [DrinkController::class, 'store']);
