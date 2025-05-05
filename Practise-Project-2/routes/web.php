<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[StudentController::class,'showUser'])->name('home');
// Route::get('/single/{id}',[StudentController::class,'singleUser'])->name('single');