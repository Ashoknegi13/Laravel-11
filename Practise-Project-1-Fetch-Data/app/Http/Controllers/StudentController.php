<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){
        $students = DB::table('students')->get();
        // dd($students);
        return view('allStudents',['data'=>$students]);
    }

    public function singleStudent(string $id){
        $student = DB::table('students')->where('id',$id)->get();
        return view('singlestudent',['data'=>$student]);
    }
}
