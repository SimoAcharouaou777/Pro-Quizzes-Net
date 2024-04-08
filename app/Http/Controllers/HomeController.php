<?php

namespace App\Http\Controllers;

use App\Models\Quize;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quizzes = Quize::all();
        return view('home', compact('quizzes'));
    }   
}
