<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
     public function showStudents(){
        $students = DB::table('students')
                     // ->select(DB::raw('count(*) as Total_students'))  return a total data 
                   
                     ->select('students.*','cities.city_name')
                    ->join('cities','students.city','=','cities.id') 
                    ->get();    
                    
                    // ->where('students.name','LIKE','a%')
                    // ->count();     don't use get() when we use count()
                    // ->where('cities.city_name','=','srinager')
                    // ->where('students.email','=','negiashok132@gmail.com')

                    

        return $students;

        // return view('welcome',compact('students'));
     }
}
