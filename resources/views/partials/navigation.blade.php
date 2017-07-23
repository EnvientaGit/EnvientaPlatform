<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container envienta-bar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#"><img class="img-reponsive envienta-logo" src="{{ URL::to('img/logo.png') }}" alt="logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            WIKI 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Wiki</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Plugins</a></li>
                            <li><h5>Playground:</h5></li>
                            <li><a href="#">Playground</a></li>
                            <li><a href="#">Envienta Play</a></li>
                            <li><a href="#">Project Play</a></li>
                            <li><a href="#">Template Play</a></li>
                            <li><a href="#">Wiki play</a></li>
                            <li><a href="#">Plugin Play</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            CATEGORIES 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Garbriel Play</a></li>
                            <li><a href="#">Envienta Project</a></li>
                            <li><a href="#">Garden</a></li>
                            <li><a href="#">Hobby</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Other</a></li>
                            <li><a href="#">Create new Project</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            PLATFORM 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Index</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-menu-large">
                        <a href="#" class="dropdown-toggle" 
                                    data-toggle="dropdown" 
                                    role="button" aria-haspopup="true" 
                                    aria-expanded="false">
                            <img src="{{ URL::to('img/potato.png') }}" class="img-circle profile-image" height="30" width="30">
                            <span class="env-user">Potato</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"><h4>Hombre Potato</h4></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Playground</a></li>
                            <li><a href="#">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<p>This is gonna be the <b>navigation</b> part</p>