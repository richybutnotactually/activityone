<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function myWelcomeView()
    {
        $student = Students::all();
        $users = User::all();
        return view('welcome', compact('student', 'users'));
    }

    public function createNewStd(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|numeric',
            'gender' => 'required|max:100',
            'address' => 'required'
        ]);

        $addNew = new Students();
        $addNew->name = $request->name;
        $addNew->age = $request->age;
        $addNew->gender = $request->gender;
        $addNew->address = $request->address;
        $addNew->save();

        return back()->with('success', 'Student added successfully!');
    }

    // public function edit(Students $student){
    //     return view('student.edit', ['student' => $student]);
    // }

    public function update(Students $student, Request $request){
        $data = $request->validate([
           'name' => 'required|max:55',
            'age' => 'required|numeric',
            'gender' => 'required|max:10',
            'address' => 'required'
        ]);

        $student->update($data);

        return back()->with('success', 'Student Updated Successfully');

    }

    public function delete(Students $student){
        $student->delete();
        return back()->with('success', 'Student Deleted Successfully');
    }

}