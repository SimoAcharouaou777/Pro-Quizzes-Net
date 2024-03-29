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
        $user = auth()->user();
       $QuizeData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            

        ]);
        $QuizeData['user_id'] = $user->id;
        $QuizeData['category_id'] = 1;
        $quiz = Quize::create($QuizeData);

    foreach($request->input('question') as $questionData){
        $question = $quiz->questions()->create([
            'question' => $questionData['text'],
            'quize_id' => $quiz->id, 
        ]);
    }
        foreach($questionData['choices'] as $index => $choice){
            $isCorrect = $index === (int)$questionData['correct_answers'];
            $question->answers()->create([
                'response' => $choice,
                'is_correct' => $isCorrect,
                'question_id' => $question->id,
                'status' => $isCorrect ? 'true' : 'false'
            ]);
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
