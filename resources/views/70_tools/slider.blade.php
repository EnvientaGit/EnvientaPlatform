  <div class="">
    <div class="container p-3 bg-warning">
      <div class="row">
        <div class="col-md-8 bg-warning">
          <div class="embed-responsive<!--  embed-responsive-16by9 -->">
            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KTAiOtJoD-4" allowfullscreen=""> </iframe> -->
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <a href="#">
                    <!-- 
                            If you need more browser support use https://scottjehl.github.io/picturefill/
                            If a picture looks blurry on a retina device you can add a high resolution like this
                            <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">
        
                            What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                             -->
                    <picture>
                      <source srcset="{{ URL::to('img/farmbot.jpg') }}" media="(min-width: 1400px)">
                      <source srcset="{{ URL::to('img/farmbot.jpg') }}" media="(min-width: 769px)">
                      <source srcset="{{ URL::to('img/farmbot.jpg') }}" media="(min-width: 577px)">
                      <img srcset="{{ URL::to('img/farmbot.jpg') }}" alt="responsive image" class="d-block img-fluid"> </picture>
                    <div class="carousel-caption">
                      <div class="text-left">
                        <h4><span class="bg-info p-1">Farmbot</span></h4>
                        <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                  <a href="#">
                    <picture>
                      <source srcset="{{ URL::to('img/farmbot2.jpg') }}" media="(min-width: 1400px)">
                      <source srcset="{{ URL::to('img/farmbot2.jpg') }}" media="(min-width: 769px)">
                      <source srcset="{{ URL::to('img/farmbot2.jpg') }}" media="(min-width: 577px)">
                      <img srcset="{{ URL::to('img/farmbot2.jpg') }}" alt="responsive image" class="d-block img-fluid"> </picture>
                    <div class="carousel-caption justify-content-center align-items-center">
                      <div class="text-right">
                        <h4><span class="bg-info p-1">Farmbot2</span></h4>
                        <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- /.carousel-item -->
                <div class="carousel-item">
                  <a href="#">
                    <picture>
                      <source srcset="{{ URL::to('img/farmbot.jpg') }}" media="(min-width: 1400px)">
                      <source srcset="{{ URL::to('img/farmbot.jpg') }}" media="(min-width: 769px)">
                      <source srcset="{{ URL::to('img/farmbot.jpg') }}" media="(min-width: 577px)">
                      <img srcset="{{ URL::to('img/farmbot.jpg') }}" alt="responsive image" class="d-block img-fluid"> </picture>
                    <div class="carousel-caption justify-content-center align-items-center">
                      <div class="text-center">
                        <h4><span class="bg-info p-1">farmbot</span></h4>
                        <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- /.carousel-item -->
              </div>
              <!-- /.carousel-inner -->
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
          </div>
          <div class="row px-3 stp">
            <div class="col-md-12 bg-info" style="text-align: center;"><span class="text-info"><b class="text-white">SHARE THIS PROJECT</b></span></div>
            <div class="col-md-12" style="padding-left: 0px;">
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;Facebook</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-twitter-square"></i>&nbsp;&nbsp;Twitter</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-google-plus-square"></i>&nbsp;&nbsp;Google +</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-linkedin-square"></i>&nbsp;&nbsp;LinkedIn</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-pinterest-square"></i>&nbsp;&nbsp;Pinterest</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-reddit-square"></i>&nbsp;&nbsp;Reddit</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 bg-warning">
          <div class="pull-right e_pencil"> <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> </div>
          <h3 class="py-3"><b>{{$project->title}}</b></h3>
          <p class="">{{$project->description}}</p>
          <a class="btn btn-info btn-block btn-lg" href="#">JOIN THIS PROJECT<i class="fa"></i></a>
          <a class="btn btn-danger btn-block btn-lg" href="#">DONATE THIS PROJECT<i class="fa"></i></a>
        </div>
      </div>
    </div>
  </div>