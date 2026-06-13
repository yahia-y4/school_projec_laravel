<?php

namespace App\Http\Controllers;
use App\Models\Classroom;

class TeachersController extends Controller
{
    //
    public function index()
    {


        return view('teachers');
    }
}
