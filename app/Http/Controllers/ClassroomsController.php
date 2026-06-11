<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    //

    public function index()
    {
        $classroom = Classroom::all();
        return view('classrooms', compact('classroom'));
    }

    public function store(Request $req)
    {
    $req->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'capacity' => 'required|integer|min:1',
    ]);

    $classRoom = new Classroom;
    $classRoom->name = $req->name;
    $classRoom->description = $req->description;
    $classRoom->capacity = $req->capacity;
    $classRoom->save();

    return redirect('/dashboard/classrooms');

    }
}
