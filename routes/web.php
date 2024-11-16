<?php

use App\Http\Controllers\Manage\GalleryPortfolioController;
use App\Http\Controllers\Manage\OurTeamController;
use App\Http\Controllers\Manage\PortfolioController;
use App\Http\Controllers\Manage\SosmedController;
use App\Models\Gallery_Portfolio;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','home');
Route::view('about','about');
Route::view('portfolio','portfolio');
Route::view('services','services');
Route::view('shop','shop');
Route::view('contact','contact');

Route::prefix('admin')->name('admin.')->group(function (){

    Route::view('/dashboard', 'dashboard')->name('dashboard');
    
    Route::resource('our_team', OurTeamController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('gallery_portfolio', GalleryPortfolioController::class);

});

