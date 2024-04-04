<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, AdminWrap lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, AdminWrap lite design, AdminWrap lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="AdminWrap Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>AdminWrap Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->hasMedia('media/users'))
                                  <img src="{{Auth::user()->getFirstMediaUrl('media/users')}}" alt="profile_image" class="">
                                @else
                                   <img src="{{asset('assets/img/clients/profile.jpg')}}" alt="user" class="" />
                                @endif
                            <span
                                    class="hidden-md-down">{{$user->username}} &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{route('userdashboard.index')}}" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('userprofile.index')}}" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('usersettings.index')}}" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Settings</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('userquizzes.index')}}" aria-expanded="false"><i
                                    class="fa fa-smile-o"></i><span class="hide-menu">Quizzes</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">My Class</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i
                                    class="fa fa-bookmark-o"></i><span class="hide-menu">Blank</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                                    class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    

                    <form action="{{route('userquizzes.store')}}" method="POST" >
                        @csrf
                        @method('POST')
                        <h1>Create Quiz</h1>
                
                
                        <div class="form-group">
                            <label for="title">Quiz Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter quiz title">
                        </div>
                        <div class="form-group">
                            <label for="description">Quiz Description</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Enter quiz description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class_id">Class</label>
                            <select name="class_id" id="class_id" class="form-control">
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quizType">Quiz Type</label>
                            <input type="hidden" name="quize_type" id="quizeType" value="">
                            <button type="button" id="multipleChoiceButton" class="btn btn-primary">Multiple Choice</button>
                            <button type="button" id="trueFalseButton" class="btn btn-primary">True/False</button>
                        </div>
                    <div class="form-group" id="multiplechoice" style="display: none;">
                        <div id="questions-container">
                            <div class="question">
                                <div class="form-group">
                                    <label for="question1">Question 1</label>
                                    <input type="text" id="question1" name="question[0][text]" class="form-control" placeholder="Enter question">
                                </div>
                                <div id="choices-container1">
                                    <div class="form-group">
                                        <label for="choice1-1">Choice 1</label>
                                        <input type="text" id="choice1-1" name="question[0][choices][]" class="form-control" placeholder="Enter choice">
                                    </div>
                                    <div class="form-group">
                                        <label for="choice1-2">Choice 2</label>
                                        <input type="text" id="choice1-2" name="question[0][choices][]" class="form-control" placeholder="Enter choice">
                                    </div>
                                </div>
                                <button type="button"  class="btn btn-secondary addChoice" data-question="1">Add More Choice</button>
                                <div class="form-group">
                                    <label>Correct Answers</label>
                                    <div id="answers1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="choice1-1" id="answer1-1" name="question[0][correct_answers][]">
                                            <label class="form-check-label" for="answer1-1">
                                                Choice 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="choice1-2" id="answer1-2" name="question[0][correct_answers][]">
                                            <label class="form-check-label" for="answer1-2">
                                                Choice 2
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addQuestion">Add More Question</button>
                
                        <button type="submit" class="btn btn-primary" id="saveQuestion">Save Question</button>
                    </div>
                    <div class="form-group" id="truefalse" style="display: none;">
                        <div id="tf-questions-container">
                            <div class="question">
                                <div class="form-group">
                                    <label for="tf-question1">Question 1</label>
                                    <input type="text" id="tf-question1" name="tf_question[0][text]" class="form-control" placeholder="Enter question">
                                </div>
                                <div class="form-group">
                                    <label for="tf-answer1">Answer</label>
                                    <select id="tf-answer1" name="tf_question[0][answer]" class="form-control">
                                        <option value="true">True</option>
                                        <option value="false">False</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addTFQuestion">Add More Question</button>
                        <button type="submit" class="btn btn-primary" id="saveTFQuestion">Save Question</button>
                    </div>
                    </form>
                </div>   
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Adminwrap by <a href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/node_modules/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script>
        document.getElementById('multipleChoiceButton').addEventListener('click', function() {
            document.getElementById('multiplechoice').style.display = 'block';
            document.getElementById('truefalse').style.display = 'none';
            document.getElementById('quizeType').value = 'multiple_choice';
        });
        document.getElementById('trueFalseButton').addEventListener('click', function() {
            document.getElementById('multiplechoice').style.display = 'none';
            document.getElementById('truefalse').style.display = 'block';
            document.getElementById('quizeType').value = 'true_false';
        });
    </script>
    <script>
         var choiceCount = {1: 2};
        var questionCount = 1;
        document.getElementById('addQuestion').addEventListener('click', function() {
        questionCount++;
        choiceCount[questionCount] = 2; // Defaulting to 2 choices for each new question
        var container = document.getElementById('questions-container');
        var questionDiv = document.createElement('div');
        questionDiv.className = 'question';
        questionDiv.innerHTML = `
        <div class="form-group">
            <label for="question${questionCount}">Question ${questionCount}</label>
            <input type="text" id="question${questionCount}" name="question[${questionCount - 1}][text]" class="form-control" placeholder="Enter question">
        </div>
        <div id="choices-container${questionCount}">
            <div class="form-group">
                <label for="choice${questionCount}-1">Choice 1</label>
                <input type="text" id="choice${questionCount}-1" name="question[${questionCount - 1}][choices][]" class="form-control" placeholder="Enter choice">
            </div>
            <div class="form-group">
                <label for="choice${questionCount}-2">Choice 2</label>
                <input type="text" id="choice${questionCount}-2" name="question[${questionCount - 1}][choices][]" class="form-control" placeholder="Enter choice">
            </div>
        </div>
        <button type="button" class="btn btn-secondary addChoice" data-question="${questionCount}">Add More Choice</button>
        <div class="form-group">
            <label>Correct Answers</label>
            <div id="answers${questionCount}">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="choice${questionCount}-1" id="answer${questionCount}-1" name="question[${questionCount - 1}][correct_answers][]">
                    <label class="form-check-label" for="answer${questionCount}-1">
                        Choice 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="choice${questionCount}-2" id="answer${questionCount}-2" name="question[${questionCount - 1}][correct_answers][]">
                    <label class="form-check-label" for="answer${questionCount}-2">
                        Choice 2
                    </label>
                </div>
            </div>
        </div>
            `;
            container.appendChild(questionDiv);
        });

        document.getElementById('questions-container').addEventListener('click', function(event) {
        if(event.target.classList.contains('addChoice')) {
        var questionNumber = event.target.getAttribute('data-question');
        choiceCount[questionNumber]++;
        var container = document.getElementById(`choices-container${questionNumber}`);
        var choiceDiv = document.createElement('div');
        choiceDiv.className = 'form-group';
        choiceDiv.innerHTML = `
            <label for="choice${questionNumber}-${choiceCount[questionNumber]}">Choice ${choiceCount[questionNumber]}</label>
            <input type="text" id="choice${questionNumber}-${choiceCount[questionNumber]}" name="question[${questionNumber - 1}][choices][]" class="form-control" placeholder="Enter choice">
        `;
        container.appendChild(choiceDiv);

        var answersDiv = document.getElementById(`answers${questionNumber}`);
        var answerDiv = document.createElement('div');
        answerDiv.className = 'form-check';
        answerDiv.innerHTML = `
            <input class="form-check-input" type="checkbox" value="choice${questionNumber}-${choiceCount[questionNumber]}" id="answer${questionNumber}-${choiceCount[questionNumber]}" name="question[${questionNumber - 1}][correct_answers][]">
            <label class="form-check-label" for="answer${questionNumber}-${choiceCount[questionNumber]}">
                Choice ${choiceCount[questionNumber]}
            </label>
        `;
        answersDiv.appendChild(answerDiv);
         }
         });



        var correctAnswers = [];
        document.querySelectorAll('#answers .form-check-input:checked').forEach(function(checkbox) {
            correctAnswers.push(checkbox.value);
        });
    </script>
    <script>
        var tfQuestionCount = 1;
        document.getElementById('addTFQuestion').addEventListener('click', function() {
        tfQuestionCount++;
        var container = document.getElementById('tf-questions-container');
        var questionDiv = document.createElement('div');
        questionDiv.className = 'question';
        questionDiv.innerHTML = `
        <div class="form-group">
            <label for="tf-question${tfQuestionCount}">Question ${tfQuestionCount}</label>
            <input type="text" id="tf-question${tfQuestionCount}" name="tf_question[${tfQuestionCount - 1}][text]" class="form-control" placeholder="Enter question">
        </div>
        <div class="form-group">
            <label for="tf-answer${tfQuestionCount}">Answer</label>
            <select id="tf-answer${tfQuestionCount}" name="tf_question[${tfQuestionCount - 1}][answer]" class="form-control">
                <option value="true">True</option>
                <option value="false">False</option>
            </select>
        </div>
     `;
     container.appendChild(questionDiv);
      });
    </script>
</body>

</html>