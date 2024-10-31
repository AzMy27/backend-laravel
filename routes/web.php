<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route::get('/', function () {
//     return view('home');
// });
// Route::view('/','home');
// Route::get('/', fn() => view('home'));
Route::get('/', [Controllers\ApiController::class,'index']);
Route::get('/about', [Controllers\AboutController::class,'about']);
Route::get('/contact', fn() => view('pages.contact'));
Route::get('/gallery', fn() => view('pages.gallery'));
// Route::get('/', fn() => view('home'))->name('home');



