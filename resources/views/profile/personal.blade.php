@extends('layouts.homemain')

@section('content')

  <div class="container p-3">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="img" style="height:22em;">
            <img class="card-img-top" src="img/1440x700_1.jpg" alt="Card picture cap">
          </div>
          <div class="card-block covery ">
            <!-- Just an image -->
            <a class="navbar-brand pull-left" href="#">
              <div class="img">
                <i class="fa fa-camera" aria-hidden="true" width="30" height="30" alt=""></i>
              </div>
            </a>
            <a class="navbar-brand pull-right" href="#">
              <div class="img">
                <i class="fa fa-cogs" aria-hidden="true" width="30" height="30" alt=""></i>
              </div>
            </a>
            <a class="navbar-brand pull-right" href="#">
              <div class="img">
                <i class="fa fa-envelope-o" aria-hidden="true" width="30" height="30" alt=""></i>
              </div>
            </a>
          </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="img" style="height:22em;">
              <img class="card-img-top" src="img/350x350.jpg" alt="Card picture cap">
            </div>
            <div class="card-block covery ">
              <!-- Just an image -->
              <a class="navbar-brand pull-left" href="#">
                <div class="img">
                  <i class="fa fa-ellipsis-v" aria-hidden="true" width="30" height="30" alt=""></i>
                </div>
              </a>
              <a class="navbar-brand pull-right" href="#">
                <div class="img">
                  <i class="fa fa-camera" aria-hidden="true" width="30" height="30" alt=""></i>
                </div>
              </a>
              <a class="navbar-brand pull-right" href="#">
                <div class="img">
                  <i class="fa fa-envelope-o" aria-hidden="true" width="30" height="30" alt=""></i>
                </div>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="container p-3 bg-warning">
    <div class="row">
      <div class="col-md-8 bg-warning">
        <table class="table table-hover table-responsive">
          <thead class="thead-default">
            <tr>
              <th scope="row" class="text-center"><h5>№</h5></th>
              <th class="text-center"><h5>My projects</h5></th>
              <th class="text-center"><h5>Versions</h5></th>
              <th class="text-center"><h5>Dates</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center">
              <th scope="row" class="btn-danger text-center">3.</th>
              <td><b><a href="#">Original Prusa i3 3D Printer</a></b></td>
              <td class="btn-outline-info">v1.1.2</td>
              <td><b>2017/03/07</b></td>
            </tr>
            <tr class="text-center">
              <th scope="row" class="btn-danger text-center">2.</th>
              <td><b><a href="#">Kessels Wind Turbine</a></b></td>
              <td class="btn-outline-info">v0.5.7</td>
              <td><b>2017/01/22</b></td>
            </tr>
            <tr class="text-center">
              <th scope="row" class="btn-danger text-center">1.</th>
              <td><b><a href="#">Leigh Bureau Exclusive Robotics</a></b></td>
              <td class="btn-outline-info">v0.1.3</td>
              <td><b>2016/06/15</b></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-4 bg-warning">
        <div class="row">
          <div class="col-md-6 col-sm-6">
              <div class="progress blue">
                  <span class="progress-left">
                      <span class="progress-bar"></span>
                  </span>
                  <span class="progress-right">
                      <span class="progress-bar"></span>
                  </span>
                  <div class="progress-value">90%</div>
              </div>
              <br>
              <div class="text-center">
                <h5 class="pbar-blue">Reputation</h5>
              </div>
          </div>
          <div class="col-md-6 col-sm-6">
              <div class="progress yellow">
                  <span class="progress-left">
                      <span class="progress-bar"></span>
                  </span>
                  <span class="progress-right">
                      <span class="progress-bar"></span>
                  </span>
                  <div class="progress-value">75%</div>
              </div>
              <br>
              <div class="text-center">
                <h5 class="pbar-orange">Reliability</h5>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>

  <div class="container p-3 bg-warning">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>To do list</h1>
      </div>
    </div>
    <br>
    <h1>Profile Page</h1>
    <ol>
      <li>My to do list</li>
      <li>My project(s)</li>
      <li>Photos</li>
      <li>Wiki(s)</li>
      <li>Notes</li>
      <li>Rank/Stat</li>
      <li>"how do you wanna be senior" /user tracking /activity - permission</li>
      <li>Like & save</li>
      <li>Shop your own finished products /offer cryptocurrency for it</li>
      <li>File Manager - FreeCad</li>
      <li></li>
    </ol>
  </div>

@endsection 

















