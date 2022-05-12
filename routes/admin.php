<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CircularController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
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


Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('admin.dashboard');
        Route::resource('circular', CircularController::class);
        Route::resource('news', NewsController::class);
        Route::resource('category', CategoryController::class);
    });


});

