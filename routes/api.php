<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoryBook', [App\Http\Controllers\API\APIController::class, 'categoryBook']);
Route::get('/book', [App\Http\Controllers\API\APIController::class, 'book']);
Route::get('/book/{user_id}', [App\Http\Controllers\API\APIController::class, 'bookUser']);