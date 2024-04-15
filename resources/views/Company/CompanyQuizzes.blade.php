<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
      <title></title>
      <meta content="" name="description">
      <meta content="" name="keywords">
    
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com" rel="preconnect">
      <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
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
    
    
      <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">
    
            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1>ProQuizeesNet</h1>
                <!-- Add an icon or logo image if needed -->
            </a>
    
            <nav class="navmenu">
              <ul class="d-flex">
                <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                @if(Auth::check() && Auth::user()->hasRole('student'))
                <li><a class="nav-link scrollto" href="{{route('MyClassQuizzes')}}">My Class Quizzes</a></li>
                @endif
                <li><a class="nav-link scrollto" href="{{route('companyQuizzes')}}">Company Quizzes</a></li>
                <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    @foreach($categories as $category)
                    <li><a href="#">{{$category->name}}</a></li>
                    @endforeach
                  </ul>
                </li>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                <div class="mx-auto">
                @if (auth()->check())
                <li class="nav-item dropdown">
                  @if($user->hasRole('student'))
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
                        @else
                        <a class="dropdown-item" href="{{route('userdashboard.index')}}">Dashboard</a>
                        @endif
                      </li>
                      <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                  </ul>
              </li>
              @else
              <i><a class=" scrollto btn-getstarted" href="{{route('login')}}">Login</a></i>
              @endif
            </div>
              </ul>
              
                
            </nav>
    
        </div>
    </header>
<body>
    <main id="main">

        <!-- Blog Page Title & Breadcrumbs -->
        <div data-aos="fade" class="page-title">
          <div class="heading">
            <div class="container">
              <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                  <h1>Quizzes</h1>
                  <p class="mb-0">Explore a plethora of quizzes on various topics. Test your knowledge and have fun! New quizzes added regularly.</p>
                </div>
              </div>
            </div>
          </div>
    
        </div><!-- End Page Title -->
    
        <!-- Blog Section - Blog Page -->
        <section id="blog" class="blog">
    
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            
            <div class="row gy-4 posts-list">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Success</h4>
                <p>{{ session('success') }}</p>
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error</h4>
                <p>{{ session('error') }}</p>
            </div>
            @endif
            @if(isset($message))
                <p>{{ $message }}</p>
            @else
            @if($quizzes->count() == 0)
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">No Quizzes Available</h4>
                <p>There are no quizzes available at the moment. Please check back later.</p>
            </div>
            @endif
              @foreach($quizzes as $quize)
              <div class="col-xl-4 col-lg-6">
                <article>
    
                  <div class="post-img">
                    @if($quize->hasMedia('media/quizzes'))
                    <a href="{{ route('QuizTake',$quize->id) }}">
                      <img src="{{$quize->getFirstMediaUrl('media/quizzes')}}" alt="" class="img-fluid">
                  </a>
                    @endif
                  </div>
    
                  <p class="post-category">{{$quize->category->name}}</p>
    
                  <h2 class="title">
                    <a href="{{route('QuizTake', $quize->id)}}">{{$quize->title}}</a>
                  </h2>
    
                  <div class="d-flex align-items-center">
                    @if($quize->user->hasRole('representative'))
                    <img src="{{$quize->user->representatives->getFirstMediaUrl('media/representatives')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                    @else
                    <img src="{{$quize->user->getFirstMediaUrl('media/users')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                    @endif
                    <div class="post-meta">
                      <p class="post-author">{{$quize->user->username}}</p>
                      <p >
                        <time>start at : {{$quize->start_time}}</time>
                      </p>
                      <p>
                        <time>end at : {{$quize->end_time}}</time>
                      </p>

                    </div>
                  </div>
    
                </article>
              </div><!-- End post list item -->
              @endforeach
            @endif
    
    
            </div><!-- End blog posts list -->
    
            {{-- <div class="pagination d-flex justify-content-center">
              <ul>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End pagination --> --}}
    
          </div>
    
        </section><!-- End Blog Section -->
    
      </main>
    
    
      <!-- Scroll Top Button -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Preloader -->
      {{-- <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div> --}}
    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
    
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
</body>
</html>



