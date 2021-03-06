<div class="modal fade" id="newProjectModal" tabindex="-1" role="dialog" aria-labelledby="newProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="{{ URL::to('project/new') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-header bg-light p-2">
        <h5 class="modal-title">@lang('project.NEW_PROJECT')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times fa-xs"></i>
        </button>
      </div>
      <div class="card-body p-3">

          <div class="form-group">
            <label for="title" class="mb-0">@lang('project.TITLE')</label>
            <input name="title" type="text" class="btn-sm form-control" id="title"
            	 placeholder="" required="required">
          </div>
          <div class="form-group">
            <label for="description" class="mb-0">@lang('project.DESCRIPTION')</label>
            <textarea name="description" class="btn-sm form-control" id="description" aria-describedby="descriptionHelp" placeholder="Write a description" rows="3" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="tags" class="mb-0">@lang('project.TAGS')<small id="descriptionHelp" class="text-muted">(max. 6)</small></label>
            <input name="tags" type="text" class="btn-sm form-control taglist" id="tags" placeholder="">
          </div>

          <!-- YouTube Link input section -->
          <div class="form-group">
            <label for="vid_link" class="mb-0">@lang('project.VIDEO')</label>
            <input name="vid_link" type="text" class="btn-sm form-control" id="vid_link" placeholder="">
          </div>
          <!-- YouTube Link input section -->

          <div class="form-group">
            <label for="images" class="mb-0">
            	@lang('project.IMAGES')
            	<small class="text-muted">@lang('project.IMAGES_HELP')</small>
            </label>
       		<div id="selectedImages"></div>
            <div style="position: relative; left: 0px; top: 0px; height: 60px;" class="mb-3">
              <div class="btn btn-outline-primary" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
				<i class="far fa-cloud-upload fa-2x text-primary" aria-hidden="true"></i>
              	&nbsp; @lang('project.IMAGES_HELP2')
              </div>
              <input id="env_point" type="file" name="images[]" 
                accept="image/x-png,image/gif,image/jpeg" 
                style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity:0;" 
                required="true" multiple="true">
            </div>
          </div>
          
          <div class="form-group mb-0">
            <label for="license" class="mb-0"><b>License:</b> Creative Commons - Attribution + ShareAlike
              <small class="text-muted" style="display: none;">(Regularly used <a href="https://creativecommons.org/" class="env_link text-success" target="_blank">Creative Commons</a> license)</small>
              <i class="far fa-glasses ml-1 text-primary" data-trigger="focus" role="button" tabindex="0" data-placement="left" data-toggle="popover" title="More about CC-BY-SA" data-content="This license lets others remix, tweak, and build upon your work even for commercial purposes, as long as they credit you and license their new creations under the identical terms. This license is often compared to “copyleft” free and open source software licenses. All new works based on yours will carry the same license, so any derivatives will also allow commercial use. This is the license used by Wikipedia, and is recommended for materials that would benefit from incorporating content from Wikipedia and similarly licensed projects." style="cursor: pointer;"></i>
            <select name="license" class="btn-sm form-control" id="license" required="true" style="display: none;">
              <option>Public Domain</option>
              {{-- CC-PD --}}

              <option>Freeing content globally without restrictions</option>
              {{-- CC-0-PD --}}

              <option>Attribution alone</option>
              {{-- CC-BY --}}

              <option>Attribution + ShareAlike</option>
              {{-- CC-BY-SA --}}

              <option>Attribution + Noncommercial</option>
              {{-- CC-BY-NC --}}

              <option>Attribution + NoDerivatives</option>
              {{-- CC-BY-ND --}}

              <option>Attribution + Noncommercial + ShareAlike</option>
              {{-- CC-BY-NC-SA --}}

              <option>Attribution + Noncommercial + NoDerivatives</option>
              {{-- CC-BY-NC-ND --}}

            </select>
            <label for="license" class="mt-2 text-justify" style="display: none;">
              <small class="text-secondary">
                CC-BY-SA <br>
                This license lets others remix, tweak, and build upon your work even for commercial purposes, as long as they credit you and license their new creations under the identical terms. This license is often compared to “copyleft” free and open source software licenses. All new works based on yours will carry the same license, so any derivatives will also allow commercial use. This is the license used by Wikipedia, and is recommended for materials that would benefit from incorporating content from Wikipedia and similarly licensed projects.
              </small>
            </label>
          </div>

      </div>
      <div class="card-footer p-2 text-right">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">@lang('project.CLOSE')</button>
        <button type="submit" class="btn btn-sm env_button">@lang('project.CREATE')</button>
        <br>
        <hr>

        <div class="row"><!-- Telegram attention -->
          <div class="col-md-12">
            <a href="https://t.me/envienta" target="_blank">
              <div class="card border border-dark mb-5 _bpulse">
                <div class="card-body">
                  <h6 class="text-center mb-0">
                  	@lang('campaign.TELEGRAM')
                    <i class="fab fa-telegram-plane fa-3x _blue"></i>
                  </h6>
                </div>
              </div>
            </a>
          </div>
        </div><!-- End of  Telegram attention -->
      </div>
    </form>

    </div>
  </div>
</div>

<style media="screen">
  .popover-body {
    text-align: justify;
    text-justify: inter-word;
  }
</style>

<script type="text/javascript">

  $(function () {
    $('[data-toggle="popover"]').popover()
    $('.popover-dismiss').popover({
      trigger: 'focus'
    })
    $('#env_point').change(function() {
        var c = $('#env_point');
        var i = c.length;
        var s = $('#selectedImages').html();
        if (s != '') {
            s += '<br />';
        }
        s += c[i - 1].value;
        $('#selectedImages').html(s);
    });
    
  })

</script>
