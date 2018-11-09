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
          <h6 id="avatar_name" class="card-title font-weight-bold mb-2">{{ $project->owner()->first()->realname }}</h6>
          {{--
          <p id="avatar_description" class="card-text text-center">
            {{ $project->owner()->first()->bio }}
          </p>
          --}}
        </div>
        <div class="card-footer env_uploaded_div pl-2">
          <p class="text-center"><a data-toggle="modal" data-target="#ownerDescriptionModal"><small>More about the creator</small></a></p>
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

      <h6 class="card-header dtitle p-2">{{ $project->owner()->first()->realname }}
        <i class="fa fa-times env_edit pull-right text-secondary" aria-hidden="true" data-dismiss="modal" aria-label="Close"></i>
      </h6>

      <div class="card-body p-3">
        {{ $project->owner()->first()->bio }}
      </div>
    </div>
  </div>
</div>

@if ($project->members)

  <div class="row my-3">
    <div class="col-md-12">
      <div class="border card w-100 box-shadow-bottom">
        <h6 class="card-header dtitle p-2">
          <i class="fa fa-pencil-square-o mr-1 env_color"></i>Contributors of this project
        </h6>
        <div class="card-body p-3 contributors" id="contributors">

          @foreach ($project->members as $member)
            <div class="card bg-light mb-1">
              <div class="mx-1">
                @if (Auth::user() && $project->owner == Auth::user()->id && $member->user->id != $project->owner)
                  <a href="#" class="fa fa-times pull-right contributor-del" aria-hidden="true" rel="{{ $member->id }}" title="Remove from Contributors"></a>
                @endif
                <p class="card-text text-justify text-truncate" title="{{ $member->user->skills }}">
                    @if ($member->user->id == $project->owner)
                      <span class="pull-right lt-badge badge badge-dark" data-toggle="tooltip" data-placement="top" title="Project owner"><i class="fa fa-user"></i></span>
                    @endif
                    {{ $member->user->realname }}
                </p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="row my-3">
    <div class="col-md-12">
      <div class="card w-100 border box-shadow-bottom">
        <h6 class="card-header dtitle p-2">
          <i class="fa fa-pencil-square-o mr-1 env_color"></i>Add new member
        </h6>
        <div class="card-body p-3">
          <span class="rt-badge badge badge-dark" data-toggle="tooltip" data-placement="top" title="Admin panel"><i class="fa fa-exclamation-triangle"></i></span>
          <div class="input-group input-group-sm">
            <input name="cotributors" id="cotributors" class="form-control" placeholder="Search member" aria-label="Search member" aria-describedby="btnGroupAddon2" type="text" autocomplete="off">
            <div class="input-group-append">
              <button class="env_link_grey env_point input-group-text env_border_rslim" id="newContributorAddBtn">
                Add
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endif

{{-- <div class="row mb-3">
  <div class="card box-shadow-bottom">
    <h6 class="card-header dtitle p-2">License type </h6>
      <div class="card-body p-3">
        <h4><i class="fa fa-creative-commons fa-fw env_color"></i> BY-SA</h4>
        <p class="card-text text-justify">
          This license lets others remix, tweak, and build upon your work even for commercial purposes, as long as they credit you and license their new creations under the identical terms. This license is often compared to “copyleft” free and open source software licenses. All new works based on yours will carry the same license, so any derivatives will also allow commercial use. This is the license used by Wikipedia, and is recommended for materials that would benefit from incorporating content from Wikipedia and similarly licensed projects.
        </p>
      </div>
  </div>
</div> --}}

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
</div>

<div class="row my-3">
  <div class="col-md-12">
    <div class="card w-100 border-0 box-shadow-bottom">
      <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><img src="{{ URL::to('img/CC_BY_SA_blue.svg') }}" alt="CC_BY_SA" class="img-fluid p-0 rounded"></a>
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

  @if(Auth::user() && $project->owner == Auth::user()->id)

    var newMemberId = 0;
    var newMemberName = '';

    $("#newContributorAddBtn").click(function() {

      if(newMemberId>0) {

        var newMemberRow = '<div class="card bg-light mb-1"><div class="mx-1"><a href="#" class="fa fa-times pull-right contributor-del" aria-hidden="true" rel="{memberId}" title="Remove from Contributors"></a><p class="card-text text-justify text-truncate" title="{memberName}">{memberName}</p></div></div>';

        $.ajax({
          url: '{{ url()->current() }}',
          type: 'POST',
          data: {'addMember': newMemberId},
          complete: function(data) {

            if(data.responseText=='done') {
              newMemberRow = newMemberRow.replace(/{memberId}/g, newMemberId).replace(/{memberName}/g, newMemberName);
              $("#contributors").append(newMemberRow);
            } else if(data.responseText=='already_member') {
              alert(newMemberName+" is already a contributor of this project!");
            }

            newMemberId = 0;
            newMemberName = '';

            $("#cotributors").val('');
          },
          headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        });
      }
    });

    function memberSelected(item) {
      newMemberId = item.value;
      newMemberName = item.text;
    }

    $("#cotributors").typeahead({
      valueField: 'id',
      displayField: 'realname',
      scrollBar: true,
      items: 20,
      onSelect: memberSelected,
      ajax: {
        url: 'user/list',
        method: 'get',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
      }
    });

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
