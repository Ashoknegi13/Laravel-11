<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        $user =  DB::table('students')->get();
        return  $user;
    }
}
