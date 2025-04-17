<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
      //add student
      public function addStudent(request $req){
       $student = DB::table('students')
               ->insert([
                  'name'=>$req->username,
                  'age'=>$req->userage,
                  'email'=>$req->useremail,
                  'city'=>$req->usercity
               ]);
       if($student){
         return redirect()->route('home');
       }
    }         


   // fetch all student data 
   public function allStudents(){
      $students =  DB::table('students')->simplePaginate(3);
                  // ->get();

         return view('allStudents',['data'=>$students]);
   }


// fetch single student data 
   public function singleStudent(string $id){
      $student = DB::table('students')->find($id); 
               // ->where('id',$id)
               // ->get();
   
      return view('updateStudent',['data'=>$student]);
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

// update student
  public function updateStudent(Request $req , $id){
      $student = DB::table('students')
                  ->where('id',$id)
                  ->update([
                     'name'=> $req->username,
                     'age'=> $req->userage,
                     'email'=> $req->useremail,
                     'city'=>$req->usercity
                  ]);


         if($student){
            return redirect()->route('home');
         }else{
            echo "<h1>404</h1>";
         }
  }

}
