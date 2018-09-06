<?php
    use App\Utils;
?>
  <section class="menu cid-qUpCFG09UN" once="menu" id="menu1-7e">

    <div class="sticky-top">
      <div class="col-md-12 px-0">
          <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <!--a href="{{ url('/') }}" class="mb-3">
              <img class="d-block" src="{{ Utils::themeResPath('header_logo') }}" height="40">
            </a-->
            <div class="menu-logo">
              <div class="navbar-brand">
                  <span class="navbar-logo">
                      <a href="{{ url('/') }}">
                           <img src="{{ url('assets/images/envienta-platform-logo-small-1000x275.png') }}" alt="Mobirise" title="" style="height: 4.3rem;">
                      </a>
                  </span>

              </div>
            </div>

{{--
            <p class="env_left">
              <span class="badge badge-danger font-italic">Beta!</span>
            </p>
--}}
            <button class="navbar-toggler fa fa-bars" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f8f8f8;">

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-2 mr-auto">
              <li class="nav-item mt-3">
                  <a class="nav-link text-white" href="{{ url('/shop') }}">
                    <h5>Shop
                      <i class="fa fa-shopping-basket _clr" aria-hidden="true"></i>
                    </h5>
                  </a>
                </li>
              {{--
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5>About</h5></a>
                </li>
              --}}
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
          </nav>
      </div>
    </div>

  </section>
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
