@extends('layouts.HomeMain')

@section('content')

  <div class="text-white bg-primary">
    <div class="container">
      <div class="row my-2">
        <div class="col-md-4">
          <a class="btn btn-block my-1 btn-info" href="{{ url('/overview') }}" data-toggle=""><b>OVERVIEW</b></a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-block my-1 btn-warning" href="{{ url('/project/3') }}" data-toggle=""><b>BACK THIS PROJECT</b></a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-block my-1 btn-warning" href="#" data-toggle=""><b>PURCHASE</b></a>
        </div>
      </div>
    </div>
  </div>

  @include('Block.Ov_PresentTable')

  <div class="">
    <div class="container p-3">
      <div class="row">
        <div class="col-md-8">
          @include('Block.Ov_TabPill')
        </div>
        <div class="col-md-4">
          @include('Block.Ov_PerkSideBar')
        </div>
      </div>
    </div>
  </div>
  
@endsection 