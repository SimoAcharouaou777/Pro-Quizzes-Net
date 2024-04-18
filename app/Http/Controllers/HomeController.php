<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quize;
use App\Models\representative;
use App\Models\Student;


class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        $categories = Category::all();
        $quizzes = Quize::where('status', 'published')
        ->whereDoesntHave('user', function($query){
            $query->whereHas('roles', function($query){
                $query->where('name', 'representative');
            });
        })
        ->whereDoesntHave('classes')
        ->with('user')->paginate(10);
        
        return view('home', compact('quizzes', 'categories', 'quizzes', 'student', 'representative', 'user'));
    }   
}
