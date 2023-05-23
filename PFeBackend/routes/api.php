<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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
Route::get('list',[BookController::class,'list']);
Route::get('search/{key}',[BookController::class,'search']);
Route::get('category/{key}',[BookController::class,'categoryFound']);
Route::post('filtrer/{key}',[BookController::class,'filterByPrice']);
Route::post('grouper/{key}',[BookController::class,'groupByCategory']);
Route::post('format/{key}',[BookController::class,'format']);
Route::get('findBook/{id}',[BookController::class,'findBook']);
Route::get('avis/{book}',[BookController::class,'avisBook']);
Route::get('categoryBook/{key}',[BookController::class,'BookCatFind']);
Route::get('format/{key}',[BookController::class,'format']);

// Route::get('bookSearch/{book}',[BookController::class,'BookCatFind']);
Route::post('signup',[UserController::class,'signup']);
Route::post('login',[UserController::class,'login']);









