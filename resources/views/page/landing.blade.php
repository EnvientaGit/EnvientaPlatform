@extends('layouts.landingmain')

@section('content')

  <div class="container">
    <div class="row">
      <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr class=""> </div>
    </div>
  </div>
  <div class="container p-3">
    <div class="row">
      <div class="col-md-8">
        @include('block.landing_tabpill')
      </div>
      <div class="col-md-4">
        @include('block.landing_perksidebar')
      </div>
    </div>
  </div>

        <br>
        <br>
        <br>
        <h4>Ezek fognak kerülni erre az oldalra:</h4>
        <ol>
          <li>Create Project box</li>
          <li>Project Library</li>
          <li>Envienta divisions (Prezi and/or Angular Carousel)</li>
          <li>News Feed + My Project Status(Pinned)</li>
          <li>Wish Wall</li>
          <li>Profile Widget</li>
          <li><i class="fa fa-star" aria-hidden="true"></i> Star/Popular Projects</li>
          <li>Search(bar)</li>
          <li></li>
        </ol>
      </div>
    </div>
  </div>
  
@endsection 