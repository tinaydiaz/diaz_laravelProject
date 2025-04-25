<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
            'address' => 'required',

        ]);

        // Use the validate data to create a student 
        $student = Student::create($validated);

        // Redirect back with success message
        return redirect()->route('dashboard')->with([
            'success' => 'Student added successfully',
            'newStudent' => $student,
        ]);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('dashboard')->with('deleted', 'Student deleted successfully');
    }

    public function edit(Student $student)
    {
        return view('edit-student', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        //validate the request
        $validate = $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,'. $student->id. ',id',
            'phone' => 'required',
            'address' => 'required',
        ]);
        //update student using validated data
        $student->update($validate);
        //return with success message
        return redirect()->route('dashboard')-> with('update', 'Student updated successfully!');
    }

}
