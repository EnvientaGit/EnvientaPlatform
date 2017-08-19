@extends('layouts.frontmain')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr class=""> </div>
    </div>
  </div>
  <div class="container p-3">
    <div class="row">
      <div class="col-md-8">
        @include('block.front_tabpill')
      </div>
      <div class="col-md-4">
        @include('block.front_perksidebar')
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <ul>
        <li>Subscribe > Newsletter</li>
        <li>What's popular</li>
        <li>Recommended for you</li>
        <li>Discover great projects with your Facebook friends./ Notification when a friend start a project</li>
        <li>Bring your creative project to life/ Motivation section</li>
        <li></li>
      </ul>
        <hr class="">
      </div>
    </div>
  </div>
  
@endsection 