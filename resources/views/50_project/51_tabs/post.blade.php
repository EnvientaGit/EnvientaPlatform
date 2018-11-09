{{-- <div class="row m-0 mb-3 box-shadow-bottom">
  <div class="card w-100">
    <h6 class="card-header dtitle p-2">General informations
    <i class="fa fa-pencil-square-o env_edit pull-right" aria-hidden="true" data-toggle="modal" data-target="#simplemde"></i>
    </h6>
      <div class="card-body p-3">
        <p class="card-text text-justify">
          {!! $faq !!}
        </p>
      </div>
  </div>
</div> --}}

<div class="border border-warning rounded alert alert-light alert-dismissible fade show box-shadow-bottom border-secondary" role="alert">
    <div class="row">
      <img src="{{ URL::to('img/language.svg') }}" class="ml-3" height="70" alt="Alert!">
      <div class="right ml-4 text-primary">
        <strong>Hey there!</strong>
        <br>Please keep in mind that we are not tolerate any profanities, obscene, indecent behavior in the post sessions!
        <br>Thank you for your understanding!
      </div>
    </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" class="text-primary">&times;</span>
  </button>
</div>

{{-- THREADS + COMMENTS--}}
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-3 px-0">
      <div class="border card w-100">
        <h3 class="card-header dtitle p-2">Threads</h3>
        <div class="card-body p-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Project administration</a>
            <a class="nav-link" id="v-pills-mentoring-tab" data-toggle="pill" href="#v-pills-mentoring" role="tab" aria-controls="v-pills-mentoring" aria-selected="false">Mentoring</a>
            <a class="nav-link" id="v-pills-investment-tab" data-toggle="pill" href="#v-pills-investment" role="tab" aria-controls="v-pills-investment" aria-selected="false">Investment informations</a>
          </div>
        </div>
        <div class="card-footer p-3">
          <span class="rt-badge badge badge-env" data-toggle="tooltip" data-placement="top" title="Admin panel"><i class="fa fa-exclamation-triangle"></i></span>
          <div class="input-group input-group-sm">
            <input name="cotributors" class="form-control" placeholder="Open new thread" aria-label="Open new theread" aria-describedby="btnGroupAddon3" type="text">
            <div class="input-group-append">
              <button class="env_link_grey env_point input-group-text env_border_rslim" id="btnGroupAddon3" type="submit">
                +
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-9 pr-0">
      <div class="tab-content" id="v-pills-tabContent">

        {{-- pane --}}
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

          <div class="border card w-100 box-shadow-bottom">
            <h3 class="card-header dtitle p-2"><i class="fa fa-comments env_color"></i> Project administration</h3>
            <div class="card-body p-0">

              <div class="card w-100">
                <h6 class="card-header dtitle p-2">
                  <a href="" class="env_link"><i class="far fa-pencil env_color" aria-hidden="true"></i> New post </a>
                  {{--       <a href="" class="env_link"><i class="fa fa-picture-o" aria-hidden="true"></i> Photo/video | </a>
                  <a href="" class="env_link"><i class="fa fa-video-camera" aria-hidden="true"></i> Broadcast</a> --}}
                </h6>
                {{-- Comment section --}}
                <div class="card-footer bg-white border-0 pb-1">
                  <div class="env_wrap">
                    <div class="mr-3">
                      <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
                        <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}"
                        class="img-fluid img-thumbnail rounded-circle border mb-2" height="50" width="50">
                      </a>
                    </div>
                    <div>
                      <textarea  class="form-control" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div class="ml-3">
                      <button type="button" class="btn btn-light border btn-sm" style="margin-right: -0.3em;">Post</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-3">

              @include('50_project.52_newsfeed.feeds')

            </div>
          </div>

        </div>
        {{-- /pane --}}

        {{-- pane --}}
        <div class="tab-pane fade" id="v-pills-mentoring" role="tabpanel" aria-labelledby="v-pills-mentoring-tab">

          <div class="card w-100 box-shadow-bottom border">
            <h3 class="card-header dtitle p-2"><i class="fa fa-comments"></i> Mentoring</h3>
            <div class="card-body p-0">

              <div class="card w-100">
                <h6 class="card-header dtitle p-2">
                  <a href="" class="env_link"><i class="far fa-pencil" aria-hidden="true"></i> New post </a>
                  {{--       <a href="" class="env_link"><i class="fa fa-picture-o" aria-hidden="true"></i> Photo/video | </a>
                  <a href="" class="env_link"><i class="fa fa-video-camera" aria-hidden="true"></i> Broadcast</a> --}}
                </h6>
                {{-- Comment section --}}
                <div class="card-footer bg-white border-0 pb-1">
                  <div class="env_wrap">
                    <div class="mr-3">
                      <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
                        <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}"
                        class="img-fluid img-thumbnail rounded-circle border mb-2" height="50" width="50">
                      </a>
                    </div>
                    <div>
                      <textarea  class="form-control" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div class="ml-3">
                      <button type="button" class="btn btn-light border btn-sm" style="margin-right: -0.3em;">Post</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-3">
              <div class="alert alert-warning p0 rounded" role="alert">This is a sad empty thread... post something for happiness :)</div>
            </div>
          </div>

        </div>
        {{-- /pane --}}

        {{-- pane --}}
        <div class="tab-pane fade" id="v-pills-investment" role="tabpanel" aria-labelledby="v-pills-investment-tab">

          <div class="card w-100 box-shadow-bottom border">
            <h3 class="card-header dtitle p-2"><i class="fa fa-comments"></i> Investment informations</h3>
            <div class="card-body p-0">
              <div class="card w-100">
                <h6 class="card-header dtitle p-2">
                  <a href="" class="env_link"><i class="far fa-pencil" aria-hidden="true"></i> New post </a>
                  {{--       <a href="" class="env_link"><i class="fa fa-picture-o" aria-hidden="true"></i> Photo/video | </a>
                  <a href="" class="env_link"><i class="fa fa-video-camera" aria-hidden="true"></i> Broadcast</a> --}}
                </h6>
                {{-- Comment section --}}
                <div class="card-footer bg-white border-0 pb-1">
                  <div class="env_wrap">
                    <div class="mr-3">
                      <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
                        <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}"
                        class="img-fluid img-thumbnail rounded-circle border mb-2" height="50" width="50">
                      </a>
                    </div>
                    <div>
                      <textarea  class="form-control" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div class="ml-3">
                      <button type="button" class="btn btn-light border btn-sm" style="margin-right: -0.3em;">Post</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-3">
              <div class="alert alert-warning p0 rounded" role="alert">This is a sad empty thread... post something for happiness :)</div>
            </div>
          </div>

        </div>
        {{-- /pane --}}

      </div>

    </div>
  </div>
</div>
