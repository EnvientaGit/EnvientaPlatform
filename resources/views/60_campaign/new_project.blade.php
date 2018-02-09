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
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description" rows="3" required="required"></textarea>
            <small id="descriptionHelp" class="form-text text-muted">Short project description</small>
          </div>
          <!--div class="form-group">
            <label for="images">Project images</label>
            <input name="images" type="file" class="form-control" id="images" aria-describedby="imagesHelp" required="required"/>
            <small id="imagesHelp" class="form-text text-muted">Project images (min. 1)</small>
          </div-->
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create project</button>
      </div>
    </form>
    </div>
  </div>
</div>
