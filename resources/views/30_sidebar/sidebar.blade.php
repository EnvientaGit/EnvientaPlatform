<div class="row my-3 box-shadow-bottom">
  <div class="card w-100">
    <h6 class="card-header dtitle p-2">
      <i class="fa fa-info-circle fa-fw mr-1 env_color"></i>Creator of this project
    </h6>
      <div class="card-body p-3">
        <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
          <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}" class="img-fluid img-thumbnail mb-2" height="100" width="100">
        </a>
        <h6 id="avatar_name" class="card-title font-weight-bold mb-2"></h6>
        <p id="avatar_description" class="card-text text-justify"></p>
      </div>
      <div class="card-footer env_uploaded_div pl-2">
        {{--
        <p class="env_p">Uploaded at XXX</p>
        --}}
      </div> 
  </div>
</div>

@if ($project->members)

  <div class="row my-3 box-shadow-bottom">
  <div class="card w-100">
    <h6 class="card-header dtitle p-2">
      <i class="fa fa-briefcase fa-fw mr-1 env_color"></i>Contributors of this project
      <i class="fa fa-pencil-square-o pull-right" style="display: block;"></i>
    </h6>
      <div class="card-body p-3">

        @foreach ($project->members as $member)
          <div class="card bg-light mb-1">
            <div class="mx-1">
              <i class="fa fa-times pull-right env_contr_del" aria-hidden="true"></i>
              <p class="card-text text-justify text-truncate" title="{{ $member->user->skills }}">
                  @if ($member->user->id == $project->owner)
                    <span class="lt-badge badge badge-dark" data-toggle="tooltip" data-placement="top" title="Project owner"><i class="fa fa-user"></i></span>
                  @endif
                  {{ $member->user->realname }}
              </p>
            </div>
          </div>
        @endforeach
<!--
        <div class="card bg-light mb-1">
            <div class="mx-1">
              <i class="fa fa-times pull-right env_contr_del" aria-hidden="true"></i>
              <p class="card-text text-justify text-truncate" title="web and multimeda developer">
                Tony Stark as chief engineer and developer
              </p>
            </div>
        </div>
        <div class="card bg-light mb-1">
            <div class="mx-1">
              <i class="fa fa-times pull-right env_contr_del" aria-hidden="true"></i>
              <p class="card-text text-justify text-truncate" title="web and multimeda developer">
                Joe Williams as Software engineer and tasker
              </p>
            </div>
        </div>
        <div class="card bg-light mb-1">
            <div class="mx-1">
              <i class="fa fa-times pull-right env_contr_del" aria-hidden="true"></i>
              <p class="card-text text-justify text-truncate" title="web and multimeda developer">
                Mate Molnar as web and multimeda developer
              </p>
            </div>
        </div>
-->
      </div>
      <div class="card-footer p-3 admin-box">
        <span class="rt-badge badge badge-dark" data-toggle="tooltip" data-placement="top" title="Admin panel"><i class="fa fa-exclamation-triangle"></i></span>
        <div class="input-group input-group-sm">
          <div class="input-group-prepend">
            <button class="env_link_grey env_point input-group-text env_border_rslim" id="btnGroupAddon2" type="submit">
                Invite
            </button>
          </div>
          <input name="cotributors" class="form-control" placeholder="a new member" aria-label="Input group example" aria-describedby="btnGroupAddon2" type="text">
        </div>
      </div>
  </div>
</div>

@endif

<div class="row my-3 box-shadow-bottom">
  <div class="card w-100 border-0">
    <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><img src="{{ URL::to('img/CC_BY_SA_blue.svg') }}" alt="CC_BY_SA" class="img-fluid p-0 rounded"></a>
  </div>
</div>

{{-- <div class="row mb-3 box-shadow-bottom">
  <div class="card">
    <h6 class="card-header dtitle p-2">License type </h6>
      <div class="card-body p-3">
        <h4><i class="fa fa-creative-commons fa-fw env_color"></i> BY-SA</h4>
        <p class="card-text text-justify">
          This license lets others remix, tweak, and build upon your work even for commercial purposes, as long as they credit you and license their new creations under the identical terms. This license is often compared to “copyleft” free and open source software licenses. All new works based on yours will carry the same license, so any derivatives will also allow commercial use. This is the license used by Wikipedia, and is recommended for materials that would benefit from incorporating content from Wikipedia and similarly licensed projects.
        </p>
      </div>
  </div>
</div> --}}

<div class="row my-3 box-shadow-bottom">
  <div class="card w-100 admin-box">
    
    <h6 class="card-header dtitle p-2">
      <i class="fa fa-eye-slash fa-fw mr-1 env_color"></i> Private Project
      <span class="rt-badge badge badge-dark" data-toggle="tooltip" data-placement="top" data-toggle="tooltip" data-placement="top" title="Admin panel"><i class="fa fa-exclamation-triangle"></i></span>
    </h6>
      <div class="card-body p-3">

        <div class="form-row align-items-center">
          <div class="col">
            <select name="status" class="custom-select mr-sm-2" id="projectStatus">
              <option @if ($project->public == 0) SELECTED @endif value="0">Private</option>
              <option @if ($project->public == 1) SELECTED @endif value="1">Public</option>
            </select>
          </div>
          <div class="col-auto">
            <button id="btnStatus" type="button" class="btn btn-primary">Set Status</button>
          </div>
        </div>
        <div class="form-row align-items-center text-center">
          <small class="form-text text-muted w-100">
            <i class="fa fa-exclamation-triangle"></i> Pubilc projects are visible for everyone!
          </small>
        </div>

      </div>
  </div>
</div>



<script type="text/javascript">
  $.ajax({
    url: "http://hu.gravatar.com/{{$avatar_hash}}.json",
    jsonp: "callback",
    dataType: "jsonp", 
    success: function( response ) {
        $('#avatar_name').html(response.entry[0].name.formatted);
        $('#avatar_description').html(response.entry[0].aboutMe);
        console.log( response );
    }
  });
  @if($project->owner == Auth::user()->id)
    $('#btnStatus').click(function(e) {
      e.preventDefault();
      var projectStatus = $('#projectStatus option:selected').val();
      console.log(projectStatus);

      $.ajax({
        url: '{{ url()->current() }}',
        type: 'POST',
        data: {'projectStatus': projectStatus},
        /*success: function(data) {
          console.log(data);
        };*/
      });

    });
  @endif

</script>

