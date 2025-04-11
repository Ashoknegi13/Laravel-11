<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class UserController extends Controller
{
    public function show(){
        $users = DB::table('users')
                    // ->where('name','LIKE','m%')
                    // ->where('age','>',18)
                    ->get();
       
                    // return $users;
        return view('alluser',['data'=>$users]);
        

    // foreach($users as $user){
    //     echo $user->name . "<br>";
    // }
        
        // return $users;
    //  dd($users);  //  debug information it just for testing purpose if we don't want to return data so we can use this
    }

    public function singleUser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        // return $user;
        return view('singleUser',['data'=>$user]);
    }

    public function addUser(){
        // $user =  DB::table('users')->insertOrIgnore(
       $user =  DB::table('users')
                             ->insertGetId(
                              [
                                  'name'=>'priti Bisht',
                                     'email'=>'priti@gmail.com',
                                    'age'=>25,
                                   'city'=>'chwith' 
                             ] 
                    );

                 return $user;
        // dump($user);
        // if($user){
        //     echo "<h1>Data Successfullyy Addd</h1> <br> <a href=".route('home') .">Home</a>";
        // }else{
        //     echo "<h1>Data Failed</h1> <br> <a href=".route('home') .">Home</a>";
        // }
    }

    public function updateUser(){
      $user = DB::table('users')
                ->updateOrInsert(
                        [
                            'name'=>'asho',
                            'email'=>'negiashok13@gmail.com',
                            // 'age'=>21,
                             'city'=>'ratuda'
                        ],
                        [
                            'age'=>99
                        ]   
                );
      
      
        // $user = DB::table('users')
        //             ->where('id',1)
        //             ->update([
        //                 'city'=>'pabo',
        //                 'age'=>19
        //             ]);
        //     if($user){
        //         echo "<h1>Data Successfully Update...</h1>";
        //     }else{
        //         echo "<h1>Please Enter Correct Id or Data.../....</h1>";
        //      }        
        }



}
