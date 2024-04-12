<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Quize;
use Illuminate\Http\Request;

class QuizeTakeController extends Controller
{
    public function take($id)
    {
        $quiz = Quize::find($id);
        return view('users.UserQuizeTake',compact('quiz'));
    }
}
