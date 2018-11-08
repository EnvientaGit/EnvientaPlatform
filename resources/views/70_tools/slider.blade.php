  <div class="row">
    <div class="col-md-12">
      <div class="card bg-light box-shadow-bottom">

          <div class="embed-responsive"><!-- Image slider -->
            <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
              <ol class="carousel-indicators">
                @foreach($images as $idx => $image)
                  <!-- <li data-target="#carousel" data-slide-to="{{ $idx }}" class="{{ $idx == 0 ? 'active': ''}}"></li> -->
                @endforeach
              </ol>
              <div class="carousel-inner" role="listbox">
                @foreach($images as $idx => $image)
                  <div class="carousel-item {{ $idx == 0 ? 'active': ''}}">
                    <!-- <img src="{{ $image }}" alt="project_xy" class="d-block img-fluid img-thumbnail env_slide_img_h"> -->

                    <!-- Video -->
                    <div class="env_slide_img_h img-thumbnail">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/vlDzYIIOYmM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <!-- Video -->

                  </div>
                @endforeach
              </div>

              <!-- Navigation -->
              <!-- <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
              <!-- Navigation -->

            </div>
          </div><!-- Image slider -->

          <div class="row vlink"><!-- Video slider -->
            <div class="col-md-12">
              @include('70_tools.video_slider')
            </div>
          </div><!-- Video slider -->
        </div>

    </div>

  </div>

{{-- <h3 class="py-3"><b>{{$project->title}}</b></h3>
<p class="">{{$project->description}}</p> --}}
