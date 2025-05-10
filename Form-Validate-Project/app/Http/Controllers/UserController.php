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
            'userage'=>'required | numeric | min:18',
            'usercity'=>'required'
        ],[
            'username.required'=>'User Name Required',
            'userpass.required'=>'Password Is Required',
            'userpass.alpha_num'=>'only number and Alphabate allowed',
            'userpass.min'=>'enter min 6 digit',
            'userage.min'=>'min age required 18 ',
            'useremail.required'=>'Email Address Must Must  Required',
            'useremail.email'=>'Enter correct email format',
            'userage.required'=> 'age is required',
            'userage.numeric'=>'Enter only numerci value',
            'usercity.required'=>'city is required'

        ]);   
        return $req->all();
    }
}
