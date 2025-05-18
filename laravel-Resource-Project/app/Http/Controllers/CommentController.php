<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo " this is comment index page";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                echo " add a comment create page";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // echo " add this commen ";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            echo " the comment is $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
                echo " edit this comment $id";
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
                echo " delete this comment $id";
    }
}
