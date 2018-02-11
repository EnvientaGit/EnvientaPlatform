<div class="row m-0 mb-3 box-shadow-bottom">
	<div class="card w-100">
		<h6 class="card-header {{-- dtitle --}} p-2">{{$project->title}}
			<i class="fa fa-pencil-square-o env_edit pull-right" id="edit_details"></i>
		</h6>
	  	<div class="card-body">
	  		<div id="details_content">
		    	<p class="card-text text-justify">
		    		{{$project->description}}
		    	</p>
		    	<p class="card-text text-justify">
		    		{!! $details !!}
		    	</p>
	    	</div>
	    	<div id="details_editor" style="display: none;">
		  		<div class="form-group">
		            <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description" rows="3" required="required"></textarea>
	          	</div>
	          	<div class="form-group">
	    			<textarea id="details_editor_area" rows="200" cols="100"></textarea>
	    		</div>
	    	</div>
	  	</div>
	  	<div class="card-footer env_uploaded_div pl-2">
	  		<p class="env_p">Uploaded at {{ $project->created_at }}</p>
	  	</div>
	</div>
</div>

<script type="text/javascript">
  new SimpleMDE({ element: document.getElementById("details_editor_area") });
  $('#edit_details').click(function() {
  	console.log('xxx');
  	$('#details_content').hide();
  	$('#details_editor').show();
  });
</script>

{{--
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
--}}




