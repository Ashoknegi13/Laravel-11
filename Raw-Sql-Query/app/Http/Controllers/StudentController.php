<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
        public function showStudents(){
             $student = DB::table('students')
                        ->selectRaw('name,age')
                        // ->whereRaw('age > ? and name like ? ',[18,'a%'])
                        ->orderByRaw('age DESC')
                        ->get();
                return $student;
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
                // $student = DB::unprepared("delete from students where id = 1");
                // return $student;        
   
                //     $students = DB::select("select name,age from students");
        //      return $students;
   
        // foreach($students as $student){
        //         echo $student->name."<br>";
        // }
        }

        public function updateStudent(){
                $students = DB::update('update students set name="ankiii" where id = 2');

                if($students){
                        echo " Successfully update";
                }else{
                        echo " Failed to update";
                }
        
        }

        public function addStudent(){
                $student = DB::insert('insert into students(name,email,age,city) 
                                Values(?,?,?,?)',['yahooo','yahoo@gmail.com',99,2]);
                                return students;
        }

        public function deleteStudent(){
                $student = DB::delete("delete from  students where id = ? ",[8]);
                return $student;
                }
}
