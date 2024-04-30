@extends('layouts.app')
@section('content')

        <!-- Blog Page Title & Breadcrumbs -->
        <div data-aos="fade" class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Quizzes</h1>
                            <p class="mb-0">Explore a plethora of quizzes on various topics. Test your knowledge and have
                                fun! New quizzes added regularly.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- End Page Title -->
        <!-- Search and Filter Section -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" onkeyup="search()"
                            placeholder="Search quizzes...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="form-control" id="categoryFilter" onchange="search()">
                            <option value="all">All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

        </div><!-- End Search and Filter Section -->

        <!-- Blog Section - Blog Page -->
        <section id="blog" class="blog">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 posts-list" id="quezzz">
                    @if ($quizzes->isEmpty())
                        <div class="d-flex justify-content-center align-items-center"
                            style="height: 200px; background-color: #e0f7fa;">
                            <h1>No Quizzes Yet</h1>
                        </div>
                    @else
                        @foreach ($quizzes as $quize)
                            <div class="col-xl-4 col-lg-6">
                                <article>
                                    <div class="post-img">
                                        @if ($quize->hasMedia('media/quizzes'))
                                            <a href="{{ route('userquizzes.show', $quize->id) }}">
                                                <img src="{{ $quize->getFirstMediaUrl('media/quizzes') }}" alt=""
                                                    class="img-fluid">
                                            </a>
                                        @endif
                                    </div>

                                    <p class="post-category" style="font-size: 2em;">{{ $quize->category->name }}</p>

                                    <h2 class="title">
                                        <a href="{{ route('userquizzes.show', $quize->id) }}">{{ $quize->title }}</a>
                                    </h2>

                                    <div class="d-flex align-items-center">
                                        <div class="post-meta">
                                            <p class="post-author">
                                                <i class="fa fa-user"></i> {{ $quize->user->username }}
                                            </p>
                                            <p class="post-date">
                                                <i class="fa fa-calendar"></i> <time
                                                    datetime="2022-01-01">{{ $quize->created_at }}</time>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif

                </div><!-- End blog posts list -->
                <div class="d-flex justify-content-center">
                    {{ $quizzes->links() }}
                </div>
            </div>

        </section><!-- End Blog Section -->

    </main>


    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    <script>
        function search() {
            var valueInput = document.getElementById('search').value;
            var categoryFilter = document.getElementById('categoryFilter').value;
            console.log(categoryFilter);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("quezzz").innerHTML = xhttp.responseText;
                }
            };
            if (valueInput == '') {
                var url = '/Searchquize/AllquizeSearch/' + categoryFilter;
            } else {
                var url = '/Searchquize/' + valueInput + '/' + categoryFilter;
            }
            xhttp.open("GET", url, true);
            xhttp.send();
        }
        search();
    </script>

@endsection
