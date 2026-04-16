<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/articles', [PageController::class, 'articles'])->name('articles');
Route::get('/articles/{slug}', [PageController::class, 'articleShow'])->name('articles.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
