<div class="card-footer bg-white border-0 pb-1">
  <hr>
    <div class="env_wrap_reply">
        <div></div>
        <div class="mr-3">
          <a href="https://www.gravatar.com/{{$avatar_hash}}" target="_blank">
          <img src="{{ "https://www.gravatar.com/avatar/" . $avatar_hash . "?s=100"}}"
            class="img-fluid img-thumbnail rounded-circle border mb-2" height="50" width="50">
          </a>
        </div>
        <div>
          <a href="https://www.gravatar.com/{{$avatar_hash}}" class="env_link">
            <strong>Mate Molnar</strong>
          </a>
          <!-- Split dropleft button -->
          <div class="btn-group pull-right">
            <div class="btn-group dropleft" role="group">
              <i type="button" class="fa fa-ellipsis-h text-info dropdown-toggle-split env_point"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </i>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">
                  <i class="fa fa-edit" aria-hidden="true"></i> Edit
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Embed</a>
                <a class="dropdown-item" href="#">Turn on notifications for this post</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-times" aria-hidden="true"></i> Delete
                </a>
              </div>
            </div>
          </div>
          <br>
          <small>41 mins</small>
          <p class="text-justify mt-3">
            <a href="https://www.gravatar.com/{{$avatar_hash}}" class="env_link">
              <strong>Mate Molnar - </strong>
            </a>
            According to the Selected - Re-replied ipsum dolor sit amet, consectetur adipisicing elit. Assumenda harum blanditiis minus minima sequi adipisci? Ex incidunt sunt hic temporibus quos nesciunt nobis aliquid ipsam illum, libero nihil voluptatem iste provident, veritatis laborum quidem autem, suscipit pariatur ipsum non. Sapiente distinctio incidunt doloremque quod. Doloremque sunt, fugiat eveniet fugit officia.
          </p>
          <button type="button" class="btn btn-outline-primary btn-sm pull-left">
            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Like
          </button>
          <span class="text-primary btn-sm pull-left mb-3">
            <i class="fa fa-thumbs-up" aria-hidden="true"></i> 12
          </span>
          <button type="button" id="reveal_write_replied" class="btn btn-light btn-sm pull-right border">Reply</button>
        </div>
    </div>
</div>


{{-- Write_reply --}}
<div id="show_write_replied" class="card-footer grady pb-1" style="display: none;">
  @include('50_project.52_newsfeed.write_reply')
</div>

<script>
  $(document).ready(function(){
    $('#reveal_write_replied').click(function(){
      $(this).html($('#reveal_write_replied').text() == 'Reply' ? 'Cancel' : 'Reply');
      $('#show_write_replied').slideToggle("fast");
    });
  });
</script>
