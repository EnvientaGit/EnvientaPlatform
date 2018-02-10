<div class="modal fade" id="newProjectModal" tabindex="-1" role="dialog" aria-labelledby="newProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="{{ URL::to('project/new') }}">
      {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="newProjectModalLabel">New project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" required="required">
          </div>
          <div class="form-group">
            <label for="description">Description <small id="descriptionHelp" class="text-muted">(short project description)</small></label>
            <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description" rows="3" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="images">Project images <small class="text-muted">(multiple images allowed, min. 1 required)</small></label>
            <div style="position: relative; left: 0px; top: 0px; height: 40px;" class="mb-3">
              <div class="btn btn-primary" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">Drop files here or click to upload</div>
              <input type="file" name="images[]" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity:0;" required="true" multiple="true"> 
            </div>
          </div>
          <div class="form-group">
            <label for="license">License</label>
            <select name="license" class="form-control" id="license" required="true">
              <option>CC-BY-NC-SA</option>
            </select>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create project</button>
      </div>
    </form>
    </div>
  </div>
</div>
