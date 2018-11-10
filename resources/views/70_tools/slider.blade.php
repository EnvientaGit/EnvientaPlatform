  <div class="row">
    <div class="col-md-12">
      <div class="card">
          <div class="embed-responsive"><!-- Image slider -->
            @if($project->video_id)
              <div class="container-fluid px-0 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" style="border-radius: 5px;" src="https://www.youtube.com/embed/{{$project->video_id}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
              </div>
            @else  
              <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
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
            @endif
          </div><!-- Image slider -->
        </div>
        <div class="row vlink"><!-- Video slider -->
          <div class="col-md-12">
            @include('70_tools.video_slider')
          </div>
        </div><!-- Video slider -->

    </div>

  </div>

