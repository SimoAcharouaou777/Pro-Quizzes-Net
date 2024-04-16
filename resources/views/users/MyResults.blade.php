@php
 use App\Models\Result;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 800px;
            margin: 0 auto;
        }
        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .question {
            margin-bottom: 30px;
        }
        .question-text {
            font-size: 24px;
            margin-bottom: 15px;
            color: #555;
        }
        .answer-card {
            background-color: #f9f9f9;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .answer-card:hover {
            background-color: #f0f0f0;
            border-color: #ccc;
        }
        .answer-text {
            font-size: 18px;
            color: #333;
        }
        .status {
            font-size: 16px;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 10px;
            position: absolute;
            top: -20px;
            right: 0;
            opacity: 0.8;
            transform: translateY(0);
            transition: all 0.3s ease;
        }
        .correct {
            color: #4CAF50;
            background-color: rgba(76, 175, 80, 0.1);
        }
        .incorrect {
            color: #F44336;
            background-color: rgba(244, 67, 54, 0.1);
        }
        .answer-card:hover .status {
            opacity: 1;
            transform: translateY(-10px);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="title">{{ $quiz->title }}</div>
        @foreach($questions as $question)
            <div class="question">
                <div class="question-text">Question: {{ $question->question }}</div>
            @if($quiz->quiz_type == 'multiple_choice')
                @foreach($question->answers as $answer)
                    <div class="answer-card">
                        <div class="answer-text">{{ $answer->response }}</div>
                        @if($userAnswers[$question->id] == $answer->id)
                            @if($answer->status == 'true')
                                <div class="status correct">Your Answer (Correct)</div>
                            @else
                                <div class="status incorrect">Your Answer (Incorrect)</div>
                            @endif
                        @elseif($answer->status == 'true')
                            <div class="status correct">Correct Answer</div>
                        @endif
                    </div>
                @endforeach
                @elseif($quiz->quiz_type == 'true_false')  
                @php
                    $userAnswer = Result::where('user_id', auth()->id())
                        ->where('quiz_id', $quiz->id)
                        ->where('question_id', $question->id)
                        ->first();
                @endphp
                <div class="answer-card">
                    <div class="answer-text">True</div>
                    @if($userAnswer)
                        @if($userAnswer->selected == 'true')
                            @if($userAnswer->is_correct)
                                <div class="status correct">You selected this (Correct)</div>
                            @else
                                <div class="status incorrect">You selected this (Incorrect)</div>
                            @endif
                        @endif
                        @if($userAnswer->is_correct)
                            <div class="status correct">Correct Answer</div>
                        @else
                            <div class="status incorrect">Incorrect Answer</div>
                        @endif
                    @else
                        <div class="status">Not Selected</div>
                    @endif
                </div>
                <div class="answer-card">
                    <div class="answer-text">False</div>
                    @if($userAnswer)
                        @if($userAnswer->selected == 'false')
                            @if(!$userAnswer->is_correct)
                                <div class="status correct">You selected this (Correct)</div>
                            @else
                                <div class="status incorrect">You selected this (Incorrect)</div>
                            @endif
                        @endif
                        @if(!$userAnswer->is_correct)
                            <div class="status correct">Correct Answer</div>
                        @else
                            <div class="status incorrect">Incorrect Answer</div>
                        @endif
                    @else
                        <div class="status">Not Selected</div>
                    @endif
                </div>
            @endif
            


            </div>
        @endforeach
    </div>
</body>
</html>
