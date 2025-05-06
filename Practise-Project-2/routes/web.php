<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[StudentController::class,'showUser'])->name('home');
Route::get('/single/{id}',[StudentController::class,'singleUser'])->name('single');
Route::post('/add',[StudentController::class,'addUser'])->name('add');
Route::get('/delete/{id}',[StudentController::class,'deleteUser'])->name('delete');
Route::view('/newuser','addUser');