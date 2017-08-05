<nav class="navbar navbar-expand-md navbar-inverse bg-info">
    <div class="container">
      <img class="img-fluid d-block" src="{{ URL::to('img/envienta_platform_logo.png') }}">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active text-center px-1">
            <a class="nav-link" href="#"><b>HOME</b></a>
          </li>
          <li class="nav-item text-center px-1">
            <a class="nav-link active" href="#"><b>FEATURES</b></a>
          </li>
          <li class="nav-item text-center px-1">
            <a class="nav-link active" href="#"><b>PRICING</b></a>
          </li>
          <li class="nav-item text-center px-1">
            <a class="nav-link active" href="#"><b>ABOUT</b></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 px-5 text-right bg-info text-white">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <img src="{{ URL::to('img/user_placeholder.png') }}" class="d-block rounded float-left" height="40" width="40">
        <div class="btn-group text-left">
          <button class="btn dropdown-toggle btn-info" data-toggle="dropdown"> Profile </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Log Out</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

{{-- <h3>This is gonna be the <b>navigation</b> part</p> --}}