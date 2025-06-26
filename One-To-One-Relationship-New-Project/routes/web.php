<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContectController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/student', StudentController::class);
Route::get('/contect',[ContectController::class,'show']);