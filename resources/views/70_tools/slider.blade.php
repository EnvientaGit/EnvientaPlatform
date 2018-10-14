<div class="container">
  <div class="row">

    <div class="col-md-9">
      <div class="card mt-3 bg-light box-shadow-bottom">
        <div class="col-md-12">

          <div class="embed-responsive my-3"><!-- Image slider -->
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
              <ol class="carousel-indicators">
                @foreach($images as $idx => $image)
                  <li data-target="#carousel" data-slide-to="{{ $idx }}" class="{{ $idx == 0 ? 'active': ''}}"></li>
                @endforeach
              </ol>
              <div class="carousel-inner" role="listbox">
                @foreach($images as $idx => $image)
                  <div class="carousel-item {{ $idx == 0 ? 'active': ''}}">
                    <img src="{{ $image }}" alt="project_xy" class="d-block img-fluid img-thumbnail env_slide_img_h">
                  </div>
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div><!-- Image slider -->

          <div class="row px-3 mb-3 text-center">
            <div class="col-md-12">
              <a class="btn btn-outline-info btn-sm" href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}" target="_blank">
                <i class="fa fa-facebook-square"></i> Facebook
              </a>
              <a class="btn btn-outline-info btn-sm" href="https://twitter.com/intent/tweet?url={{ URL::current() }}" target="_blank">
                <i class="fa fa-twitter-square"></i> Twitter
              </a>
              <a class="btn btn-outline-info btn-sm" href="https://plus.google.com/share?url={{ URL::current() }}" target="_blank">
                <i class="fa fa-google-plus-square"></i> Google+
              </a>
              <a class="btn btn-outline-info btn-sm" href="https://www.linkedin.com/shareArticle?url={{ URL::current() }}" target="_blank">
                <i class="fa fa-linkedin-square"></i> LinkedIn
              </a>
              <a class="btn btn-outline-info btn-sm" href="http://pinterest.com/pin/create/button/?url={{ URL::current() }}" target="_blank">
                <i class="fa fa-pinterest-square"></i> Pinterest
              </a>
              <a class="btn btn-outline-info btn-sm" href="https://reddit.com/submit?url={{ URL::current() }}" target="_blank">
                <i class="fa fa-reddit-square"></i> Reddit
              </a>
            </div>
          </div>

          <div class="row vlink"><!-- Video slider -->
            <div class="col-md-12">
              @include('70_tools.video_slider')
            </div>
          </div><!-- Video slider -->

        </div>
      </div>
    </div>

    <div class="col-md-3">
      @include('30_sidebar.sidebar')
    </div>

  </div>
</div>

{{-- <h3 class="py-3"><b>{{$project->title}}</b></h3>
<p class="">{{$project->description}}</p> --}}
