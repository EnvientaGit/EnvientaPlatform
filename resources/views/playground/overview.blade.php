@extends('layouts.HomeMain')

@section('content')

  <div class="text-white bg-primary">
    <div class="container">
      <div class="row my-2">
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-warning" href="#" data-toggle=""><b>EDIT PROJECT</b></a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-info" href="#" data-toggle=""><b>OVERVIEW</b></a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-warning" href="#" data-toggle=""><b>BACK THIS PROJECT</b></a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-block my-1 btn-warning" href="#" data-toggle=""><b>PURCHASE</b></a>
        </div>
      </div>
    </div>
  </div>

  @include('block.PresentTable_OV')

  <div class="">
    <div class="container p-3">
      <div class="row">
        <div class="col-md-8">
          @include('block.TabPill_OV')
        </div>
        <div class="col-md-4">
          @include('block.PerkSideBar_OV')
        </div>
      </div>
    </div>
  </div>
  
@endsection 