<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quize;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quizzes = Quize::all();
        $categories = Category::all();
        $quizzes = Quize::where('status', 'published')->get();
        return view('home', compact('quizzes', 'categories'));
    }   
}
