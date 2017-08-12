  <nav class="navbar navbar-expand-md navbar-inverse bg-info">
    <div class="container">
      <a href="{{ url('/front') }}"><img class="img-fluid d-block" src="{{ URL::to('img/envienta_platform_logo.png') }}"></a>
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
        
        @if(!Auth::check())
        <button id="login_btn" class="btn btn-danger" data-toggle="modal" data-target="#login_dialog"> Log In </button>
	       @else
        <div id="profile_block">
        <img src="{{ URL::to('img/user_placeholder.png') }}" class="d-block float-left" height="40" width="40">
        <div class="btn-group text-left">
          <button class="btn dropdown-toggle btn-info" data-toggle="dropdown">Profile</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Log Out</a>
          </div>
        </div>
        </div>
        @endif

      </div>
    </div>
  </nav>
  
<div id="login_dialog" class="modal animated bounceIn" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Log In - Simply with an email!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Type your email address below to get a <i>Log In link.</i></p>
        <form>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input id="email" type="email" class="input-large" name="email" placeholder="Enter email address">
          </div>
          <br>
          {{-- <button
            class="g-recaptcha"
            data-sitekey="6LdznCwUAAAAAAblIY11zkroyvcBb2mir4AdQYHT"
            data-callback="YourOnSubmitFn">
            Submit
          </button> --}}
          <div class="modal-footer">
            <button class="btn btn-info">Send login token</button>
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- <h3>This is gonna be the <b>navigation</b> part</p> --}}

