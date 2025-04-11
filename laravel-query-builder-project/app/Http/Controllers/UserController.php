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
                             ->upsert(
                              [
                                  'name'=>'sonuuuu Bisht',
                                     'email'=>'devendre@gmail.com',
                                    'age'=>21 ,
                                   'city'=>'pabo' 
                             ],
                             ['email'],
                             ['city']
                    );

        dump($user);
        if($user){
            echo "<h1>Data Successfullyy Addd</h1> <br> <a href=".route('home') .">Home</a>";
        }else{
            echo "<h1>Data Failed</h1> <br> <a href=".route('home') .">Home</a>";
        }
    }
}
