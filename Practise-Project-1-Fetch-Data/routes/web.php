<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('allUsers');
// });



Route::get('/',[StudentController::class,'allStudents'])->name('home');

Route::get('/single/{id}',[StudentController::class,'singleStudent'])->name('singleStudent');

Route::get('/delete/{id}',[StudentController::class,'deleteStudent'])->name('deleteStudent');

Route::get('/deleteAll',[StudentController::class,'deleteAll'])->name('deleteAll');

Route::post('/add',[StudentController::class,'addStudent'])->name('addstudent');

Route::post('/updateStudent/{id}',[StudentController::class,'updateStudent'])->name('updateStudent');

Route::view('addStudent','/addStudent');