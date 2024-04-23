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
                                @if($user->hasRole('student') && $student)
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
        
        <!-- End Topbar header -->
        
        
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        
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
    <form class="form-horizontal form-material mx-2" method="POST" action="{{route('userprofile.update',$user->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4">
                            @if($user->hasRole('student') && $student)
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
                            <div class="form-group">
                                <input type="file" name="image" class="form-control">
                            </div>
                                    <h4 class="card-title mt-2">{{$user->username}}</h4>
                                    @foreach($user->roles as $role)
                                    <h6 class="card-subtitle">{{$role->name}}</h6>
                                    @endforeach
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="fa fa-user"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="fa fa-camera"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                    <div class="form-group">
                                        @if($user->hasRole('representative'))
                                        <label class="col-md-12">Representative Name</label>
                                        @else
                                        <label class="col-md-12">Full Name</label>
                                        @endif
                                        <div class="col-md-12">
                                            <input type="text" name="username" value="{{$user->username}}" placeholder="place your full name here"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @if($user->hasRole('representative'))
                                        <label for="example-email" class="col-md-12">Representative Email</label>
                                        @else
                                        <label for="example-email" class="col-md-12">Email</label>
                                        @endif
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="{{$user->email}}" placeholder="place your email here"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$user->phone_number}}" name="phone_number" placeholder="place your phone number here"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    @if($user->hasRole('student') && $student)
                                    <div class="form-group">
                                        <label class="col-md-12">Student ID</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$student->student_id}}" name="student_id" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    @endif
                                    @if($user->hasRole('representative') )
                                    <div class="form-group">
                                        <label class="col-md-12">Company Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$representative->company->company_name}}" name="company_name" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Company Email</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$representative->company->company_email}}" name="company_email" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Bio</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$representative->company->description}}" name="description" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Company Domain</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$representative->company->domaine}}" name="domaine" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Company Location</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$representative->company->location}}" name="location" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Founded Date</label>
                                        <div class="col-md-12">
                                            <input type="date" value="{{$representative->company->founded_date}}" name="founded_date" placeholder=""
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>

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