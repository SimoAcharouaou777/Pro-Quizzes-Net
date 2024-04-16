<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Quize;
use App\Models\representative;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class QuizeTakeController extends Controller
{
    
    public function take($id)
{
    $quiz = Quize::find($id);
    if($quiz->user->hasRole('representative')){
        $currentTime = Carbon::now('Africa/Casablanca');
    $startTime = new Carbon($quiz->start_time, 'Africa/Casablanca');
    $endTime = new Carbon($quiz->end_time, 'Africa/Casablanca');
    if ($quiz->start_time && $quiz->end_time && $currentTime->gte($startTime) && $currentTime->lt($endTime)) {
        return view('users.UserQuizeTake', compact('quiz'));
    } else {
        
        return back()->with('error', 'This quiz is not available at the moment.');
    }
    }else{
        return view('users.UserQuizeTake', compact('quiz'));
    }
    
}

    
    


    public function QuizSubmit(Request $request, $id)
    {
        $quiz = Quize::findOrFail($id);
        
        $results = [];

        foreach ($quiz->questions as $question) {
            $questionId = $question->id;
            
            if ($request->has('question' . $questionId)) {
                if($quiz->quiz_type == 'multiple_choice') {
                    $selectedAnswers = $request->input('question' . $questionId);

                    foreach ($selectedAnswers as $selectedAnswerId) {
                        $results[] = [
                            'user_id' => auth()->id(),
                            'quiz_id' => $quiz->id,
                            'question_id' => $questionId,
                            'answer_id' => $selectedAnswerId,
                        ];
                    }
                } elseif($quiz->quiz_type == 'true_false') {

                    $results = [];

                    foreach ($quiz->questions as $question) {
                        $questionId = $question->id;
                        
                        if ($request->has('question' . $questionId)) {
                            $selectedAnswer = $request->input('question' . $questionId);
                
                            // Find the correct answer for the question
                            $answer = Answer::where('question_id', $questionId)
                                ->where('response', $selectedAnswer)
                                ->first();
                            if($answer){
                                $results[] = [
                                    'user_id' => auth()->id(),
                                    'quiz_id' => $quiz->id,
                                    'question_id' => $questionId,
                                    'answer_id' => $answer->id,
                                ];
                            }
                        }
                    }
                }
            }
        }

        Result::insert($results);

        return redirect()->route('home')->with('message', 'Your results have been submitted successfully.');
    }


    public function showMyQuizzes(){
        $user = auth()->user();
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        $userid = auth()->id();
        $quizids = Result::where('user_id', $userid)->distinct('quiz_id')->pluck('quiz_id');
        $quizzes = Quize::whereIn('id', $quizids)->get();
        return view('users.MyQuizzes', compact('quizzes', 'user', 'student', 'representative'));
    }

    public function showMyResults($id){
        $userId = auth()->id();
        $quiz = Quize::find($id);
        $questions = $quiz->questions;
        $userAnswers = Result::where('user_id', $userId)
        ->where('quiz_id', $id)
        ->pluck('answer_id', 'question_id');
        $results = Result::where('quiz_id', $id)->get();
        return view('users.MyResults', compact('questions', 'quiz', 'userAnswers', 'results'));
    }
}
