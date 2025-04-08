<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class UserController extends Controller
{
    public function show(){
        $users = DB::table('users')->get();
        
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
}
