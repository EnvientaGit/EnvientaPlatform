@extends('layouts.FrontMain')

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
        @include('Block.Front_TabPill')
      </div>
      <div class="col-md-4">
        @include('Block.Front_PerkSideBar')
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