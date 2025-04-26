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
      $lacturer = DB::table('lacturers')
                  ->select('name','email','city_name','age')
                  ->join('cities','lacturers.city','=','cities.id')
                  ->where('city_name','=','Rudraprayag');

      $students = DB::table('students')
                  ->union($lacturer)
                  ->select('name','email','city_name','age')
                  ->join('cities','students.city','=','cities.id')
                  ->where('city_name','=','Srinager')
                  ->get();

      return $students;
   
     }
      

     public function whenData(){
      $var = true;
      $students = DB::table('students')
                        ->when($var, function($query){
                           $query->where('age','>',20);
                        },function($query){
                           $query->where('age','<',20);
                        })
                   // ->when(true,function($query){
                  //    $query->where('age',">",18);
                  // })
                  ->get();

         return $students;
     }

      public function chunkData(){
         $students = DB::table('students')->orderBy('id')
                     ->chunk(3,function($students){
                        echo "<div style='border:1px solid black;margin:12px   '>";
                        foreach($students as $student){
                              echo $student->name ."<br>";
                        }
                        echo "</div>";
                     });
      }
}
