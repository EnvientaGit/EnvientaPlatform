{{-- Comment section --}}
<div class="env_wrap">
    <div class="mr-3">
      <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
      <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}" 
        class="img-fluid img-thumbnail rounded-circle border mb-2" height="50" width="50">
      </a>
    </div>
    <div>
      <textarea  class="form-control" placeholder="Write a comment…"></textarea>
    </div>
    <div class="ml-3">
      <button type="button" class="btn btn-light border btn-sm" style="margin-right: -0.3em;">Post</button>
    </div>
</div>
