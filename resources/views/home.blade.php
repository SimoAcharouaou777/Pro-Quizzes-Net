<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quizzes Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/imghome/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/imghome/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendorhome/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendorhome/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendorhome/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendorhome/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendorhome/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/csshome/main.css')}}" rel="stylesheet">
  
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <i class="bi bi-pencil-square"></i>
        <h1>Quizzes</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown"><a href="#"><span>Quizzes</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Math</a></li>
              <li><a href="#">Science</a></li>
              <li><a href="#">History</a></li>
              <li><a href="#">Geography</a></li>
              <li><a href="#">Language</a></li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Welcome to Our Quizzes Section</h2>
          <p>Test your knowledge with our quizzes in various subjects!</p>
          <a href="#" class="btn-get-started">Take a Quiz</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Quiz Section ======= -->
    <section id="quiz" class="quiz">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <!-- Quiz Cards will go here -->
        </div>

      </div>
    </section><!-- End Quiz Section -->

  </main><!-- End #main -->
  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Quizzes Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          @foreach($quizzes as $quiz)
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              @if($quiz->hasMedia('media/quizzes'))
              <img src="{{$quiz->getFirstMediaUrl('media/quizzes')}}" class="img-fluid" alt="">
              @else
              <img src="{{asset('assets/imghome/gallery/gallery-1.jpg')}}" class="img-fluid" alt="">
              @endif
              <div class="gallery-links d-flex align-items-center justify-content-center">
                @if($quiz->hasMedia('media/quizzes'))
                <a href="{{$quiz->getFirstMediaUrl('media/quizzes')}}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                @else
                <a href="{{asset('assets/imghome/gallery/gallery-1.jpg')}}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                @endif
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          @endforeach
        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Quizzes</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://yourwebsite.com/"> Mohamed Acharouaou</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendorhome/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset(('assets/vendorhome/swiper/swiper-bundle.min.js'))}}"></script>
  <script src="{{asset('assets/vendorhome/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendorhome/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendorhome/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/jshome/main.js')}}"></script>

</body>

</html>
