@extends('00_header.platform')

@section('content')

<div class="placeholder" style="height: 80px;"></div>	

<div class="container-fluid">
	<div class="row" style="background:#f0f0f0;box-shadow:#ccc 0 3px 10px;padding: 20px;">
		<div class="col-md-8 text-left">
			<h1 class="project-title text-left">{{$project->title}}</h1>
		</div>
		<div class="col-md-4 text-right">

	      <a class="btn btn-outline-info btn-sm" href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}" target="_blank" title="Facebook">
	        <i class="fa fa-facebook-square"></i>
	      </a>
	      <a class="btn btn-outline-info btn-sm" href="https://twitter.com/intent/tweet?url={{ URL::current() }}" target="_blank" title="Twitter">
	        <i class="fa fa-twitter-square"></i>
	      </a>
	      <a class="btn btn-outline-info btn-sm" href="https://plus.google.com/share?url={{ URL::current() }}" target="_blank" title="Google+">
	        <i class="fa fa-google-plus-square"></i>
	      </a>
	      <a class="btn btn-outline-info btn-sm" href="https://www.linkedin.com/shareArticle?url={{ URL::current() }}" target="_blank" title="LinkedIn">
	        <i class="fa fa-linkedin-square"></i>
	      </a>
	      <a class="btn btn-outline-info btn-sm" href="http://pinterest.com/pin/create/button/?url={{ URL::current() }}" target="_blank" title="Pinterest">
	        <i class="fa fa-pinterest-square"></i>
	      </a>
	      <a class="btn btn-outline-info btn-sm" href="https://reddit.com/submit?url={{ URL::current() }}" target="_blank" title="Reddit">
	        <i class="fa fa-reddit-square"></i>
	      </a>
	  </div>
  </div>
  <div class="row" style="padding-top:20px">
    <div class="col-md-2">
    	@include('50_project.53_modules.menu')
    </div>
    <div class="col-md-8">
      @include('50_project.description')
    </div>
    <div class="col-md-2">
    	@include('30_sidebar.sidebar')
    </div>
  </div>
</div>

@endsection 