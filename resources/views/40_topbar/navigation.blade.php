    <div class="row sticky-top">
      <div class="col-md-12 px-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom box-shadow-bottom">
            <a href="{{ url('/') }}" class="mb-3">
              <img class="d-block" src="{{ URL::to('img/logo_natural.svg') }}" height="40">
            </a>
            <p class="env_left">
              <span class="badge badge-danger font-italic">Beta!</span>
            </p>
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
              <form id='search_form' class="form-inline ml-2">
                <input class="form-control mr-sm-2 btn-sm env_width_20" id="search_edit" type="search" placeholder="Search" aria-label="Search" value="{{ empty($filter) ? '' : $filter }}">
                <button id="search_button" class="btn btn-sm btn-outline-secondary my-2 my-sm-0">Search</button>
              </form>
                
                @if(!Auth::check())
                <button id="login_btn" class="btn btn-success ml-2" data-toggle="modal" data-target="#login_dialog"> Log In </button>
                @else
                <div id="profile_block">
                  <div class="btn-group text-left">
                    <img src="{{ "https://www.gravatar.com/avatar/" . md5( strtolower( trim( Auth::user()->email ) ) ) . "?s=40"}}" 
                      class="dropdown-toggle env_point d-block float-left ml-2 rounded env_border" height="40" width="40"  data-toggle="dropdown">
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-success" href="{{ "https://www.gravatar.com/" . md5( strtolower( trim( Auth::user()->email ) ) )}}" target="_blank">Profile</a>
                        <a class="dropdown-item text-success" href="{{ url('/u') . '/' . Auth::user()->id }}">Projects</a>
                        <a class="dropdown-item text-secondary" href="{{ url('/auth/logout') }}">Log Out</a>
                    </div>
                  </div>
                </div>
                @endif
                
            </div>
          </nav>
      </div>
    </div>

<script type="text/javascript">
  $('#search_form').on('submit', function(e){
    e.preventDefault();
    var expr = $('#search_edit').val();
    if(expr) {
      window.location = '{{ url('/s') }}' + '/' + encodeURI(expr);
    } else {
      window.location = '{{ url('/') }}';
    }
  });
</script>

@include('10_login.login')

{{-- <h3>This is gonna be the <b>navigation</b> part</p> --}}

