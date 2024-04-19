<div class="row gy-4 posts-list">
    @if($quizzes->isEmpty())
    <div class="d-flex justify-content-center align-items-center" style="height: 200px; background-color: #e0f7fa;">
      <h1>No Quizzes Yet</h1>
  </div>
    @else
    @foreach($quizzes as $quize)
      <div class="col-xl-4 col-lg-6">
          <article>
              <div class="post-img">
                  @if($quize->hasMedia('media/quizzes'))
                  <a href="{{ route('userquizzes.show', $quize->id) }}">
                      <img src="{{$quize->getFirstMediaUrl('media/quizzes')}}" alt="" class="img-fluid">
                  </a>
                  @endif
              </div>

              <p class="post-category" style="font-size: 2em;">{{$quize->category->name}}</p>

              <h2 class="title">
                  <a href="{{ route('userquizzes.show', $quize->id) }}">{{$quize->title}}</a>
              </h2>

              <div class="d-flex align-items-center">
                  <div class="post-meta">
                      <p class="post-author">
                          <i class="fa fa-user"></i> {{$quize->user->username}}
                      </p>
                      <p class="post-date">
                          <i class="fa fa-calendar"></i> <time datetime="2022-01-01">{{$quize->created_at}}</time>
                      </p>
                  </div>
              </div>
          </article>
      </div>
    @endforeach
    @endif

  </div><!-- End blog posts list -->