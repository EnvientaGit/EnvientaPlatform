<div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="" action="" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal-header bg-light p-2">
        <h5 class="modal-title">Edit project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times fa-xs"></i>
        </button>
      </div>
      <div class="card-body p-3">

          <div class="form-group">
            <label for="title" class="mb-0">Title</label>
            <input name="title" type="text" class="btn-sm form-control" id="title" placeholder="Write a title" required="required">
          </div>

          <div class="form-group">
            <label for="tags" class="mb-0">Tags <small id="descriptionHelp" class="text-muted">(max. 6)</small></label>
            <input name="tags" type="text" class="btn-sm form-control taglist" id="tags" placeholder="Enter tags">
          </div>

          <!-- YouTube Link input section -->
          <div class="form-group">
            <label for="vid_links" class="mb-0">Video links</label>
            <input name="vid_links" type="text" class="btn-sm form-control taglist" id="vid_links" placeholder="Enter links">

            <!-- Adding a new input for a new link -->
            <button type="button" class="btn btn-outline-primary btn-sm mt-2">Add more <i class="far fa-plus"></i></button>
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
