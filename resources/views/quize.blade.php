<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
    <link href="{{asset('assets/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- ... -->
</head>
<body class="fix-header card-no-border fix-sidebar">
    <!-- ... -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Quiz</h3>
                        <form id="multipleChoiceForm" style="display: none;">
                            <h4 id="mcQuestion"></h4>
                            <div id="mcOptions"></div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <form id="trueFalseForm" style="display: none;">
                            <h4 id="tfQuestion"></h4>
                            <div>
                                <input type="radio" id="trueOption" name="tfOption" value="true">
                                <label for="trueOption">True</label>
                            </div>
                            <div>
                                <input type="radio" id="falseOption" name="tfOption" value="false">
                                <label for="falseOption">False</label>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ... -->
    <script src="{{asset('assets/node_modules/jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            var quizType = "{{ $quizType }}"; // Get quiz type from server
            var question = "{{ $question }}"; // Get question from server
            var options = {!! json_encode($options) !!}; // Get options from server

            if (quizType === "multipleChoice") {
                $("#mcQuestion").text(question);
                options.forEach(function(option, index) {
                    $("#mcOptions").append('<div><input type="radio" id="option' + index + '" name="mcOption" value="' + option + '"><label for="option' + index + '">' + option + '</label></div>');
                });
                $("#multipleChoiceForm").show();
            } else if (quizType === "trueFalse") {
                $("#tfQuestion").text(question);
                $("#trueFalseForm").show();
            }

            $("form").on("submit", function(e) {
                e.preventDefault();
                // Handle form submission
            });
        });
    </script>
</body>
</html>