<?php
  function get_project_image($slug) {

    $ret = $blank = url('img/Blank_Box.jpg');

    $project_path = public_path() . "/repo/" . $slug;
    $images_path = $project_path . '/images';
    $images = scandir($images_path);
    $url = url("/repo/" . $slug . '/images') . '/';
    if(is_array($images) && count($images)>=3) {
      $images = array_diff($images, array('.', '..'));
      $images = array_values($images); // need to re-index keys
      if(count($images)>=1) {
        $ret = $url . $images[0];
        //var_dump($images);
      } else {
        $ret = $blank;
      }
    } else {
      $ret = $blank;
    }
    return $ret;
  }
?>
        <div class="container">
          <div class="row">

            @foreach ($projects as $project)
            <div class="col-md-4">
              <div class="border card mb-4 box-shadow-bottom env_card_h">
                <a href="{{ URL::to('project/' . $project->slug) }}">
                  <img class="card-img-top img-fluid env_card_img_h" src="{{ get_project_image($project->slug) }}" alt="Project">
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
                      <i class="fa fa-tags fa-lg text-right text-primary env_point" aria-hidden="true"></i>
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
              <button type="button" name="button" class="border btn btn-primary" data-toggle="modal" data-target="#newProjectModal">
                @lang('front.CREATE_PROJECT')&nbsp;<i class="fas fa-lightbulb"></i>
              </button>
            </div>
          </div>
        </div>

        {{ $projects->links('70_tools.pagination') }}
