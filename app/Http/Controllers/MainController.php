<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Group;
use App\Models\Phone;
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









    public function one_to_many_index()
    {
        $student_data = Student::with('phones')->get();

        return view('oneToMany.index', compact('student_data'));
    }

    public function create_many()
    {
        $student = Student::all();
        return view('oneToMany.create', compact('student'));
    }

    public function store_many(Request $request)
    {

        Phone::create([
            'phone_number' => $request->phone_number,
            'student_id' => $request->student_id,
        ]);

        return redirect('/one_to_many_index');
    }


    public function edit_many(Phone $phone)
    {
        // return $phone;
        return view('oneToMany.edit', compact('phone'));
    }


    public function delete_single(Phone $phone)
    {

        $phone->delete();
        return redirect('/one_to_many_index');
    }

    public function delete_many(Student $student)
    {

        $student->delete();
        return redirect('/one_to_many_index');
    }


    public function update_many(Request $request, Phone $phone)
    {
        // return $student;

        $phone->update([
            'phone_number' => $request->phone_number
        ]);


        return redirect('/one_to_many_index');
    }





    public function many_to_many_index()
    {
        $group_data = Group::all();
        return view('manyToMany.index', compact('group_data'));
    }



    public function many_to_many_create()
    {

        return view('manyToMany.create',);
    }


    public function many_to_many_store(Request $request)
    {

        Group::create([
            'name' => $request->name,
        ]);

        return redirect('/many_to_many_index');
    }




    public function many_to_many_delete(Group $group)
    {

        $group->delete();
        return redirect('/many_to_many_index');
    }
    public function many_to_many_show(Group $group)
    {
        // $group_details = Group::find($group)->students->get();
        // return $group_details;
        return view('manyToMany.show', compact('group'));
    }

    public function add_student_form(Group $group)
    {
        $students = Student::all();
        return view('manyToMany.add_student_form', compact('students', 'group'));
    }

    public function add_student(Request $request, Group $group)
    {
        $valid = $request->validate([
            'student_id' => ['required', 'integer', 'gt:0'],
        ]);
        if ($group->students()->sync($valid['student_id'], false))
            return redirect('/many_to_many_index');
    }
}