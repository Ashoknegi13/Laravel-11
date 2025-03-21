<?php

use Illuminate\Support\Facades\Route;

function getuser(){
    return  [
        1=> ['name'=>'ashok negi','age'=>21,'city'=>'uttarahand'],
        2=> ['name'=>'karan panwar','age'=>24,'city'=>'augustmuni'],
        3=> ['name'=>'ayush khanduri','age'=>28,'city'=>'rudraprayag']
     ];
}



Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function(){
        $users = getuser();

    return view('users',['user'=>$users]); 
    });



    // return view('users',[
    //     'user'=>$name , 
    //     'city'=>'rudraprayag',
    //     'age' =>'<script>alert(22)</script>',
    //     'address'=> 'gwar thappli'
    // ]);



    Route::get('/user/{id}',function($id){
        $users =  getuser();
        abort_if(!isset($users[$id]), 404);

        $user = $users[$id];
        return view('user-profile',['id'=>$user]);
    })->name('view.user.profile');