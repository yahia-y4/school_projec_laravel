<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;



class TeachersController extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::all();
        $classrooms = Classroom::all();
        return view('teachers' , compact('teachers','classrooms'));
    }

    public function store(Request $request){
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->specialization = $request->specialization;
        $teacher-> classroom_id  = $request-> classroom_id ;
        $teacher->save();
        return redirect("/dashboard/teachers");
    }
    public function deleteTeacher($id){
        Teacher::find($id)->delete();
        return redirect("/dashboard/teachers");

    }
    public function editTeacher(Request $request, $id){
        $teacher = Teacher::find($id);
        if(!$teacher) return redirect("/dashboard/teachers");
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->specialization = $request->specialization;
        $teacher->classroom_id = $request->classroom_id ;
        $teacher->save();
        return redirect("/dashboard/teachers");
    }
}
