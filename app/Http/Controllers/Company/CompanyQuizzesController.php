<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Quize;
use App\Models\representative;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyQuizzesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $user = auth()->user();
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        $quizzes = Quize::whereHas('user', function($query){
            $query->whereHas('roles', function($query){
                $query->where('name', 'representative');
            });
        })
        ->where('status', 'published')
        ->where('start_time', '>=',Carbon::now())
        
        ->orderBy('start_time', 'asc')
        ->get();
        foreach($quizzes as $quiz){
            $quiz->start_time = $quiz->start_time->setTimezone('Africa/CasaBlanca');
            $quiz->end_time = $quiz->end_time->setTimezone('Africa/CasaBlanca');
        }
        return view('Company.CompanyQuizzes', compact('quizzes', 'categories','student','representative','user'));
    }
}
