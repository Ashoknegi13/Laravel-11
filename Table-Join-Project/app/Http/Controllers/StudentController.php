<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
     public function showStudents(){
        $students = DB::table('students')
                    ->join('cities','students.city','=','cities.id')
                    ->select(DB::raw('count(*) as Total_students'),'cities.city_name')
                     ->groupBy('city_name')
                     ->havingBetween('Total_students',[1,2])
                     // ->having('Total_students','>', 1 )
                     // ->having('cities.city_name','=','srinager')


                  //   ->where('cities.city_name','=','srinager') 
                    ->get();    
                    
                    // ->where('students.name','LIKE','a%')
                    // ->count();     don't use get() when we use count()
                    // ->where('cities.city_name','=','srinager')
                    // ->where('students.email','=','negiashok132@gmail.com')

                    

        return $students;

        // return view('welcome',compact('students'));
     }

     public function unionData(){
      $lacturer = DB::table('lacturers');

      $students = DB::table('students')
                  ->union($lacturer)
                  ->get();

      return $students;
   
     }
      
}
