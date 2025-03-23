<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/user/{id}',[UserController::class,'show'])->name('showUser');
Route::get('/blog',[UserController::class,'blog'])->name('blog');