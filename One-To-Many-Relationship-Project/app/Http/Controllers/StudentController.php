<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Book;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
    //         $student = Student::withWhereHas('book',function($query){
    //                return $query->where('student_id',1);
    //         })->get();
      
        //    $student = Student::has('book','>=',1)
        //     ->with('book')->get();

            //  $student = Student::doesntHave('book')
            // ->with('book')->get();
     
// $student = Student::get();

$student = Student::with('book')->get();

                return $student;   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = new Book([
            'book' => "Ashookkkkk new course ",
            'book_details' => "this is new Asjhokkk coursee"
        ]);

        $stu = Student::find(1);
        $stu->book()->save($book);
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
