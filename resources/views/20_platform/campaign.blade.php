@extends('00_header.platform')

@section('content')

    <main role="main">

      <section id="env_board" class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Projects for Cape Town</h1>
          <p class="lead text-muted">
            “The city of Cape Town could conceivably become the first major city in the world to run out of water, and that could happen in the next four months,” said Dr. Anthony Turton, a professor at the Centre for Environmental Management at the University of the Free State. “It’s not an impending crisis — we’re deep, deep, deep in crisis.”
          </p>
          <p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newProjectModal">Create new project</button>
            {{-- <a href="#" class="btn btn-secondary my-2">Button_2</a> --}}
          </p>
        </div>
      </section>

{{-- @Mate TODO: pakold ki külö fájlba --}}
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
{{-- --}}

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

            @foreach ($projects as $project)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="{{ URL::to('project/' . $project->id) }}">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">
                    <a class="text-success" href="{{ URL::to('project/' . $project->id) }}">{{$project->title}}</a>
                  </h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    {{$project->description}} 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>

        {{ $projects->links('70_tools.pagination') }}

      </div>
  
    </main>
  
@endsection 