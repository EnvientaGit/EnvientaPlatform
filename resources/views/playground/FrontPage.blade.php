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
        @include('block.TabPill_Front')
      </div>
      <div class="col-md-4">
        @include('block.PerkSideBar_Front')
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