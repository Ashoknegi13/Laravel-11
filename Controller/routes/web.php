<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SingleController;
// Route::get('/', function () {
//     return view('welcome');
// });



Route::controller(UserController::class)->group(function(){
        Route::get('/','index')->name('home');
        Route::get('/user/{id}','show')->name('showUser');
        Route::get('/blog','blog')->name('blog');
});

Route::get('/why',SingleController::class);