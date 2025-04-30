<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'username'=>'required',
            'useremail'=>'required | email',
            'userage'=>'required',
            'usercity'=>'required'
        ]);   
        return $req->all();
    }
}
