{{-- Posted section --}}
<div class="row m-0 mb-3 box-shadow-bottom">
  <div class="card w-100">
    <h6 class="card-header dtitle p-2 bg-white border-0">
      <!-- Split dropleft button -->
      <div class="btn-group pull-right">
        <div class="btn-group dropleft" role="group">
          <i type="button" class="fa fa-ellipsis-h text-info dropdown-toggle-split env_point"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          </i>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
              <i class="fa fa-bookmark-o" aria-hidden="true"></i> Save post
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Embed</a>
            <a class="dropdown-item" href="#">Turn on notifications for this post</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-exclamation" aria-hidden="true"></i> Report post
            </a>
          </div>
        </div>
      </div>
      <div class="mr-3">
        <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank" class="pull-left">
        <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}"
          class="img-fluid img-thumbnail rounded-circle border mt-2" height="50" width="50"
          style="margin-left: 0.7em;">
        </a>
        <div class="pull-left ml-3 mt-2">
          <a href="https://www.gravatar.com/{{$avatar_hash}}" class="env_link">
            <strong>Mate Molnar</strong>
          </a><br>
          <small>41 mins</small>
        </div>
      </div>
    </h6>
      <div class="card-body p-3 bg-white env_wrap">
          <div class="form-group w-100 mb-0">
            <p class="text-justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, dolore! Praesentium accusamus enim, similique sint veniam magnam ex at voluptate ducimus est officiis recusandae tempora perferendis sequi quos quod veritatis ratione optio doloremque labore illo consequuntur. Nisi deserunt qui dolor amet inventore error aliquid molestias, provident beatae nemo, tempora commodi porro earum eum at quam labore natus! Fuga commodi explicabo tempora cum vero nesciunt, molestias. Mollitia explicabo, unde illum natus ut a rem laudantium sit, soluta nisi officiis nihil at, temporibus dicta impedit illo quis. Deleniti, porro, et. Doloremque, debitis. Aut magni soluta, ullam explicabo saepe reiciendis amet error! Officia.
            </p>
            <hr class="my-0">
            <span>
              <button type="button" class="btn btn-outline-primary btn-sm pull-left my-3">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Like</button>
              <span class="text-primary btn-sm pull-left my-3 ml-2">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i> 4</span>
              <button type="button" id="reveal_write_back" class="btn btn-light btn-sm pull-right my-3 border">Reply</button>
            </span>
          </div>
      </div>

      {{-- Write_reply --}}
      <div id="show_write_back" class="card-footer grady pb-1" style="display: none;">
        @include('50_project.52_newsfeed.write_reply')
      </div>

      {{-- Commented Section --}}
      @include('50_project.52_newsfeed.commented')

      {{-- Replied Section --}}
      @include('50_project.52_newsfeed.replied')

      {{-- Re-Replied Section --}}
      @include('50_project.52_newsfeed.re_replied')

      {{-- Comment section --}}
{{--       <div class="card-footer pb-1">
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
                <button type="button" class="btn btn-light border btn-sm" style="margin-right: -0.3em;">Reply</button>
              </div>
          </div>
      </div> --}}

  </div>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $(document).ready(function(){
    $('#reveal_write_back').click(function(){
      $(this).html($('#reveal_write_back').text() == 'Reply' ? 'Cancel' : 'Reply');
      $('#show_write_back').slideToggle("fast");
    });
  });

</script>
