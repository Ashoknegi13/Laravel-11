<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function showBook(){
        $books = Book::with('student')->get();
        return $books;
    }
}
