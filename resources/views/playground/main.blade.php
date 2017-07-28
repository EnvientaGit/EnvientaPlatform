@extends('layouts.HomeMain')

@section('content')
  <div class="text-white bg-primary">
    <div class="container">
      <div class="row my-2">
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-warning" href="#" data-toggle=""><b>EDIT PROJECT</b></a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-warning" href="#" data-toggle=""><b>OVERVIEW</b></a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-info" href="#" data-toggle=""><b>BACK THIS PROJECT</b></a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-warning" href="#" data-toggle=""><b>PURCHASE</b></a>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container p-3 bg-warning">
      <div class="row">
        <div class="col-md-8 bg-warning">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KTAiOtJoD-4" allowfullscreen=""> </iframe>
          </div>
          <div class="row px-3">
            <div class="col-md-12 bg-info" style="text-align: center;"><span class="text-info"><b class="text-white">SHARE THIS PROJECT</b></span></div>
            <div class="col-md-12" style="padding-left: 0px;">
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;Facebook</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-twitter-square"></i>&nbsp;&nbsp;Twitter</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-google-plus-square"></i>&nbsp;&nbsp;Google +</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-linkedin-square"></i>&nbsp;&nbsp;LinkedIn</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-pinterest-square"></i>&nbsp;&nbsp;Pinterest</a>
              <a class="btn btn-warning btn-sm" href="#"><i class="fa fa-reddit-square"></i>&nbsp;&nbsp;Reddit</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 bg-warning">
          <h1 class="display-4 py-3"><b>$7,500</b></h1>
          <p class="">raised by <b>12</b> backers</p>
          <div style="width: 100%; min-width: 2em; height: 1.5em; background-color:#f1f1f1;">
            <div class="bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">&nbsp;</div>
          </div>
          <h5 class="">
            <div><b><br></b></div><b>75%</b> of <b>$10,000 </b>flexible goal
            <div>
              <br> </div>
          </h5>
          <p class="">From the creator of the award-winning product comes the next one! A portable “go-anywhere” product. Take it outside - the product built to defy rain, dust, dirt and the rough and tumble.</p>
          <a class="btn btn-danger btn-block btn-lg" href="#">BACK THIS PROJECT<i class="fa"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container p-3">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#home" class="nav-link active"><b>HOME</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu1" class="nav-link"><b>UPDATES</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu2" class="nav-link"><b>COMMENTS</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu3" class="nav-link"><b>BACKERS</b></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="home" class="tab-pane fade show active">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">HOME</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">UPDATES</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">COMMENTS</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div id="menu3" class="tab-pane fade">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  <h3 class="text-info">BACKERS</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="list-group">
              <li class="list-group-item px-2 bg-info text-white"><i class="fa fa-credit-card fa-2x"></i><b class="style-backer">&nbsp;&nbsp;&nbsp;PLEDGE $15 OR MORE</b></li>
            </ul>
            <div class="card-block card-warning">
              <h4 class="text-info"><b>BUY US A COFFEE</b></h4>
              <p>Help keep us moving along with this project. Mea tempor electram in, ius tantas verterem ad.</p>
              <p><i class="fa fa-users fa-fw"></i><b>&nbsp;&nbsp;&nbsp;23 out of 100 claimed</b>
                <br><i class="fa fa-calendar fa-fw"></i><b>&nbsp; &nbsp;Estimated delivery: Dec 2016</b></p>
              <p>
                <a href="#" class="btn btn-block btn-outline-danger btn-sm"><b>SELECT THIS REWARD</b></a>
              </p>
            </div>
          </div>
          <br>
          <div class="card">
            <ul class="list-group">
              <li class="list-group-item text-white px-2 bg-info"><i class="fa fa-credit-card fa-2x"></i><b class="style-backer">&nbsp;&nbsp;&nbsp;PLEDGE $15 OR MORE</b></li>
            </ul>
            <div class="card-block card-warning">
              <h4 class="text-info"><b>BUY US A COFFEE</b></h4>
              <p>Help keep us moving along with this project. Mea tempor electram in, ius tantas verterem ad.</p>
              <p><i class="fa fa-users fa-fw"></i><b>&nbsp;&nbsp;&nbsp;23 out of 100 claimed</b>
                <br><i class="fa fa-calendar fa-fw"></i><b>&nbsp; &nbsp;Estimated delivery: Dec 2016</b></p>
              <p>
                <a href="#" class="btn btn-block btn-outline-danger btn-sm"><b>SELECT THIS REWARD</b></a>
              </p>
            </div>
          </div>
          <br>
          <div class="card">
            <ul class="list-group">
              <li class="list-group-item text-white px-2 bg-info"><i class="fa fa-credit-card fa-2x"></i><b class="style-backer">&nbsp;&nbsp;&nbsp;PLEDGE $15 OR MORE</b></li>
            </ul>
            <div class="card-block card-warning">
              <h4 class="text-info"><b>BUY US A COFFEE</b></h4>
              <p>Help keep us moving along with this project. Mea tempor electram in, ius tantas verterem ad.</p>
              <p><i class="fa fa-users fa-fw"></i><b>&nbsp;&nbsp;&nbsp;23 out of 100 claimed</b>
                <br><i class="fa fa-calendar fa-fw"></i><b>&nbsp; &nbsp;Estimated delivery: Dec 2016</b></p>
              <p>
                <a href="#" class="btn btn-block btn-outline-danger btn-sm"><b>SELECT THIS REWARD</b></a>
              </p>
            </div>
          </div>
          <br>
          <div class="card">
            <ul class="list-group">
              <li class="list-group-item px-2 bg-info text-white"><i class="fa fa-credit-card fa-2x"></i><b class="style-backer">&nbsp;&nbsp;&nbsp;PLEDGE $15 OR MORE</b></li>
            </ul>
            <div class="card-block card-warning">
              <h4 class="text-info"><b>BUY US A COFFEE</b></h4>
              <p>Help keep us moving along with this project. Mea tempor electram in, ius tantas verterem ad.</p>
              <p><i class="fa fa-users fa-fw"></i><b>&nbsp;&nbsp;&nbsp;23 out of 100 claimed</b>
                <br><i class="fa fa-calendar fa-fw"></i><b>&nbsp; &nbsp;Estimated delivery: Dec 2016</b></p>
              <p>
                <a href="#" class="btn btn-block btn-outline-danger btn-sm"><b>SELECT THIS REWARD</b></a>
              </p>
            </div>
          </div>
          <br> </div>
      </div>
    </div>
  </div>
@endsection 