<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resource('users',UserController::class);

// Route::resource('users', UserController::class)->only([
//     'index','create'
// ]);


// Route::resource('users', UserController::class)->except([
//     'destroy'
// ]);


// Route::resource('users', UserController::class)->names([
//     'create' => 'users.add',
//     'index'=> 'users.home',
//     'destroy'=>'users.delete'
// ]);

Route::resource('users.comment', UserController::class);

// Route::resource('users.comment', UserController::class)->names([
//     'create' => 'users.comment.add',
//     'index'=> 'users.comment.index',
//     'destroy'=>'users.comment.delete'
// ]);