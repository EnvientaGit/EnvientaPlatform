<!-- vlinks modal -->
<div class="modal fade" id="vlinks_modal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-light p-2">
        <h5 class="modal-title">Image slider of {{$project->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times fa-xs"></i>
        </button>
      </div>
      <div class="card-body p-3" style="margin: -1em;">

        <!-- Inner Image Slider -->
        <div id="vlinks_slider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            @foreach($images as $idx => $image)
            <li data-target="#carousel" data-slide-to="{{ $idx }}" class="{{ $idx == 0 ? 'active': ''}}"></li>
            @endforeach
          </ol>
          <div class="carousel-inner">
            @foreach($images as $idx => $image)
            <div class="carousel-item {{ $idx == 0 ? 'active': ''}}">
              <img class="d-block img-fluid slink_img" src="{{$image}}" alt="">
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Inner Image Slider -->

      </div>
      <div class="card-footer p-2 text-right">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

