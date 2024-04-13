<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use App\Models\Quize;
use App\Models\representative;
use App\Models\Student;
use Illuminate\Http\Request;

class QuizzeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $student = Student::where('user_id', $user->id)->first();
        $representative = representative::where('user_id', $user->id)->first();
        $categories = Category::all();
        $classes = null;
        if($user->hasRole('teacher')){
            $classes = auth()->user()->teacher->classes;
        }
        
        return view('users.UserQuizzes', compact('user', 'categories','classes', 'student','representative'));
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
            'category_id' => 'required',
            'class_id' => 'sometimes',
        ]);
       
        $QuizeData['user_id'] = $user->id;
        $QuizeData['category_id'] = $request->input('category_id');
        $QuizeData['quiz_type'] = $request->input('quize_type');
        $quiz = Quize::create($QuizeData);
        $quiz->classes()->attach($request->input('class_id'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                    $quiz->clearMediaCollection('media/quizzes');
                    $quiz->addMediaFromRequest('image')->toMediaCollection('media/quizzes', 'media_quizzes');
            }
        }
        
    if($request->input('quize_type') === 'multiple_choice'){
        foreach($request->input('question') as $questionData){
            $question = $quiz->questions()->create([
                'question' => $questionData['text'],
                'quize_id' => $quiz->id, 
            ]);
        
            foreach($questionData['choices'] as $index => $choice){
                $isCorrect = false;
                if(isset($questionData['correct_answers'])){
                    $isCorrect = in_array($index, $questionData['correct_answers']);
                }
                $question->answers()->create([
                    'response' => $choice,
                    'is_correct' => $isCorrect,
                    'question_id' => $question->id,
                    'status' => $isCorrect ? 'true' : 'false'
                ]);
            }
        }
    }else{
        if($request->input('tf_question')) {
        foreach($request->input('tf_question') as $questionData){
            $question = $quiz->questions()->create([
                'question' => $questionData['text'],
                'quize_id' => $quiz->id, 
            ]);

            $question->answers()->create([
                'response' => $questionData['answer'],
                'is_correct' => $questionData['answer'] == 'true' ? true : false,
                'question_id' => $question->id,
                'status' => 'true'
            ]);
        }
      }
    }
    return redirect()->back()->with('success', 'Quiz created successfully');
}
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $quiz = Quize::find($id);
        $questions = Question::where('quize_id', $id)->get();
        $answers = Answer::all();
        $categories = Category::all();
        $user = auth()->user();
        $representative = representative::where('user_id', $user->id)->first();
        $student = Student::where('user_id', $user->id)->first();
        return view('users.UserQuizDetails', compact('quiz', 'questions', 'answers','categories', 'user', 'student','representative'));
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
