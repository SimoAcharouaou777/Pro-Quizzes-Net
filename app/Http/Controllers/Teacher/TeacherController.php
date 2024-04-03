<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\MyClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function addClass(Request $request){
        $user = Auth::user();
        // dd($user);
        $data = $request->validate([
            'name' => 'required',
            'level' => 'required',
            'learners' => 'required',
            'campus' => 'required',
            'class_code' => 'required',
        ]);
        $data['teacher_id'] = $user->id;
        $data['teacher_name'] = $user->username;

        $class = MyClass::create($data);
        if ($request->hasFile('image')) {
            $user->addMediaFromRequest('image')->toMediaCollection('media/classes', 'media_classes');
        }
    }
}
