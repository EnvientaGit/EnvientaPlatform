<?php
    use App\Utils;
?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top py-0" style="background: #282828;"><!-- navbar -->
  <div class="navbar-brand">
    <span class="navbar-logo">
      <a href="{{ url('/') }}">
        <img src="{{ url('assets/images/envienta-platform-logo-small-1000x275.png') }}" alt="Envienta" title="" style="height: 4.3rem;">
      </a>
    </span>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item mt-3 border rounded bg-white">
        <a class="nav-link text-white" href="{{ url('/shop') }}">
          <h5 class="text-dark my-1">Create new project
            <i class="fas fa-lightbulb text-primary"></i>
          </h5>
        </a>
      </li>
      <li class="nav-item mt-3">
        <a class="nav-link text-white" href="{{ url('/shop') }}">
          <h5 class="my-1">Shop
            <i class="fa fa-shopping-basket _clr" aria-hidden="true"></i>
          </h5>
        </a>
      </li>
      <li class="nav-item mt-3">
        <a class="nav-link text-white" href="https://t.me/envienta" target="_blank">
          <h5 class="my-1">Need help? Click here
            <i class="fab fa-telegram-plane _blue"></i>
          </h5>
        </a>
      </li>
    </ul>
    <form id='search_form' class="form-inline ml-2">
      <input class="form-control mr-sm-2 btn-sm env_width_20" id="search_edit" type="search" placeholder="Search" aria-label="Search" value="{{ empty($filter) ? '' : $filter }}">
      <button id="search_button" class="btn btn-sm btn-primary my-2 my-sm-0">Search</button>
    </form>
    @if(!Auth::check())
    <button id="login_btn" class="btn btn-sm btn-primary ml-2" data-toggle="modal" data-target="#login_dialog"> Sign in / Sign up </button>
    @else
    <div id="profile_block">
      <div class="btn-group text-left">
        <img src="{{ Utils::userAvatar() }}"
        class="dropdown-toggle env_point d-block float-left ml-2 rounded env_border" height="40" width="40"  data-toggle="dropdown">
        <div class="dropdown-menu">
          <a class="dropdown-item env_color" href="#" data-toggle="modal" data-target="#newProjectModal">New project <i class="fas fa-lightbulb"></i></a>
          <a class="dropdown-item env_color" href="{{ URL::to('/profile') }}">Profile</a>
          <!--a class="dropdown-item env_color" href="{{ Utils::userProfile() }}" target="_blank">Gravatar</a-->
          <a class="dropdown-item env_color" href="{{ url('/u') . '/' . Auth::user()->id }}">Projects</a>
          <!--a class="dropdown-item env_color" href="{{ URL::to('/map') }}">Map</a-->
          <a class="dropdown-item env_color" href="{{ url('/auth/logout') }}">Log Out</a>
        </div>
      </div>
    </div>
    @endif
  </div>
</nav><!-- navbar -->


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
