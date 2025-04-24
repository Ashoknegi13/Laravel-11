<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[StudentController::class,'showStudents']);
Route::get('/union',[StudentController::class,'unionData']);
Route::get('/when',[StudentController::class,'whenData']);

