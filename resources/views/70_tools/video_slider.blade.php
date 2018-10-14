<div class=""><!-- Video slider -->
  <div id="vlinkCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#vlinkCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#vlinkCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Carousel items -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-3">
            <a href=".">
              <img src="img/1920x500_3.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
          <div class="col-md-3">
            <a href=".">
              <img src="img/1920x500_2.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
          <div class="col-md-3">
            <a href=".">
              <img src="img/1920x800_1.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
          <div class="col-md-3">
            <a href=".">
              <img src="img/1920x800_3.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
        </div>
        <!--.row-->

      </div>
      <!--.item-->

      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3">
            <a href=".">
              <img src="img/800x600_5.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
          <div class="col-md-3">
            <a href=".">
              <img src="img/1024x600.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
          <div class="col-md-3">
            <a href=".">
              <img src="img/1280x960_1.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
          <div class="col-md-3">
            <a href=".">
              <img src="img/1440x700_3.jpg" class="vlink_img img-thumbnail img-fluid" alt="Image" style="max-width:100%;">
            </a>
          </div>
        </div>
        <!--.row-->
      </div>
      <!--.item-->

    </div>
    <!--.carousel-inner-->
  </div>
  <!--.Carousel-->
</div><!-- Video slider -->

<style media="screen">
.vlink_img {
    height: 8em !important;
    object-fit: cover;
    object-position: center;
}
.vlink .carousel-indicators {
  left: -50%;
  top: auto;
  bottom: 0.5em;

}

/* The colour of the indicators */
.vlink .carousel-indicators li {
  background: #a3a3a3;
  border-radius: 50%;
  width: 2em;
  height: 2em;
  cursor: pointer !important;
}

.vlink .carousel-indicators .active {
  background: #707070;
}
.vlink .carousel-indicators li {
    margin-right: auto;
    margin-left: auto;
}
.vlink .carousel-indicators {
    right: -50%;
    margin-right: auto;
    margin-left: auto;
}
</style>

<script type="text/javascript">
  // optional
  $('#vlinkCarousel').carousel({
    interval: 5000
  });
</script>
