<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 

class BookController extends Controller
{
    public function showBook(){
        // $books = Book::WhereHas('student',function($query){
        //                            $query->where('name','ashok');
        //                    })->with(['student' => function($query){
        //                         $query->select('id','name','Age');
        //                    }])->select(['book','student_id'])->get();
      
      
      $books = Book::select(['book','student_id'])->withWhereHas('student',function($query){
            return  $query->select(['id','name'])->where('name','ashok');
      })->get();
      
        return $books;  

                //     foreach($books as $book){
                //         echo "<div style='border:1px solid black;margin-bottom:10px '>
                //                     <h1>$book->book</h1>
                //                     <span>$book->book_details</span>
                //                     <h3>{$book->student->name}</h3>
                //                     <h3>{$book->student->Age}</h3>
                //              </div>";
                //     }
    }
}
