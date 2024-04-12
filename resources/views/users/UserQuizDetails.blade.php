@extends('layouts.app')

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <h2>Quize Details</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
     </div>
   @endif
   @if(session('info'))
   <div class="alert alert-info">
       {{ session('info') }}
   </div>
   @endif
   @if(session('error'))
     <div class="alert alert-danger">
       {{ session('error') }}
     </div>
   @endif
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-img">
                    <img src="{{ $quiz->getFirstMediaUrl('media/quizzes') }}" alt="image" style="width: 100%;">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Event information</h3>
                    <ul>
                        <li><strong>Title</strong> {{$quiz->title}}</li>
                        <li><strong>description</strong>{{$quiz->description}}</li>
                        <li><strong> Category </strong>{{$quiz->category->name}}</li>
                        <li><strong>Quize Creator</strong>{{$quiz->user->username}}</li>
                        <li><strong>Quize Type</strong>{{$quiz->quiz_type}}</li>
                        <li><strong>Quize Created Date</strong>{{$quiz->created_at->format('d-m-Y')}}</li>
                    </ul>
                </div>
                    <a href="{{route('QuizTake', $quiz->id)}}" class="btn btn-primary d-flex flex-column align-items-center">Start Quize</a>
            </div>
        </div>

    </div>
</section>
<!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection