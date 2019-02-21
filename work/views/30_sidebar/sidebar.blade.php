<div class="row my-3">
  <div class="col-md-12">
    <div class="border card w-100 box-shadow-bottom">
      <h6 class="card-header dtitle p-2">
        <i class="fa fa-info-circle fa-fw mr-1 env_color"></i>Creator of this project
      </h6>
        <div class="card-body p-3 text-center">
          <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
            <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}" class="img-fluid img-thumbnail mb-2" height="100" width="100">
          </a>
          <h6 id="avatar_name" class="card-title font-weight-bold mb-2"></h6>
        </div>
        <div class="card-footer env_uploaded_div pl-2">
          <p class="text-center">
            <a data-toggle="modal" data-target="#ownerDescriptionModal">
              <i class="far fa-glasses fa-xs text-primary"></i>
              <small>More about the creator</small>
            </a>
          </p>
          {{--
          <p class="env_p">Uploaded at XXX</p>
          --}}
        </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ownerDescriptionModal" tabindex="-1" role="dialog" aria-labelledby="ownerDescriptionModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header bg-light p-2">
        <h5 class="modal-title">More info about the creator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times fa-xs"></i>
        </button>
      </div>

      <div class="card-body p-3" id="avatar_description">
        
      </div>
    </div>
  </div>
</div>

@if (count($project->members) || (Auth::user() && $project->owner == Auth::user()->id))
  <div class="row my-3">
    <div class="col-md-12">
      <div class="border card w-100 box-shadow-bottom">
        <h6 class="card-header dtitle p-2">
          <i class="fa fa-pencil-square-o mr-1 env_color"></i>Contributors of this project
        </h6>
        <div class="card-body p-3 contributors" id="contributors">

          <span id="project_members">
          @include('30_sidebar.members')
          </span>

          @if(Auth::user() && $project->owner == Auth::user()->id)
          <span class="rt-badge badge badge-env" data-toggle="tooltip" data-placement="top" title="Admin panel"><i class="fa fa-exclamation-triangle"></i></span>
          <div class="input-group input-group-sm">
            <input name="newMemberInput" id="newMemberInput" class="form-control" placeholder="E-mail address" aria-label="New member e-mail address" aria-describedby="btnGroupAddon2" type="text" autocomplete="off">
            <div class="input-group-append">
              <button class="env_link_grey env_point input-group-text env_border_rslim" id="newContributorAddBtn">
                Add
              </button>
            </div>
          </div>
          @endif

        </div>
      </div>
    </div>
  </div>
@endif

@if(Auth::user() && $project->owner == Auth::user()->id)
<div class="row my-3">
  <div class="col-md-12">
    <div class="card w-100 border box-shadow-bottom" id="projectStatusController">

      <h6 class="card-header dtitle p-2">
        @if ($project->public == 0)
          <i class="fa fa-eye-slash fa-fw mr-1 env_color"></i> <span>Private</span> Project
        @endif
        @if ($project->public == 1)
          <i class="fa fa-eye fa-fw mr-1 env_color"></i> <span>Public</span> Project
        @endif
        <span class="rt-badge badge badge-env" data-toggle="tooltip" data-placement="top" data-toggle="tooltip" data-placement="top" title="Admin panel"><i class="fa fa-exclamation-triangle"></i></span>
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
              <i class="fa fa-exclamation-triangle text-primary"></i> Pubilc projects are visible for everyone!
            </small>
          </div>
        </div>
    </div>
  </div>
</div>
@endif

<div class="row my-3">
  <div class="col-md-12">
    <div class="card w-100 border-0 box-shadow-bottom">
      <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><img src="{{ URL::to('img/CC_BY_SA_blue.svg') }}" alt="CC_BY_SA" class="img-fluid p-0 rounded"></a>
    </div>
  </div>
</div>

@extrajs
<script type="text/javascript">
  $.ajax({
    url: "http://hu.gravatar.com/{{$avatar_hash}}.json",
    jsonp: "callback",
    dataType: "jsonp",
    success: function( response ) {
        $('#avatar_name').html(response.entry[0].name.formatted);
        $('#avatar_description').html(response.entry[0].aboutMe);
        //console.log( response );
    }
  });

  $('.gravatar_name').each(function() {
    var _this = $(this);
    $.ajax({
      url: "http://hu.gravatar.com/" + _this.data('gravatar-hash') + ".json",
      jsonp: "callback",
      dataType: "jsonp",
      success: function( response ) {
        _this.html(response.entry[0].name.formatted);
      }
    });
  });

  @if(Auth::user() && $project->owner == Auth::user()->id)

    $("#newContributorAddBtn").click(function() {
        $.ajax({
          url: '{{ url()->current() }}',
          type: 'POST',
          data: {'addMember': $('#newMemberInput').val()},
          complete: function(data) {
            if(data.responseText=='already_member') {
              alert($('#newMemberInput').val() + " is already a contributor of this project!");
            } else {
              $('#project_members').load('{{ url()->current() }}/members');
            }
            $("#newMemberInput").val('');
          },
          headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        });
    });

    // delete contributor
    $(".contributors").on("click", ".contributor-del", function(e){
      e.preventDefault();
      var $this = $(this);
      var memberId = $this.attr("rel");
      var memberName = $this.closest(".card").text().trim();
      var ret = confirm("Are you sure to remove "+memberName+"\nfrom the contributor list?");
      if(ret===true) {
        $.ajax({
          url: '{{ url()->current() }}',
          type: 'POST',
          data: {'removeMember': memberId},
          complete: function(data) {
            $this.closest(".card").remove();
          },
          headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        });
      }
    });

    // set project status
    $('#btnStatus').click(function(e) {
      e.preventDefault();
      var projectStatus = $('#projectStatus option:selected').val();
      if(projectStatus==1) {
          $("#projectStatusController h6 i").removeClass("fa-eye-slash").addClass("fa-eye");
          $("#projectStatusController h6 span:first-of-type").text("Public");
      } else {
          $("#projectStatusController h6 i").removeClass("fa-eye").addClass("fa-eye-slash");
          $("#projectStatusController h6 span:first-of-type").text("Private");
      }

      $.ajax({
        url: '{{ url()->current() }}',
        type: 'POST',
        data: {'projectStatus': projectStatus},
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
      });

    });
  @endif

</script>
@endextrajs