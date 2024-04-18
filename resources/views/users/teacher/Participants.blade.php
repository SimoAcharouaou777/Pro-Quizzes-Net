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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left column for quiz info -->
            <div class="col-md-6">
                <div class="card">
                    @if($quiz->hasMedia('media/quizzes'))
                    <img class="card-img-top" src="{{$quiz->getFirstMediaUrl('media/quizzes')}}" alt="Quiz image">
                    @else
                    <img class="card-img-top" src="{{asset('assets/img/default-quiz.jpg')}}" alt="Default quiz image">
                    @endif
                    <div class="card-body">
                        <h3 class="card-title">{{$quiz->title}}</h3>
                        <p class="card-text">
                            <h4><i class="fas fa-question-circle"></i> Questions: {{$quiz->questions->count()}} </h4><br>
                            <h4><i class="fas fa-clock"></i> Number Of Participant : {{$numberofparticipant}} </h4><br>
                            <h4><i class="fas fa-user"></i> Created by: {{$quiz->user->username}} </h4><br>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Right column for participants info -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Participants</h5>
                        <div class="row">
                            <!-- Repeat this block for each participant -->
                            @foreach($users as $user)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            @if($user->hasRole('student'))
                                            @if($user->students->hasMedia('media/students'))
                                            <a href="{{ route('showParticipantResults', ['user_id' => $user->id, 'quiz_id' => $quiz->id]) }}">
                                                <img src="{{$user->students->getFirstMediaUrl('media/students')}}" class="avatar avatar-sm me-3" alt="" style="width: 50px; height: 50px; border-radius: 50%">
                                                </a>
                                            @else
                                            <a href="{{ route('showParticipantResults', ['user_id' => $user->id, 'quiz_id' => $quiz->id]) }}">
                                                <img src="{{asset('assets/img/default-user.jpg')}}" class="avatar avatar-sm me-3 " alt="" style="width: 50px; height: 50px; border-radius :50%">
                                                </a>
                                            @endif
                                        @else
                                            @if($user->hasMedia('media/users'))
                                            <a href="{{ route('showParticipantResults', ['user_id' => $user->id, 'quiz_id' => $quiz->id]) }}">
                                                <img src="{{$user->getFirstMediaUrl('media/users')}}" class="avatar avatar-sm me-3" alt="" style="width: 50px; height: 50px; border-radius: 50%">
                                                </a>
                                            @else
                                            <a href="{{ route('showParticipantResults', ['user_id' => $user->id, 'quiz_id' => $quiz->id]) }}">
                                                <img src="{{asset('assets/img/default-user.jpg')}}" class="avatar avatar-sm me-3 " alt="" style="width: 50px; height: 50px; border-radius :50%">
                                                </a>
                                            @endif
                                        @endif
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0">{{$user->username}}</h6>
                                            <p class="mb-0 text-muted">{{$user->email}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End of participant block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS scripts omitted for brevity -->
</body>
</html>