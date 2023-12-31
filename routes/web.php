<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectRoleController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminCategoryBookController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\UserBookController;
use App\Http\Controllers\BookExportController;
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

Route::get('/book/export', [BookExportController::class, 'export']);
Route::get('/bookUser/export', [BookExportController::class, 'exportUser']);

Route::group(['middleware' => ['role:admin']], function() {
    
    Route::get('/back-admin/dashboard', [AdminDashboardController::class, 'index']);
    
    Route::get('back-admin/category', [AdminCategoryBookController::class, 'index']);
    Route::post('back-admin/category/new', [AdminCategoryBookController::class, 'store']);
    Route::post('back-admin/category/edit/{category}', [AdminCategoryBookController::class, 'edit']);
    Route::put('back-admin/category/update/{category}', [AdminCategoryBookController::class, 'update']);
    Route::delete('back-admin/category/destroy/{category}', [AdminCategoryBookController::class, 'destroy']);
    
    Route::get('back-admin/book', [AdminBookController::class, 'index']);
    Route::get('back-admin/book/add', [AdminBookController::class, 'add']);
    Route::post('back-admin/book/new', [AdminBookController::class, 'store']);
    Route::post('back-admin/book/edit/{book}', [AdminBookController::class, 'edit']);
    Route::put('back-admin/book/update/{book}', [AdminBookController::class, 'update']);
    Route::delete('back-admin/book/destroy/{book}', [AdminBookController::class, 'destroy']);
    
});

Route::group(['middleware' => ['role:user']], function() {

    Route::get('/back-user/dashboard', [UserDashboardController::class, 'index']);
    Route::get('back-user/book', [UserBookController::class, 'index']);
    Route::get('back-user/bookUser', [UserBookController::class, 'indexUser']);
    Route::get('back-user/bookUser/add', [UserBookController::class, 'add']);
    Route::post('back-user/book/new', [UserBookController::class, 'store']);
    Route::post('back-user/book/edit/{book}', [UserBookController::class, 'edit']);
    Route::put('back-user/book/update/{book}', [UserBookController::class, 'update']);
    Route::delete('back-user/book/destroy/{book}', [UserBookController::class, 'destroy']);

});

Route::get('/documentation-api', function () {
    return view('admin.pages.documentation.api');
});

require __DIR__.'/auth.php';
