        <div class="container">
          <div class="row">

            @foreach ($projects as $project)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="{{ URL::to('project/' . $project->slug) }}">
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

