<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Quize;
use App\Models\representative;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class QuizeTakeController extends Controller
{
    
    public function take($id)
{
    $quiz = Quize::find($id);
    if(auth()->id() == $quiz->user_id){
        return redirect()->back()->with('error', 'You can not take your own quiz.');
    }
    $hasTaken = Result::where('user_id', auth()->id())
        ->where('quiz_id',$quiz->id)
        ->exists();
    if($hasTaken){
        return redirect()->back()->with('error', 'You have already taken this quiz.');
    }
    if(auth()->user()->hasRole('admin')){
        return redirect()->back()->with('error', 'Admin can not take quiz.');
    }
    if(auth()->user()->hasRole('student')){
        $student = Student::where('user_id', auth()->id())->first();
        if($student->status == 'banned'){
            return redirect()->back()->with('error', 'You are banned from this quiz.');
        }
    }
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
                            $answer = Answer::where('question_id', $questionId)
                                // ->where('response', $selectedAnswer)
                                ->first();
                                $results[] = [
                                    'user_id' => auth()->id(),
                                    'quiz_id' => $quiz->id,
                                    'question_id' => $questionId,
                                    'answer_id' => $answer->id,
                                    'selected' => $selectedAnswer,
                                ];
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
        if($user->hasRole('teacher') || $user->hasRole('representative')){
            $quizzes = Quize::where('user_id', $userid)->where('status', 'published')->get();
        }else{
            $quizids = Result::where('user_id', $userid)->distinct('quiz_id')->pluck('quiz_id');
            $quizzes = Quize::whereIn('id', $quizids)->where('status', 'published')->get();
        }
        $unpublishedQuizzes = Quize::where('user_id', $userid)->where('status', 'draft')->get();
        return view('users.MyQuizzes', compact('quizzes', 'user', 'student', 'representative','unpublishedQuizzes'));
    }

    public function showMyResults($id){
        $userId = auth()->id();
        $quiz = Quize::find($id);
        if( $quiz === null || $quiz->id != $id){
            return redirect()->back()->with('error', 'You can not view this result.');
        }
        $questions = $quiz->questions;
        $userAnswers = Result::where('user_id', $userId)
        ->where('quiz_id', $id)
        ->pluck('answer_id', 'question_id');
        $results = Result::where('quiz_id', $id)->get();
        return view('users.MyResults', compact('questions', 'quiz', 'userAnswers', 'results', 'userId'));
    }

    
    public function showParticipantResults($user_id, $quiz_id)
    {
        $userId = $user_id;
        $quiz = Quize::find($quiz_id);
        // $questions = $quiz->questions;
        // $userAnswers = Result::where('user_id', $userId)
        //     ->where('quiz_id', $quiz_id)
        //     ->pluck('answer_id', 'question_id');
        // $results = Result::where('quiz_id', $quiz_id)->get();

        // return view('users.MyResults', compact('questions', 'quiz', 'userAnswers', 'results'));
        return view('users.MyResults', compact('quiz','userId'));
    }
    
    public function deleteQuiz($id)
    {
        $quiz = Quize::find($id);
        if(auth()->id() != $quiz->user_id){
            return redirect()->back()->with('error', 'You can not delete this quiz.');
        }
        $quiz->delete();
        return redirect()->back()->with('success', 'Quize Deleted Successfully');
    }

}
