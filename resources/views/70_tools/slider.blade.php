<div class="container">
  <div class="row">

    <div class="col-md-8">
      <div class="card mt-3 bg-light box-shadow-bottom">
        <div class="col-md-12">
          <div class="embed-responsive my-3">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
              <ol class="carousel-indicators">
                @foreach($images as $idx => $image)
                  <li data-target="#carousel" data-slide-to="{{ $idx }}" class="{{ $idx == 0 ? 'active': ''}}"></li>
                @endforeach  
              </ol>
              <div class="carousel-inner" role="listbox">
                @foreach($images as $idx => $image)
                  <div class="carousel-item {{ $idx == 0 ? 'active': ''}}">
                    <img src="{{ $image }}" alt="project_xy" class="d-block img-fluid img-thumbnail"> 
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
          </div>
          <div class="row px-3 mb-3 text-center">
            <div class="col-md-12">
              <a class="btn btn-outline-info btn-sm" href="#"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;Facebook</a>
              <a class="btn btn-outline-info btn-sm" href="#"><i class="fa fa-twitter-square"></i>&nbsp;&nbsp;Twitter</a>
              <a class="btn btn-outline-info btn-sm" href="#"><i class="fa fa-google-plus-square"></i>&nbsp;&nbsp;Google +</a>
              <a class="btn btn-outline-info btn-sm" href="#"><i class="fa fa-linkedin-square"></i>&nbsp;&nbsp;LinkedIn</a>
              <a class="btn btn-outline-info btn-sm" href="#"><i class="fa fa-pinterest-square"></i>&nbsp;&nbsp;Pinterest</a>
              <a class="btn btn-outline-info btn-sm" href="#"><i class="fa fa-reddit-square"></i>&nbsp;&nbsp;Reddit</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      @include('30_sidebar.sidebar')
    </div>

  </div>
</div>
    
{{-- <h3 class="py-3"><b>{{$project->title}}</b></h3>
<p class="">{{$project->description}}</p> --}}



