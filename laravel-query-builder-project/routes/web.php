<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[UserController::class,'show'])->name('home');

Route::get('/user/{id}',[UserController::class,'singleUser'])->name('view.user');

Route::get('/add',[UserController::class,'addUser']);

Route::get('/update',[UserController::class,'updateUser']);

Route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('delete.view');

Route::get('/delete',[UserController::class,'deleteAll'])->name('deleteAll.view');

