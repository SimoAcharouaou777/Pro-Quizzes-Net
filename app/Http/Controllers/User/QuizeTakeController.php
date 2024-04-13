<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Quize;
use Illuminate\Http\Request;
use App\Models\Result;

class QuizeTakeController extends Controller
{
    public function take($id)
    {
        $quiz = Quize::find($id);
        return view('users.UserQuizeTake',compact('quiz'));
    }

    public function QuizSubmit(Request $request, $id)
    {
        $quiz= Quize::find($id);
        if($quiz->quiz_type == 'multiple_choice'){
            $score = 0;
            foreach ($request->input('answers', []) as $questionId => $answerId) {
                $question = $quiz->questions()->find($questionId);
                $answer = $question->answers()->find($answerId);
    
                if ($answer->status == 'true') {
                    $score++;
                }
    
                Result::create([
                    'user_id' => auth()->id(),
                    'quiz_id' => $quiz->id,
                    'question_id' => $questionId,
                    'answer_id' => $answerId,
                ]);
            }
    
            return redirect()->route('home')->with('message', 'Your results can be found in your quizzes results');
        }
        
    }
}
