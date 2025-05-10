<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'username'=>'required',
            'userpass'=>'required | alpha_num | min:6',
            'useremail'=>'required | email',
            'userage'=>'required | numeric',
            'usercity'=>'required'
        ]);   
        return $req->all();
    }
}
