<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'home'])->name('home');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about',[PagesController::class, 'about'])->name('about');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
Route::get('/dashboard',[PagesController::class, 'dashboard'])->name('dashboard');
