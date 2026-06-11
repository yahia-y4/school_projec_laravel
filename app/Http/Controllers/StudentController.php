<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        $classroom = Classroom::all();
        return view('students', compact('students','classroom'));
    }
}
