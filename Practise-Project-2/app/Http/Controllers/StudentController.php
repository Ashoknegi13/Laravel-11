<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
class StudentController extends Controller
{
  public function showUser(){
    $students = DB::table('students')
                  ->select('students.id','students.name','students.email','students.age','cities.city_name')
                ->join('cities','students.city','=','cities.id')
                ->get();
                // return $students;
    return view('welcome',['data'=>$students]);
  } 

  public function singleUser(string $id){
    $students = DB::table('students')
                 ->join('cities','students.city','=','cities.id')
                 ->select('students.id','students.name','students.email','students.age','cities.city_name')
                ->where('students.id',$id)
                ->get();
                // return $students;
                return view('singleUser',['data'=>$students]);
  }

  public function addUser(Request $req){
      $students = DB::table('students')
                  ->insert([
                    'name'=>$req->username,
                    'email'=>$req->useremail,
                    'age'=>$req->userage,
                    'city'=>$req->usercity
                  ]);

            if($students){
              return  redirect()->route('home');
            }else{
              return "<h1>Can't insert data....</h1>";
            }
  }


  public function deleteUser(string $id){
    $student = DB::table('students')->where('id',$id)->delete();

    if($student){
      return redirect()->route('home');
    }else{
      echo " <h1>Can't delete the Records...</h1>";
    }
    // return view('deleteUser');

  }

  public function updateUser(string $id){
      $student = DB::table('students')->find($id);
      $c = DB::table('cities')->get ();
            

                  return view('updateUser',['data'=>$student,'cid'=>collect($c)]);
                // return $student;
  } 

  public function updateUserInDb(request $req , $id){
    $student = DB::table('students')
                ->where('id',$id)
                ->update([
                    'name'=>$req->username,
                    'email'=>$req->useremail,
                    'age'=>$req->userage,
                    'city'=>$req->usercity
                ]);

                if($student){
                  return redirect()->route('home');
                }else{
                  return "<script>alert('Failed.....!..')</script>";
                }
  } 

  public function addCity(){
      $student = DB::table('cities')->get();
      return view('/addUser',['cid'=>$student]);

  }

}
