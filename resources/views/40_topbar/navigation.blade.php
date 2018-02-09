    <div class="row sticky-top">
      <div class="col-md-12 px-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom box-shadow-bottom">
            <a href="{{ url('/') }}" class="mb-3">
              <img class="d-block" src="{{ URL::to('img/logo_natural.svg') }}" height="40">
            </a>
            <p><span class="badge badge-danger font-italic">Beta!</span></p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-2 mr-auto">
              {{--
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}"><h5>Campaigns</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5>About</h5></a>
                </li>
              --}}
              </ul>
              <form class="form-inline ml-2">
                <input class="form-control mr-sm-2 btn-sm" id="env_width_20" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
                
                @if(!Auth::check())
                <button id="login_btn" class="btn btn-info ml-2" data-toggle="modal" data-target="#login_dialog"> Log In </button>
                @else
                <div id="profile_block">
                <img src="{{ "https://www.gravatar.com/avatar/" . md5( strtolower( trim( Auth::user()->email ) ) ) . "?s=40"}}" class="d-block float-left" height="40" width="40">
                <div class="btn-group text-left">
                  <button class="btn dropdown-toggle btn-info" data-toggle="dropdown">Profile</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ "https://www.gravatar.com/" . md5( strtolower( trim( Auth::user()->email ) ) )}}" target="_blank">My profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/auth/logout') }}">Log Out</a>
                  </div>
                </div>
                </div>
                @endif
                
            </div>
          </nav>
      </div>
    </div>

@include('10_login.login')

{{-- <h3>This is gonna be the <b>navigation</b> part</p> --}}

