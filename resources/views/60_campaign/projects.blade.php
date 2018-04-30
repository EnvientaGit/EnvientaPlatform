<?php
  function get_project_image($slug) {
    $project_path = public_path() . "/repo/" . $slug;
    $images_path = $project_path . '/images';
    $images = scandir ($images_path);
    return url("/repo/" . $slug . '/images') . '/' . $images[2];
  }
?>
        @include('60_campaign.61_intro.knowhow')

        <div class="container">
          <div class="row">

            @foreach ($projects as $project)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom env_card_h">
                <a href="{{ URL::to('project/' . $project->slug) }}">
                  <img class="card-img-top img-fluid env_card_img_h" src="{{ get_project_image($project->slug) }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">
                    <a class="env_link_color" href="{{ URL::to('project/' . $project->slug) }}">{{$project->title}}</a>
                  </h5>                  
                  <p id="env_paragraph" class="card-text text-justify">
                    {{$project->description}}
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</small>
                    <div class="env_tooltip">
                      <i class="fa fa-tags fa-lg text-right text-info env_point" aria-hidden="true"></i>
                      <span class="env_tooltiptext">
                        <?php $tags = $project->tags ? explode(' ', $project->tags) : array(); ?>
                        @foreach($tags as $tag)
                          <button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill">
                            <a id="env_link" href="#">{{$tag}}</a>
                          </button>
                        @endforeach
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <div class="row">
            <div class="col-md-12 text-right mt-3">
                <i class="fa fa-plus-square fa-3x env_edit pull-right text-info" 
                          data-toggle="modal"
                          data-toggler="tooltip"
                          data-placement="left" 
                          title="Create new project" 
                          data-target="#newProjectModal">
                </i>
            </div>
          </div>
        </div>

        {{ $projects->links('70_tools.pagination') }}

<script>
  $(function () {
    $('[data-toggler="tooltip"]').tooltip()
  })
</script>













