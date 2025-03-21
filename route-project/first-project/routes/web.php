<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/post/{id}/comment/{comment}",function(string $id , string $com){
    if($id){
        return "<h1>Post id  id : $id and post comment is : $com";
    }else{
        return "<h1>No post id and comment found../.....</h1>";
    }
})->where('id','[0-9]+')->whereAlpha('comment');



// is is use for regular expression 
// Route::get("/post/{commentname}",function(string $comment) {
//        return "<h1>Post comment is a :$comment</h1>";
//     })->where('commentname','[a-zA-Z]+');
       // })->where('commentname','[0-9]+');


// user for predefined value 
// Route::get("/post/{commentname}",function(string $comment) {
//    return "<h1>Post comment is a :$comment</h1>";
// })->whereIn('commentname',['song','music','movi']);




// user for both alpha and numeric
// Route::get("/post/{commentname}",function(string $comment) {
//    return "<h1>Post comment is a :$comment</h1>";
// })->whereAlphaNumeric('commentname');





// it is validate for only Alpha 
// Route::get("/post/{commentname}",function(string $comment) {
//    return "<h1>Post comment is a :$comment</h1>";
// })->whereAlpha('commentname');





// this is for only validate numeric numbers 
// Route::get("/post/{id}",function (string $id){
//     return "<h1>Post id is  a : $id</h1>";
// })->whereNumber('id');




// Route::get('/home/{id?}/comment/{commentid?}',function (string $id = null , string $comment = null){
//         if($id){
//             return "user id is : $id<h2>$comment</h2>";
//         }else{
//             return "<h1>No id found</h1>";
//         } 
// });

 

// Route::get('/co',function (){
//     return view('contect');
// });

// Route::get('/home', function (){
//     return "<h>This is home page</h1>";
// });

// Route::view('/home','home');