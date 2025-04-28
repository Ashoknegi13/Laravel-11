<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[StudentController::class,'showStudents']);

Route::get('/update',[StudentController::class,'updateStudent']);

Route::get('/add',[StudentController::class,'addStudent']);

Route::get('/delete',[StudentController::class,'deleteStudent']);