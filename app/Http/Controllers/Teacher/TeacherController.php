<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\MyClass;
use App\Models\Quize;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

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
        return redirect()->back();
    }

    public function showDetails($id){
        $class = MyClass::find($id);
        $user = Auth::user();
        $students = $class->students;
        return view('users.teacher.ClassDetails', compact('class', 'user', 'students'));
    }

    public function banuser($id){
        $student = Student::find($id);
        $status = "banned";
        $student->status = $status;
        $student->save();
        return redirect()->back()->with('success', 'Student banned successfully');
    }

    public function updateClass(Request $request, $id)
    {
        $class = MyClass::find($id);
        
        if(auth()->user()->hasRole('teacher') && auth()->user()->teacher->id != $class->teacher_id){
            return redirect()->back()->with('error', 'You can not update this class.');
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                $class->clearMediaCollection('media/classes');
                $class->addMediaFromRequest('image')->toMediaCollection('media/classes', 'media_classes');
                }
            }
        
        if ($request->has('name')) {
            $class->name = $request->input('name');
        }
        if($request->has('level')){
            $class->level = $request->input('level');
        }
        if($request->has('learners')){
            if($request->input('learners') < $class->learners){
                return redirect()->back()->with('error', 'You can not reduce the number of learners');
            }
            $class->learners = $request->input('learners');
        }
        if($request->has('campus')){
            $class->campus = $request->input('campus');
        }
        $class->update($request->all());
        return redirect()->back()->with('success', 'Class updated successfully');
        }
        
        public function deleteClass($id){
            $class = MyClass::find($id);
            if(auth()->id() != $class->teacher_id){
                return redirect()->back()->with('error', 'You can not delete this class.');
            }
            $class->delete();
            return redirect()->back()->with('success', 'Class deleted successfully');
        }

        public function showparticipants($id)
        {
            $quiz = Quize::find($id);
            $user_ids = Result::where('quiz_id', $id)->pluck('user_id');
            $users = User::whereIn('id', $user_ids)->get();
            $numberofparticipant =Result::where('quiz_id', $quiz->id)->distinct('user_id')->count('user_id');
            return view('users.teacher.Participants', compact('users', 'quiz', 'numberofparticipant'));
        }

    }
    

