<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(StudentController::class)->group(function(){
    Route::get('/','showUser')->name('home');
    Route::get('/single/{id}','singleUser')->name('single');
    Route::post('/add','addUser')->name('add');
    Route::get('/delete/{id}','deleteUser')->name('delete');
    Route::get('/update/{id}','updateUser')->name('update');
    Route::post('/up/{id}','updateUserInDb')->name('updateUserInDb');
    
    Route::get('/newuser','addCity');
});
