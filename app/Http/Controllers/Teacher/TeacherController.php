<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\MyClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    public function index(){
        $user = Auth::user();
        $classes = auth()->user()->teacher->classes;
        return view('users.teacher.TeacherClass', compact('user', 'classes'));
    }
    
    public function addClass(Request $request){
        $user = Auth::user();
        
        // dd($user);
        $data = $request->validate([
            'name' => 'required',
            'level' => 'required',
            'learners' => 'required',
            'campus' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ],[
            'name.required' => 'Please enter class name',
            'level.required' => 'Please enter class level',
            'learners.required' => 'Please enter class learners',
            'campus.required' => 'Please enter class campus',
            'image.image' => 'Please upload an image',
            'image.mimes' => 'Image must be of type jpeg, png, jpg, gif, svg',
            'image.max' => 'Image must not be greater than 2MB'
        
        ]);
        $data['teacher_id'] = $user->teacher->id;
        $data['teacher_name'] = $user->username;
        do{
            $class_code =rand(100000, 999999);
        }while(Myclass::where('class_code', $class_code)->exists());
        $data['class_code'] = $class_code;
        $class = MyClass::create($data);
        if ($request->hasFile('image')) {
            $class->addMediaFromRequest('image')->toMediaCollection('media/classes', 'media_classes');
        }
        session()->flash('class_code', $class_code);
        return redirect()->back()->withInput();
    }

    public function showDetails($id){
        $class = MyClass::find($id);
        $user = Auth::user();
        $students = $class->students;
        return view('users.teacher.ClassDetails', compact('class', 'user', 'students'));
    }
}
