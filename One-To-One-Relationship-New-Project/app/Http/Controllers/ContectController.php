<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contect;

class ContectController extends Controller
{
    public function show(){
        $contact = Contect::with('student')->get();
        return $contact; 
    }
}
