<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quize;
use App\Models\representative;
use App\Models\Student;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        return view('users.UserDashboard', compact('user', 'student','representative'));
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
        dd($request->all());
       $QuizeData = $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $QuizeData['user_id'] = auth()->id();
        $QuizeData['category_id'] = 1;
        $quiz = Quize::create($QuizeData);

        $quiz->questions()->createMany($request->input('questions'));
        
        foreach($request->input('questions', []) as $index => $questionData) {

            $request->validate([
                "questions.{$index}.text" => 'required',
                "questions.{$index}.choices" => 'required|array',
                "questions.{$index}.choices.*" => 'required|string',
                "questions.{$index}.correct_answer"=>'required|array',
                "questions.{$index}.correct_answer.*" => 'required|integer|in:' . implode(',', array_keys($questionData['choices'])),
            ]);
        
        $question = Question::create([
            'question' => $questionData['text'],
            'quize_id' => $quiz->id,
        ]);

        foreach($questionData['choices'] as $choiceIndex => $choiceText){
        $choice = Answer::create([
            'response' => $choiceText,
            'question_id' => $question->id,
            'status' => in_array($choiceIndex, $questionData['correct_answer']) ? 'true' : 'false',
    ]);
        }
      }
      return redirect()->back()->with('success', 'Quiz created successfully');
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
