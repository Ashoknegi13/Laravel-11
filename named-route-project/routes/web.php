<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('page')->group(function(){
    Route::get('/post',function(){
        return "<h1>POST PAGE Group </h1>";
    });

    Route::get('/gallery',function(){
        return "<h1>Gallery page Group </h1>";
    });

    Route::get('/gallery/pic',function(){
        return "<h1>Gallery pic 1 image page Group </h1>";
    });
});  

Route::fallback(function(){
 return " <h1>...\......Page not found .../......</h1>";
});



// named route 
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get("/post",function(){
//     return view('post');
// })->name('mypost');

// Route::get("/test",function(){
//  return view('about');
// })->name('about-us');


// move old route to new route 
// Route::redirect('/about','/test', 301);