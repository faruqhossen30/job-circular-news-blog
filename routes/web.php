<?php

use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\SinglecircularController;
use App\Http\Controllers\Frontend\SinglenewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;



Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');

Auth::routes(['register' => false]);

Route::get('circular/{slug}',[SinglecircularController::class,'singlecircular'])->name('singlecircular');
Route::get('news/{slug}',[SinglenewsController::class,'singlenews'])->name('singlenews');
Route::get('category/{slug}',[CategoryController::class,'category'])->name('category');
Route::get('all-news',[CategoryController::class,'latestNews'])->name('latestNews');

Route::get('/search',[SearchController::class,'search'])->name('search');
