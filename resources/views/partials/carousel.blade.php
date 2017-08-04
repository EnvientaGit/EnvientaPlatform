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
            <source srcset="img/1440x600_1.jpg" media="(min-width: 1400px)">
            <source srcset="img/1440x600_1.jpg" media="(min-width: 769px)">
            <source srcset="img/1440x600_1.jpg" media="(min-width: 577px)">
            <img srcset="img/1440x600_1.jpg" alt="responsive image" class="d-block img-fluid"> </picture>
          <div class="carousel-caption">
            <div class="text-left">
              <h4><span class="bg-info p-1">Project_Name</span></h4>
              <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
            </div>
          </div>
        </a>
      </div>
      <!-- /.carousel-item -->
      <div class="carousel-item">
        <a href="#">
          <picture>
            <source srcset="img/1440x600_2.jpg" media="(min-width: 1400px)">
            <source srcset="img/1440x600_2.jpg" media="(min-width: 769px)">
            <source srcset="img/1440x600_2.jpg" media="(min-width: 577px)">
            <img srcset="img/1440x600_2.jpg" alt="responsive image" class="d-block img-fluid"> </picture>
          <div class="carousel-caption justify-content-center align-items-center">
            <div class="text-right">
              <h4><span class="bg-info p-1">Project_Name</span></h4>
              <p><span class="bg-danger p-1">We meticously build each site to get results</span></p>
            </div>
          </div>
        </a>
      </div>
      <!-- /.carousel-item -->
      <div class="carousel-item">
        <a href="#">
          <picture>
            <source srcset="img/1440x600_3.jpg" media="(min-width: 1400px)">
            <source srcset="img/1440x600_3.jpg" media="(min-width: 769px)">
            <source srcset="img/1440x600_3.jpg" media="(min-width: 577px)">
            <img srcset="img/1440x600_3.jpg" alt="responsive image" class="d-block img-fluid"> </picture>
          <div class="carousel-caption justify-content-center align-items-center">
            <div class="text-center">
              <h4><span class="bg-info p-1">Project_Name</span></h4>
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
  <!-- /.carousel -->
  <div class="container-fluid text-center">
    <p>Full width carousel with a maximum height and art direction. Resize window to see image change based on the size of the window.</p>
  </div>