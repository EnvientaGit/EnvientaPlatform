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
            {{-- <a href="#" class="btn btn-primary my-2">Button_1</a> --}}
            <a href="#" class="btn btn-lg btn-primary my-2">Create a Project</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
{{--                     <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div> --}}
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow-bottom">
                <a href="">
                  <img class="card-img-top" src="{{ URL::to('img/hd_1.jpg') }}" alt="Project_XY">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">Lorep Ipsum</h5>
                  <p id="env_paragraph" class="card-text text-justify">
                    Iure diam bibendum nascetur aperiam sequi venenatis explicabo, tristique, mattis tincidunt, eveniet quisquam odit, eiusmod! Doloremque, quidem enim suspendisse ducimus. 
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">View</a>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <a href="" id="env_link" target="_blank">Edit</a>
                      </button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </main>

  
@endsection 