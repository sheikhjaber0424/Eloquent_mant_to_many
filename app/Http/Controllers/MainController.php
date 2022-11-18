<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function one_to_one_index()
    {
        $student_data = Student::with('department')->get();
        // return $student_data;
        return view('oneToOne.index', compact('student_data'));
    }
    public function create_one()
    {
        return view('oneToOne.create');
    }
    public function store_one(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
        ]);
        Department::create([
            'dept_name' => $request->dept_name,
            'student_id' => $student->id,
        ]);

        return redirect('/one_to_one_index');
    }

    public function edit_one(Student $student)
    {

        return view('oneToOne.edit', compact('student'));
    }
    public function update_one(Request $request, Student $student)
    {
        // return $student;
        $student->update([
            'name' => $request->name
        ]);
        $student->department->update([
            'dept_name' => $request->dept_name
        ]);


        return redirect('/one_to_one_index');
    }
    public function delete_one(Student $student)
    {

        $student->delete();
        return redirect('/one_to_one_index');
    }
}