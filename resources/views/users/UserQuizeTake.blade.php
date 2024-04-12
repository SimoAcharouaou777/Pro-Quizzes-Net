@if($quiz->quiz_type == 'multiple_choice')
    <form action="" method="POST">
        @csrf
        <h2>{{ $quiz->title }}</h2>
        @foreach($quiz->questions as $question)
            <div class="mb-3">
                <label class="form-label">{{ $question->question }}</label>
                @foreach($question->options as $option)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                        <label class="form-check-label">{{ $option->text }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@elseif($quiz->quiz_type == 'true_false')
    <form action="" method="POST">
        @csrf
        <h2>{{ $quiz->title }}</h2>
        @foreach($quiz->questions as $question)
            <div class="mb-3">
                <label class="form-label">{{ $question->text }}</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="true">
                    <label class="form-check-label">True</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="false">
                    <label class="form-check-label">False</label>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endif