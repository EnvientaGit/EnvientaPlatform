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
        <hr class=""> </div>
    </div>
  </div>
  
@endsection 