<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   // fetch all student data 
   public function allStudents(){
      $students =  DB::table('students')
                  ->get();

         return view('allStudents',['data'=>$students]);
   }


// fetch single student data 
   public function singleStudent(string $id){
      $student = DB::table('students')
               ->where('id',$id)
               ->get();
   
      return view('singleStudent',['data'=>$student]);
     }


// delete the student
  public function deleteStudent(string $id){
   
      $student = DB::table('students')
                  ->where('id',$id)
                  ->delete();
      if($student){
         return redirect()->route('home');
      }

  }   


  // delete all data
    public function deleteAll(){
      $students = DB::table('students')
               ->truncate();

      if($students===null){
         return redirect()->route('home');
      }else{
         echo "<h1>404</h1>";
      }
    }
}
