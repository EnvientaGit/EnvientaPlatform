<?php
    use App\Utils;
?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top py-0" style="background: #282828;"><!-- navbar -->
  <div class="navbar-brand">
    <span class="navbar-logo">
      <a href="{{ url('/') }}">
        <img src="{{ url('assets/images/envienta-platform-logo-small-1000x275.png') }}" alt="Envienta" title="" style="height: 4.1rem;">
      </a>
    </span>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="padding-bottom: 7px;">
      <li class="nav-item mt-3 rounded bg-primary">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#newProjectModal">
          <h5 class="text-white my-1">@lang('navigation.CREATE_NEW_PROJECT')
            <i class="fas fa-lightbulb"></i>
          </h5>
        </a>
      </li>
      <li class="nav-item mt-3">
        <a class="nav-link text-white" href="{{ url('/shop') }}">
          <h5 class="my-1">@lang('navigation.SHOP')
            <i class="fa fa-shopping-basket _clr" aria-hidden="true"></i>
          </h5>
        </a>
      </li>
      <li class="nav-item mt-3">
        <a class="nav-link text-white" href="https://t.me/envienta" target="_blank">
          <h5 class="my-1">@lang('navigation.HELP')
            <i class="fab fa-telegram-plane _blue"></i>
          </h5>
        </a>
      </li>
    </ul>
    <form id='search_form' class="form-inline ml-2">
      <input class="form-control mr-sm-2 btn-sm env_width_20" id="search_edit" type="search" placeholder="Search" aria-label="Search" value="{{ empty($filter) ? '' : $filter }}">
      <button id="search_button" class="btn btn-sm btn-primary my-2 my-sm-0">@lang('navigation.SEARCH')</button>
    </form>
    @if(!Auth::check())
	 <button id="login_btn" class="btn btn-sm btn-primary ml-2" data-toggle="modal" data-target="#login_dialog"> @lang('navigation.SIGN') </button>
    @else
    <div id="profile_block">
      <div class="btn-group text-left">
        <img src="{{ Utils::userAvatar() }}"
        class="dropdown-toggle env_point d-block float-left ml-2 rounded env_border border-warning" height="40" width="40"  data-toggle="dropdown">
        <div class="dropdown-menu">
          <a class="dropdown-item env_color" href="#" data-toggle="modal" data-target="#newProjectModal">@lang('navigation.NEW_PROJECT')New project <i class="fas fa-lightbulb"></i></a>
          <a class="dropdown-item env_color" href="{{ URL::to('/profile') }}">@lang('navigation.MYPROFILE')</a>
          <!--a class="dropdown-item env_color" href="{{ Utils::userProfile() }}" target="_blank">@lang('navigation.GRAVATAR')</a-->
          <a class="dropdown-item env_color" href="{{ url('/profile/projects') }}">My projects</a>
          <!--a class="dropdown-item env_color" href="{{ URL::to('/map') }}">@lang('navigation.MAP')</a-->
          <a class="dropdown-item env_color" href="{{ url('/auth/logout') }}">@lang('navigation.LOGOUT')</a>
        </div>
      </div>
    </div>
    @endif
  </div>
</nav><!-- navbar -->

@extrajs
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
@endextrajs

@include('10_login.login')
