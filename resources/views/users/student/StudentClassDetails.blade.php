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

<body class="fix-header card-no-border fix-sidebar">
    
    <!-- Preloader - style you can find in spinners.css -->
    
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    
    <!-- Main wrapper - style you can find in pages.scss -->
    
    <div id="main-wrapper">
        
        <!-- Topbar header - style you can find in pages.scss -->
        
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                
                <!-- Logo -->
                
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
                
                <!-- End Logo -->
                
                <div class="navbar-collapse">
                    
                    <!-- toggle and nav items -->
                    
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        
                        <!-- Search -->
                        
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a> </form>
                        </li>
                    </ul>
                    
                    <!-- User profile and search -->
                    
                    <ul class="navbar-nav my-lg-0">
                        
                        <!-- Profile -->
                        
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if($student->hasMedia('media/students'))
                                  <img src="{{$student->getFirstMediaUrl('media/students')}}" alt="profile_image" class="">
                                @else
                                   <img src="{{asset('assets/img/clients/profile.jpg')}}" alt="user" class="" />
                                @endif
                            <span
                                    class="hidden-md-down">{{$student->username}} &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- End Topbar header -->
        
        
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        
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
                        <li> <a class="waves-effect waves-dark" href="{{route('studentClass')}}" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">My Class</span></a>
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
        
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        
        
        <!-- Page wrapper  -->
        
        <div class="page-wrapper">
            
            <!-- Container fluid  -->
            
            <div class="container-fluid">
                
                <!-- Bread crumb and right sidebar toggle -->
                
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
                
                <!-- End Bread crumb and right sidebar toggle -->
                
                
                <!-- Start Page Content -->
                
                <!-- Row -->

    <div class="container-fluid">
        <div class="row">
            <!-- Left column for class info -->
            <div class="col-md-6">
                <div class="card" style="border: 1px solid #f0f0f0;;">
                    @if($class->hasMedia('media/classes'))
                    <img class="card-img-top" src="{{$class->getFirstMediaUrl('media/classes')}}" alt="Class image">
                    @else
                    <img class="card-img-top" src="{{asset('assets/img2/logos/ClassDefaultLogo.jpeg')}}" alt="Class image" style="width: 100%; height: auto; max-height: 300px;">
                    @endif
                    <div class="card-body">
                        <h3 class="card-title">{{$class->name}}</h3>
                        <p class="card-text">
                            <h4><i class="fas fa-users"></i> Learners: {{$class->students->count()}}/{{$class->learners}} </h4><br>
                            <h4><i class="fas fa-school"></i> Campus: {{$class->campus}} </h4><br>
                            <h4><i class="fas fa-chalkboard-teacher"></i> Teacher: {{$class->teacher_name}} </h4><br>
                            <h4><i class="fas fa-level-up-alt"></i> Level: {{$class->level}} </h4><br>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Right column for learners info -->
            <div class="col-md-6">
                <div class="card" style="border: 1px solid #f0f0f0;;">
                    <div class="card-body">
                        <h5 class="card-title">Learners</h5>
                        <div class="row">
                            <!-- Repeat this block for each learner -->
                            @foreach($students as $student)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            @if($student->hasMedia('media/students'))
                                            <img src="{{$student->getFirstMediaUrl('media/students')}}" class="avatar avatar-sm me-3" alt="" style="width: 50px; height: 50px; border-radius: 50%">
                                            @else
                                            <img src="{{asset('assets/img2/team-2.jpg')}}" class="avatar avatar-sm me-3 " alt="" style="width: 50px; height: 50px; border-radius :50%">
                                            @endif
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0">{{$student->username}}</h6>
                                            <p class="mb-0 text-muted">{{$student->email}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End of learner block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>

    <script src="{{asset('assets/node_modules/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script>
        var btn = document.getElementById('addClassButton');
        btn.onclick = function() {
            $('#addClassModal').modal('show');
        }
        $('#addClassModal').on('click', function(e) {
            if($(e.target).is('#addClassModal'))
            $(this).modal('hide');
        });
    </script>
    <script>
        var btn = document.getElementById('closebutton');
        btn.onclick = function(){
            $('#addClassModal').modal('hide');
        }
    </script>
</body>

</html>