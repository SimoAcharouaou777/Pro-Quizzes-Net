<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quize;
use Illuminate\Http\Request;

class QuizzeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('users.UserQuizzes', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $QuizeData = $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $quiz = Quize::create($QuizeData);

        foreach($request->input('questions', []) as $index => $question) {
            $request->validate([
                'questions.{$index}.text' => 'required',
                'questions.{$index}.choices' => 'required|array|min:3',
                'questions.{$index}.choices.*' => 'required|integer',
                'questions.{$index}.correct_answer'=>'required|array',
                'questions.{$index}.correct_answer.*'=>'required|integer|in:'.implode(',', $question['choices']),
            ]);
        
        $question = Question::creat([
            'question' => $question['text'],
            'quize_id' => $quiz->id,
        ]);

        foreach($question['choices'] as $choiceIndex => $choiceText){
        $choice = Answer::create([
            'response' => $choiceText,
            'question_id' => $question->id,
            'status' => in_array($choiceIndex, $question['correct_answer']) ? 'true' : 'false',
    ]);
        }
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
