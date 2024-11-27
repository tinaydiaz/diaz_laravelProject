<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function store(Request $request)
{
        //Validate the request
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
            'address' => 'required',

        ]);

        // Use the validated data to create a student
        $student = Student::create($validated);

        //Redirected back with success message
        return redirect()->route('dashboard')->with([
            'success' => 'Student added successfully',
            'newStudent' => $student,
        ]);

}

public function destroy(Student $student)
{
    $student->delete();
    return redirect()->route('dashboard')->with('delete', 'Student deleted successfully');
}





}
