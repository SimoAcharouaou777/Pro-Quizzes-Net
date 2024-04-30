<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ProQuizeesNet</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

<header id="header" class="header fixed-top d-flex align-items-center @yield('header-class')">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center" style="color: black;">
            <h1>ProQuizeesNet</h1>
        </a>

        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black; color: white;">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link @yield('home-active')" href="{{route('home')}}" style="color: black;">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#about" style="color: black;">About</a>
                  </li>
                  @if(Auth::check() && Auth::user()->hasRole('student'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('MyClassQuizzes')}}" style="color: black;">My Class Quizzes</a>
                  </li>
                  @endif
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('companyQuizzes')}}" style="color: black;">Company Quizzes</a>
                  </li>
                  @if(auth()->check())
                  <li class="nav-item dropdown">
                      @if($user->hasRole('student') && $student)
                          @if($student->hasMedia('media/students'))
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{$student->getFirstMediaUrl('media/students')}}" width="30" height="30" class="rounded-circle">
                              </a>
                          @else
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{asset('assets/img/clients/profile.jpg')}}" width="30" height="30" class="rounded-circle">
                              </a>
                          @endif
                      @elseif($user->hasRole('representative'))
                          @if($representative->hasMedia('media/representatives'))
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{$representative->getFirstMediaUrl('media/representatives')}}" width="30" height="30" class="rounded-circle">
                              </a>
                          @else
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{asset('assets/img/clients/profile.jpg')}}" width="30" height="30" class="rounded-circle">
                              </a>
                          @endif
                      @else
                          @if($user->hasMedia('media/users'))
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{$user->getFirstMediaUrl('media/users')}}" width="30" height="30" class="rounded-circle">
                              </a>
                          @else
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{asset('assets/img/clients/profile.jpg')}}" width="30" height="30" class="rounded-circle">
                              </a>
                          @endif
                      @endif
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li>
                              @if(Auth::user()->hasRole('admin'))
                              <a class="dropdown-item" href="{{route('admin.index')}}">Dashboard</a>
                              @elseif(Auth::user()->hasRole('student') || Auth::user()->hasRole('user'))
                              <a class="dropdown-item" href="{{route('userprofile.index')}}">Dashboard</a>
                              @else
                              <a class="dropdown-item" href="{{route('userdashboard.index')}}">Dashboard</a>
                              @endif
                          </li>
                          <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                      </ul>
                  </li>
                  @else
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('login')}}" style="color: black;">Login</a>
                  </li>
                  @endif
              </ul>
          </div>
      </nav>
    </div>
</header>

    <main id="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-12 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>ProQuizeesNet</span>
                    </a>
                    <p>Welcome to ProQuizeesNet, your platform for challenging quizzes and fun competitions. Join our community and test your knowledge!</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center mt-4">
            <p>&copy; <span>2024</span> <strong class="px-1">ProQuizeesNet</strong> <span>All Rights Reserved</span></p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
