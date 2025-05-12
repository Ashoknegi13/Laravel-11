<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function addUser(UserRequest $req){
        // $req->validate([
        //     'username'=>'required',
        //     'userpass'=>'required | alpha_num | min:6',
        //     'useremail'=>'email | required'
        // ],[
        //     'username.required'=>'Please Fill the name....'
        // ]);
         
        
        return $req->all();
    }
}
