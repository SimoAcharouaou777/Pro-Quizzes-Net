@extends('layouts.app')
@section('content')



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
          @foreach($quizzes as $quize)
          <div class="col-xl-4 col-lg-6">
            <article>

              <div class="post-img">
                @if($quize->hasMedia('media/quizzes'))
                <img src="{{$quize->getFirstMediaUrl('media/quizzes')}}" alt="" class="img-fluid">
                @endif
              </div>

              <p class="post-category">{{$quize->category->name}}</p>

              <h2 class="title">
                <a href="blog-details.html">{{$quize->title}}</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">{{$quize->user->username}}</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">{{$quize->created_at}}</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          @endforeach


        </div><!-- End blog posts list -->

        <div class="pagination d-flex justify-content-center">
          <ul>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End pagination -->

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


@endsection