<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-3 bg-light box-shadow-bottom">
        <div class="col-md-12">
          <div class="embed-responsive my-3">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <a href="#">
                    <picture>
                      <source srcset="{{ URL::to('img/hd_1.jpg') }}" media="(min-width: 1400px)">
                      <source srcset="{{ URL::to('img/hd_1.jpg') }}" media="(min-width: 769px)">
                      <source srcset="{{ URL::to('img/hd_1.jpg') }}" media="(min-width: 577px)">
                      <img srcset="{{ URL::to('img/hd_1.jpg') }}" alt="project_xy" class="d-block img-fluid img-thumbnail"> </picture>
                    <div class="carousel-caption">
{{--                       <div class="text-left">
                        <h4><span class="bg-info p-1">Farmbot</span></h4>
                        <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
                      </div> --}}
                    </div>
                  </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                  <a href="#">
                    <picture>
                      <source srcset="{{ URL::to('img/hd_2.jpg') }}" media="(min-width: 1400px)">
                      <source srcset="{{ URL::to('img/hd_2.jpg') }}" media="(min-width: 769px)">
                      <source srcset="{{ URL::to('img/hd_2.jpg') }}" media="(min-width: 577px)">
                      <img srcset="{{ URL::to('img/hd_2.jpg') }}" alt="project_xy" class="d-block img-fluid img-thumbnail"> </picture>
                    <div class="carousel-caption justify-content-center align-items-center">
{{--                       <div class="text-center">
                        <h4><span class="bg-info p-1">Farmbot2</span></h4>
                        <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
                      </div> --}}
                    </div>
                  </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                  <a href="#">
                    <picture>
                      <source srcset="{{ URL::to('img/hd_1.jpg') }}" media="(min-width: 1400px)">
                      <source srcset="{{ URL::to('img/hd_1.jpg') }}" media="(min-width: 769px)">
                      <source srcset="{{ URL::to('img/hd_1.jpg') }}" media="(min-width: 577px)">
                      <img srcset="{{ URL::to('img/hd_1.jpg') }}" alt="project_xy" class="d-block img-fluid img-thumbnail"> </picture>
                    <div class="carousel-caption justify-content-center align-items-center">
{{--                       <div class="text-right">
                        <h4><span class="bg-info p-1">farmbot</span></h4>
                        <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
                      </div> --}}
                    </div>
                  </a>
                </div>
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
  </div>
</div>
    
{{-- <h3 class="py-3"><b>{{$project->title}}</b></h3>
<p class="">{{$project->description}}</p> --}}



