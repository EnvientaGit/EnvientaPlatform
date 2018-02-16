<div class="row my-3 box-shadow-bottom">
  <div class="card w-100">
    <h6 class="card-header dtitle p-2">
      <i class="fa fa-info-circle fa-fw mr-1 env_color"></i>The creator of the project
    </h6>
      <div class="card-body p-3"><a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
        <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}" class="img-fluid img-thumbnail mb-2" height="100" width="100"></a>
        <h6 id="avatar_name" class="card-title font-weight-bold mb-2"></h6>
        <p id="avatar_description" class="card-text text-justify"></p>
      </div>
{{--       <div class="card-footer env_uploaded_div pl-2">
        <p class="env_p">Uploaded at XXX</p>
      </div> --}}
  </div>
</div>

<div class="row my-3 box-shadow-bottom">
  <div class="card w-100 border-0">
    <img src="{{ URL::to('img/CC_BY_SA_blue.svg') }}" alt="CC_BY_SA" class="img-fluid p-0 rounded">
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
</script>

