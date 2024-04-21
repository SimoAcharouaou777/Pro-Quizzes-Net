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
    <title>User Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/portfolio/Logo.png')}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{asset('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{asset('assets/node_modules/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('assets/css/pages/dashboard1.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
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
                        <!-- ADD QUIZZE -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item hidden-xs-down">
                            <a class="nav-link hidden-sm-down waves-effect waves-dark" data-toggle="modal" data-target="#createQuizModal">
                                <i class="fa fa-plus"> Create Quizze</i>
                            </a>
                        </li> --}}
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and QUIZZE -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if($user->hasRole('student'))
                                @if($student->hasMedia('media/students'))
                                 <img src="{{$student->getFirstMediaUrl('media/students')}}" alt="profile_image" class="img-circle" width="150">
                                 @else
                                 <img src="{{asset('assets/img/clients/profile.jpg')}}" class="img-circle"
                                 width="150" />
                                 @endif
                             @elseif($user->hasRole('representative'))
                                 @if($representative->hasMedia('media/representatives'))
                                     <img src="{{$representative->getFirstMediaUrl('media/representatives')}}" alt="profile_image" class="img-circle" width="150">
                                 @else
                                     <img src="{{asset('assets/img/clients/profile.jpg')}}" class="img-circle" width="150" />
                                 @endif
                             @else
                                 @if(Auth::user()->hasMedia('media/users'))
                                     <img src="{{Auth::user()->getFirstMediaUrl('media/users')}}" alt="profile_image" class="img-circle" width="150">
                                 @else
                                 <img src="{{asset('assets/img/clients/profile.jpg')}}" class="img-circle"
                                 width="150" />
                                 @endif
                             @endif
                            <span
                                    class="hidden-md-down">{{$user->username}} &nbsp;</span> 
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit():">Logout</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
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
                        @if($user->hasRole('teacher') || $user->hasRole('representative'))
                        <li> <a class="waves-effect waves-dark" href="{{route('userdashboard.index')}}" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        @endif
                        <li> <a class="waves-effect waves-dark" href="{{route('userprofile.index')}}" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('usersettings.index')}}" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Settings</span></a>
                        </li>
                        @if($user->hasRole('teacher') || $user->hasRole('representative'))
                        <li> <a class="waves-effect waves-dark" href="{{route('userquizzes.index')}}" aria-expanded="false"><i
                                    class="fa fa-smile-o"></i><span class="hide-menu">Quizzes</span></a>
                        </li>
                        @endif
                        <li> 
                            @if(Auth::user()->hasRole('teacher'))
                            <a class="waves-effect waves-dark" href="{{route('teacherClass')}}" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">My Class</span></a>
                            @elseif(Auth::user()->hasRole('student'))
                            <a class="waves-effect waves-dark" href="{{route('studentClass')}}" aria-expanded="false"><i
                                class="fa fa-globe"></i><span class="hide-menu">My Class</span></a>
                            @endif
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('MyQuizzes')}}" aria-expanded="false"><i
                                    class="fa fa-bookmark-o"></i><span class="hide-menu">My Quizzes</span></a>
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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->

                    
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-4 no-block">
                                    <h5 class="card-title mb-0 align-self-center">Quiz Statistiques</h5>
                                </div>
                                <div id="visitor" style="height:260px; width:100%;"></div>
                                <ul class="list-inline mt-4 text-center font-12">
                                    <li><i class="fa fa-circle text-success"></i> Number Of created Quizzes</li>
                                    <li><i class="fa fa-circle text-info"></i> Number Of participants</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Sales Chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">My Quizzes</h5>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Quizze</th>
                                                <th>Created At</th>
                                                <th>Number of Participant</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($quizzes as $quiz)
                                            <tr>
                                                @if($quiz->hasMedia('media/quizzes'))
                                                <td style="width:50px;"><img src="{{$quiz->getFirstMediaUrl('media/quizzes')}}" alt="user" class="img-circle" width="50"></td>
                                                @else
                                                <td style="width:50px;"><span class="round">{{substr($quiz->title, 0, 1)}}</span></td>
                                                @endif
                                                <td>
                                                    <h6>{{$quiz->title}}</h6><small class="text-muted">{{$quiz->quiz_type}}</small>
                                                </td>
                                                <td>{{$quiz->created_at->format('M d, Y')}}</td>
                                                <td>{{$participants}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                @if($mostParticipatedQuiz != null)
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                            @if($mostParticipatedQuiz->hasMedia('media/quizzes'))
                            <div  class="card-img-top" >
                                <img src="{{ $mostParticipatedQuiz->getFirstMedia('media/quizzes')->getUrl() }}" alt="Quiz Image" style="width: 100%; height:200px; object-fit: cover;">
                            </div>
                            @endif
                            
                            <div class="card-body">
                                <h5 class=" card-title">{{$mostParticipatedQuiz->title}}</h5>
                                <span class="label label-info label-rounded">{{$mostParticipatedQuiz->category->name}}</span>
                                <p class="mb-0 mt-3">{{$mostParticipatedQuiz->description}}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class=" card-title">No Quizze Yet</h5>
                                <p class="mb-0 mt-3">You have not created any quiz yet</p>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notification And Feeds -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Start Notification -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-body mailbox">
                            <h5 class="card-title">Notification</h5>
                            <div class="message-center" style="height: 420px !important;">
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Luanch Admin</h6> <span class="mail-desc">Just see the my new admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-success btn-circle"><i class="fa fa-calendar-check-o"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Event today</h6> <span class="mail-desc">Just a reminder that you have
                                            event</span> <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-info btn-circle"><i class="fa fa-cog text-white"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Settings</h6> <span class="mail-desc">You can customize this template as you
                                            want</span> <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Pavan kumar</h6> <span class="mail-desc">Just see the my admin!</span> <span
                                            class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-info btn-circle"><i class="fa fa-cog text-white"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Customize Themes</h6> <span class="mail-desc">You can customize this template as you
                                            want</span> <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-primary btn-circle"><i class="fa fa-user"></i></div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">Pavan kumar</h6> <span class="mail-desc">Just see the my admin!</span> <span
                                            class="time">9:02 AM</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Notification -->
                    <!-- Start Feeds -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Feeds</h5>
                                <ul class="feeds">
                                    <li>
                                        <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending
                                        tasks. <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-success"><i class="fa fa-server"></i></div> Server #1
                                        overloaded.<span class="text-muted">2 Hours ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-warning"><i class="fa fa-shopping-cart"></i></div> New
                                        order received.<span class="text-muted">31 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                        registered.<span class="text-muted">30 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version
                                        just arrived. <span class="text-muted">27 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending
                                        tasks. <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-light-danger"><i class="fa fa-user"></i></div> New user
                                        registered.<span class="text-muted">30 May</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Feeds -->
                </div>
                <!-- ============================================================== -->
                <!-- End Notification And Feeds -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
    <!-- create quize modal -->

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/node_modules/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('assets/node_modules/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{asset('assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{asset('assets/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{asset('assets/js/dashboard1.js')}}"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JavaScript library -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

</body>

</html>