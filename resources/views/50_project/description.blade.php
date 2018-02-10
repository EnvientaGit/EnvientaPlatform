<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills text-center">
      <li class="nav-item col-md-4">
        <a data-toggle="pill" href="#home" class="btn btn-sm btn-light bg-light nav-link active box-shadow-bottom">Details</a>
      </li>
      <li class="nav-item col-md-4">
        <a data-toggle="pill" href="#menu1" class="btn btn-sm btn-light bg-light nav-link box-shadow-bottom">Files</a>
      </li>
      <li class="nav-item col-md-4">
        <a data-toggle="pill" href="#menu2" class="btn btn-sm btn-light bg-light nav-link box-shadow-bottom">Comments</a>
      </li>
{{--       <li class="nav-item col-md-3">
        <a data-toggle="pill" href="#menu3" class="btn btn-sm btn-light bg-light nav-link box-shadow-bottom">FAQ</a>
      </li> --}}
    </ul>
  </div>
</div>
<div class="tab-content mt-3">
  <div id="home" class="tab-pane animated fadeInRight active">
      @include('50_project.51_tabs.details')
  </div>
  <div id="menu1" class="tab-pane animated fadeInRight">
      @include('50_project.51_tabs.blueprints')
  </div>
  <div id="menu2" class="tab-pane animated fadeInRight">
      @include('50_project.51_tabs.comments')
  </div>
  <div id="menu3" class="tab-pane animated fadeInRight">
      @include('50_project.51_tabs.faq')
  </div>
</div>