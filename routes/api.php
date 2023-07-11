<?php

use App\Http\Controllers\API\apiAuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\FoodItemController;
use App\Http\Controllers\API\ObjectItemController;
use App\Http\Controllers\API\ReviewController;
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
Route::controller(apiAuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout');
    Route::post('/refresh', 'refresh');
    Route::get('/me', 'me');

});

//test
Route::get('/test', function () {
    return response()->json([
        'status' => 'success',
        'user' => "Auth::user()",
        'authorisation' => [
            'token' => "Auth::refresh()",
            'type' => 'bearer',
        ]
    ]);;
});

//ObjectItem
Route::get('/ObjectItem', [ObjectItemController::class, 'index']);
Route::get('/ObjectItem/{id}', [ObjectItemController::class, 'show']);
Route::post('/ObjectItem', [ObjectItemController::class, 'store']);
Route::put('/ObjectItem/{id}', [ObjectItemController::class, 'update']);
Route::delete('/ObjectItem/{id}', [ObjectItemController::class, 'destroy']);
Route::get('/Objectme', [ObjectItemController::class, 'getObjectItembyme']);

//FoodItem
Route::get('/FoodItem', [FoodItemController::class, 'index']);
Route::get('/FoodItem/{id}', [FoodItemController::class, 'show']);
Route::post('/FoodItem', [FoodItemController::class, 'store']);
Route::put('/FoodItem/{id}', [FoodItemController::class, 'update']);
Route::delete('/FoodItem/{id}', [FoodItemController::class, 'destroy']);
Route::get('/Foodme', [FoodItemController::class, 'getFoodItembyme']);

//FoodItem
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{category}', [CategoryController::class, 'show']);
Route::put('/category/{category}', [CategoryController::class, 'update']);
Route::delete('/category/{category}', [CategoryController::class, 'destroy']);

//Review
Route::controller(ReviewController::class)->group(function () {
    Route::post('/review', 'store');
    Route::delete('/review/{review}', 'destroy');
});
