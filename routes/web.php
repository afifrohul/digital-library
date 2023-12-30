<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectRoleController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminCategoryBookController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\UserDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/redirect-role', [RedirectRoleController::class, 'index']);

Route::get('/back-admin/dashboard', [AdminDashboardController::class, 'index']);

Route::get('back-admin/category', [AdminCategoryBookController::class, 'index']);
Route::post('back-admin/category/new', [AdminCategoryBookController::class, 'store']);
Route::post('back-admin/category/edit/{category}', [AdminCategoryBookController::class, 'edit']);
Route::put('back-admin/category/update/{category}', [AdminCategoryBookController::class, 'update']);
Route::delete('back-admin/category/destroy/{category}', [AdminCategoryBookController::class, 'destroy']);

Route::get('back-admin/book', [AdminBookController::class, 'index']);
Route::post('back-admin/book/new', [AdminBookController::class, 'store']);
Route::post('back-admin/book/edit/{book}', [AdminBookController::class, 'edit']);
Route::put('back-admin/book/update/{book}', [AdminBookController::class, 'update']);
Route::delete('back-admin/book/destroy/{book}', [AdminBookController::class, 'destroy']);


Route::get('/back-user/dashboard', [UserDashboardController::class, 'index']);


require __DIR__.'/auth.php';
