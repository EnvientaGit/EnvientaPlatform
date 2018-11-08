<div class="row mt-3 mb-5 box-shadow-bottom">
	<div class="border card w-100">
		<form method="post" action="{{ $project_url }}">
		{{ csrf_field() }}
		<input type="hidden" name="redirect" value="true" />
		<h6 class="card-header {{-- dtitle --}} p-2">{{$project->title}}
			@if($mine)
			<i class="fa fa-pencil-square-o env_edit pull-right" id="edit_details"></i>
			@endif
		</h6>
	  	<div class="card-body p-3">
	  		<div id="details_content">
	  			<div class="card bg-light">
  					<div class="card-body p-2">
		    			<p class="card-text text-justify">
		    				{{$project->description}}
		    			</p>
		    		</div>
		    	</div>
		    	<p class="card-text text-justify">
		    		{!! $details !!}
		    	</p>
		    	<p class="card-text text-justify">
	@foreach($tags as $tag)
	<button class="btn btn-sm btn-outline-info mr-2 mb-2 badge badge-pill"><a id="env_link" href="#">{{$tag}}</a></button>
	@endforeach
		    	</p>
	    	</div>
	    	<div id="details_editor" style="display: none;">
		  		<div class="form-group">
		            <textarea name="description" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Enter description" rows="3" required="required">{{$project->description}}</textarea>
	          	</div>
	          	<div class="form-group my-0">
	    			<textarea name="details" id="details_editor_area" rows="200" cols="100">{{$details_raw}}</textarea>
	    		</div>
	    		<div class="form-group">
	    			<input name="tags" type="text" class="btn-sm form-control taglist" id="tags" value="{{$project->tags}}">
	    		</div>
	    		<div class="form-group my-0">
	    			<button type="button" class="btn btn-sm btn-outline-secondary" id="details_editor_close">Close</button>
        			<button type="submit" class="btn btn-sm env_button">Save changes</button>
	    		</div>
	    	</div>
	  	</div>
	  	<div class="card-footer env_uploaded_div pl-2">
	  		<p class="env_p">Uploaded at {{ $project->created_at }}</p>
	  	</div>
	  	</form>
	</div>
</div>

<script type="text/javascript">
  var details_editor = new SimpleMDE({
  	element: document.getElementById("details_editor_area"),
  	forceSync: true,
  	toolbar: [
	"heading-1",
	"heading-2",
	"heading-3",
  	"bold","italic",
	"|",
	"quote",
	"unordered-list",
	"ordered-list",
	"clean-block",
	"|",
	"link",
	"image",
	/*
	{
        name: "embed",
        action: drawEmbed,
        className: "fa fa-code",
        title: "Embed (http://embed.ly/)",
    },
    */
	"|",
	"preview",
	"side-by-side",
	"fullscreen",
	"|",
	"undo",
	"redo",
	"|",
	"guide"
    ],
  	previewRender: function(plainText) {
		return this.parent.markdown(plainText);
	}
  });

	function drawEmbed(editor) {
	    var cm = editor.codemirror;
	    var output = '';
	    var selectedText = cm.getSelection();
	    var text = selectedText || 'YouTube url, image url, etc.';

	    output = '[[' + text + ']]';
	    cm.replaceSelection(output);
	}

  $('#edit_details').click(function() {
  	$('#details_content').hide();
  	$('#details_editor').show();
  	details_editor.value($("#details_editor_area").val());
  });
  $('#details_editor_close').click(function() {
  	$('#details_content').show();
  	$('#details_editor').hide();
  });
</script>
