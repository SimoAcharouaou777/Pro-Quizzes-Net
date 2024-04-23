<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Quize;
use App\Models\representative;
use App\Models\Student;
use App\Models\User;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyQuizzesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $user = auth()->user();
        if($user->hasRole('admin')){
            return redirect()->back()->with('error', 'You are not authorized to view this page.');
        }
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        $quizzes = Quize::whereHas('user', function($query){
            $query->whereHas('roles', function($query){
                $query->where('name', 'representative');
            });
        })
        ->where('status', 'published')
        ->where('start_time', '<=', Carbon::now('Africa/Casablanca'))
        ->where('end_time', '>=', Carbon::now('Africa/Casablanca'))
        ->get();
    
        return view('Company.CompanyQuizzes', compact('quizzes', 'categories','student','representative','user'));
    }

    public function showparticipants($id){
        $quiz = Quize::find($id);
        $user_ids = Result::where('quiz_id', $id)->pluck('user_id');
        $users = User::whereIn('id', $user_ids)->get();
        $numberofparticipant =Result::where('quiz_id', $quiz->id)->distinct('user_id')->count('user_id');
        return view('
        Company.CompanyQuizPartisipant', compact('users', 'quiz', 'numberofparticipant'));
    }
}
