<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <style>

        .question {
            color: #007bff; 
            font-weight: bold;
        }

        .answer {
            color: #6c757d; 
        }
    </style>
  

    @if($quiz->quiz_type == 'multiple_choice')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Questionnaire</h5>
    
                <form action="{{ route('QuizSubmit', $quiz->id) }}" method="POST">
                    @csrf
                    <h2>{{ $quiz->title }}</h2>
                    @foreach($quiz->questions as $question)
                    <div class="form-group">
                        <label for="question{{ $question->id }}" class="question">Question {{ $loop->iteration }}: {{ $question->question }}</label>
                        @foreach($question->answers as $answer)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="q{{ $question->id }}_choice{{ $answer->id }}" name="question{{ $question->id }}[]" class="custom-control-input" value="{{ $answer->id }}">
                            <label class="custom-control-label answer" for="q{{ $question->id }}_choice{{ $answer->id }}">{{ $answer->response }}</label>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
@elseif($quiz->quiz_type == 'true_false')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Questionnaire</h5>

            <form action="{{route('QuizSubmit', $quiz->id)}}" method="POST" id="quiz-form">
                @csrf
                <h2>{{ $quiz->title }}</h2>
                @foreach($quiz->questions as $question)
                <div class="form-group">
                    <label for="question{{ $question->id }}" class="question">Question {{ $loop->iteration }}: {{ $question->question }}</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="q{{ $question->id }}_choiceTrue" name="question{{ $question->id }}" class="custom-control-input" value="true">
                        <label class="custom-control-label answer" for="q{{ $question->id }}_choiceTrue">True</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="q{{ $question->id }}_choiceFalse" name="question{{ $question->id }}" class="custom-control-input" value="false">
                        <label class="custom-control-label answer" for="q{{ $question->id }}_choiceFalse">False</label>
                    </div>
                </div>
                @endforeach
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('quiz-form').addEventListener('submit', function(event) {
        var questions = document.querySelectorAll('.form-group');
        for (var i = 0; i < questions.length; i++) {
            var checkboxes = questions[i].querySelectorAll('.custom-control-input');
            var checked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            if (!checked) {
                event.preventDefault();
                alert('Please answer all questions.');
                return;
            }
        }
    });
    </script>
</body>
</html>
