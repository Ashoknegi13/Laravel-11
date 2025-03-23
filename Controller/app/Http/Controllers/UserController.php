<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(string $id){
        return view('users',['userId'=> $id]);
    }

    public function blog(){
        return view('blog');
    }
}
