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

<div class="alert alert-light alert-dismissible fade show box-shadow-bottom border-secondary" role="alert">
    <div class="row">
      <img src="{{ URL::to('img/language.svg') }}" class="ml-3" height="70" alt="Alert!">
      <div class="right ml-4">
        <strong>Hey there!</strong>
        <br>Please keep in mind that we are not tolerate any profanities, obscene, indecent behavior in the post sessions!
        <br>Thank you for your understanding!
      </div>
    </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="row m-0 mb-3 box-shadow-bottom">
  <div class="card w-100">
    <h6 class="card-header dtitle p-2">
      <a href="" class="env_link"><i class="fa fa-pencil" aria-hidden="true"></i> Make post </a>
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

@include('50_project.52_newsfeed.feeds')










