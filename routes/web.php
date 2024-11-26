<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Manage\CategoryController;
use App\Http\Controllers\Manage\GalleryPortfolioController;
use App\Http\Controllers\Manage\OurTeamController;
use App\Http\Controllers\Manage\PortfolioController;
use App\Http\Controllers\Manage\SosmedController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::get('about',[FrontController::class, 'about']);
Route::get('portfolio',[FrontController::class, 'portfolio']);
Route::view('services','services');
Route::view('shop','shop');
Route::view('contact','contact');

Route::prefix('admin')->name('admin.')->group(function (){

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::resource('our_team', OurTeamController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('gallery_portfolio', GalleryPortfolioController::class);
});

