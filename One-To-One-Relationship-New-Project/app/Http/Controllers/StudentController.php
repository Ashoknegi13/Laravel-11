<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student  =  Student::where('gender','female')
                                 ->withWhereHas('contect',function($query){
                                        $query->where('city','Banglore');
                                })->with('contect')->get();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::create([
            'name'=>'Abhay',
            'age'=>28,
            'gender'=>"Female"
        ]); 

        $student->contect()->create([
            'email'=>'abay@gmail.com',
            'phone'=>'952239584',
            'address'=>'### Luhari ',
            'city'=>'Bhihar'
        ]);
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
