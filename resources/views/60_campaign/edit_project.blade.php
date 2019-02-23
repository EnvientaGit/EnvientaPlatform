<div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="{{ url()->current() }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="redirect" vaue="true">
      <div class="modal-header bg-light p-2">
        <h5 class="modal-title">Edit project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times fa-xs"></i>
        </button>
      </div>
      <div class="card-body p-3">

          <div class="form-group">
            <label for="title" class="mb-0">Title</label>
            <input name="title" type="text" class="btn-sm form-control" id="title" placeholder="Write a title" required="required" value="{{ $project->title }}">
          </div>

          <div class="form-group">
            <label for="tags" class="mb-0">Tags <small id="descriptionHelp" class="text-muted">(max. 6)</small></label>
            <input name="tags" type="text" class="btn-sm form-control taglist" id="tags" placeholder="Enter tags" value="{{ $project->tags }}">
          </div>

          <!-- YouTube Link input section -->
          <div class="form-group">
            <label for="vid_link" class="mb-0">Video link</label>
            <input name="vid_link" type="text" class="btn-sm form-control" id="vid_link" placeholder="Enter YouTube video URL here" value="{{$project->video_id ? "https://www.youtube.com/watch?v=" . $project->video_id : ""}}">
          </div>
          <!-- YouTube Link input section -->

      </div>
      <div class="card-footer p-2 text-right">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary">Save</button>
      </div>
    </form>

    </div>
  </div>
</div>
