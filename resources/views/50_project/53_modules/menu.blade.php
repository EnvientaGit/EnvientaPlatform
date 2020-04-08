<div class="row my-3">
  <div class="col-md-12">
    <div class="border card w-100">
      <h6 class="card-header dtitle p-2">
        Project menu value
      </h6>
      <div class="card-body p-2 text-left">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#project_details" role="tab" aria-controls="project_details" aria-selected="true">@lang('project.MAIN')</a>
          <a class="nav-link" id="v-pills-mentoring-tab" data-toggle="pill" href="#project_files" role="tab" aria-controls="project_files" aria-selected="false">@lang('project.FILES')</a>
          <a class="nav-link" id="v-pills-mentoring-tab" data-toggle="pill" href="#project_tasks" role="tab" aria-controls="project_files" aria-selected="false" style="display: none;">@lang('project.TASKS')</a>
          <a class="nav-link" id="v-pills-investment-tab" data-toggle="pill" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false" style="display: none;">@lang('project.NEWS_FEED')</a>
          @if(isset($remoteModules['projectManager']))
          <a class="nav-link" id="v-pills-investment-tab" data-toggle="pill" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false">@lang('project.COMMENTS')</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
