<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',function(){
    return view('post');
})->name('post');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/test',function(){
    return view('test');
});