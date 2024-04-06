<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\MyClass;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $user =  Auth::user();
        $classes = $user->students->classes;
        return view('users.student.studentClass', compact( 'classes', 'user'));
    }

    public function joinClass(Request $request){
        $request->validate([
            'pass_code' => 'required'
        ]);

        $class = MyClass::where('class_code', $request->input('pass_code'))->first();
        if($class){
            $student = auth()->user()->students;
            $class->students()->attach($student);
            return redirect()->back()->with('success', 'You have successfully joined the class');
        }else{
            return redirect()->back()->with('error', 'Invalid class code');
        }
    }

    public function showDetails($id){
        $class = MyClass::find($id);
        $user = Auth::user();
        $students = $class->students;
        return view('users.student.StudentClassDetails', compact('class', 'user', 'students'));
    }   
}