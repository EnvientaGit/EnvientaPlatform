<div class="row m-0 mb-3 box-shadow-bottom">
	<div class="card w-100">
		<h6 class="card-header dtitle p-2">{{$project->title}}
			<i class="fa fa-pencil-square-o env_edit pull-right" aria-hidden="true" data-toggle="modal" data-target="#simplemde"></i>
		</h6>
	  	<div class="card-body">
	    	<p class="card-text text-justify">
	    		{{$project->description}}
	    	</p>
	    	<p class="card-text text-justify">
	    		{!! $details !!}
	    	</p>
	  	</div>
	  	<div class="card-footer env_uploaded_div">
	  		<p class="env_p">Uploaded at 2016/06/15</p>
	  	</div>
	</div>
</div>

<div class="row m-0 pb-3">
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#aquaponic</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#container</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#apple</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#pear</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#pirate</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#farm</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#water</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#food</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#solution</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#gate</a></button>
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">#block</a></button>
</div>




