<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[StudentController::class,'showStudents'])->name('home');
Route::get('/stu/{id}',[StudentController::class,'singleStudent'])->name('view.student');