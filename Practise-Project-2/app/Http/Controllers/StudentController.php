<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
class StudentController extends Controller
{
  public function showUser(){
    $students = DB::table('students')->get();
    return view('welcome',['data'=>$students]);
  }
}
