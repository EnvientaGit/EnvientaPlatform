@extends('00_header.platform')

@section('content')
  
  @include('70_tools.slider')

    <div class="container p-3">
      <div class="row">
        <div class="col-md-12">
          @include('50_project.description')
        </div>
      </div>
    </div>
    
@endsection 