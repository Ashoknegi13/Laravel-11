<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::controller(UserController::class)->group(function(){
                Route::get('/','show')->name('home');
                Route::get('/user/{id}','singleUser')->name('view.user');
                Route::post('/add','addUser')->name('addUser');
                Route::get('/update/{id}','getUser')->name('getUser');
                Route::get('/delete/{id}','deleteUser')->name('delete.view');
                Route::get('/delete','deleteAll')->name('deleteAll.view');
                Route::post('/updateUser','updateUser')->name('updateUser');
});
Route::view('newuser','/addUser');


