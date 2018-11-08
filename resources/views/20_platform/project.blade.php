@extends('00_header.platform')

@section('content')

	<div class="container-fluid">
		<div class="row py-3 bg-light shadow">
			<div class="col-md-8 text-left">
				<h1 class="project-title text-left">{{$project->title}}</h1>
			</div>
			<div class="col-md-4 py-2 text-right">
				<span class="mr-1"><i class="far fa-share"></i> Share</span>
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

		<div class="row pt-1">
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
