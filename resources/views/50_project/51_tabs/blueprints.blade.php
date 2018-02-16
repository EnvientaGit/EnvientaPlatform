{{--
<div class="row m-0">
	<iframe src="https://3dwarehouse.sketchup.com/embed.html?mid=f9c78f177ea35a4bf5926f6cee661177&width=580&height=326" 
		frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="726.66" height="435" allowfullscreen 
		class="dmodel border rounded box-shadow-bottom p-2 mb-3" style="display: none;">
	</iframe>
</div>
--}}

<div class="row">
	<div class="col-md-7">
		@foreach($folders as $folder)
			<div class="row m-0">
				<div class="card box-shadow-bottom mb-3">
					<table class="table table-hover table-responsive table-sm rounded mb-0">
					<caption class="p-2 text-dark">List of <strong class="text-success">{{ $folder['name'] }}</strong>
						<a href=""><i class="fa fa-window-close text-danger env_edit p-1 pull-right"></i></a>
					</caption>
					  <thead class="thead-default bg-light">
					    <tr>
					      <th class="border-0">№</th>
					      @if($mine)
					      <th class="border-0 w-40">Name</th>
					      @else
					      <th class="border-0 w-55">Name</th>
					      @endif
					      <th class="border-0 w-20">Date</th>
					      {{--<th class="border-0 w-15">Version</th>--}}
					      <th class="border-0 w-30">Size</th>
					      @if($mine)
					      <th class="border-0 w-15">Delete</th>
					      @endif
					      <th class="border-0">File</th>
					    </tr>
					  </thead>
					  <tbody>
					    @foreach($folder['files'] as $idx => $file)
					    <tr class="text-center">
					      <td class="bg-danger text-white text-center ">{{ $idx + 1 }}.</td>
					      <td class="text-left"><span class="file_view" data-url="{{ $repo_url . '/' . $folder['name'] . '/' . $file['name'] }}" style="cursor: pointer;">{{$file['name']}}</span></td>
					      <td class="text-left">{{$file['lastmod']}}</td>
					      {{--<td class="text-left">v1.1.2</td>--}}
					      <td class="text-left">{{$file['size']}}</td>
					      @if($mine)
					      <td class="text-left"><a href="#" class="text-danger file_drop" data-folder="{{$folder['name']}}" data-file="{{$file['name']}}">Drop <i class="fa fa-times text-danger" aria-hidden="true"></i></a></td>
					      @endif
					      <td class=""><a href="{{ $repo_url . '/' . $folder['name'] . '/' . $file['name'] }}" target="_blank"><i class="fa fa-cloud-download fa-lg" aria-hidden="true"></i></a></td>
					    </tr>
					    @endforeach
					  </tbody>
					  <tfoot>
					  	@if($mine)
					  	<td colspan="7">
					  		<form id="blueprints_add_files" method="post" target="_blueprints_ajax_frame" action="{{ $project_url }}" class="bg-light env_link_blue blueprints_autosubmit" enctype="multipart/form-data">
			  					{{ csrf_field() }} 
						  		<div class="position-relative" style="height: 5.5em">
						  			<div class="text-center rounded position-absolute w-100 h-100 env_drag">
				    					<div class="mt-3">
				    						<i class="fa fa-cloud-upload fa-2x text-primary" aria-hidden="true"></i>
				    						<h6>Upload</h6>
				    					</div>
				    				</div>
				    				<input type="hidden" name="folder" value="{{ $folder['name'] }}">
						  			<input type="file" name="files[]" class="position-absloute w-100 h-100 env_edit" style="opacity:0;" multiple="true
						  			">
						  		</div>
					  		</form>
					  	</td>
					  	@endif
					  </tfoot>
					</table>
				</div>
			</div>
		@endforeach

		@if($mine)
			<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
			  <form id="blueprints_add_folder" method="post" target="_blueprints_ajax_frame" action="{{ $project_url }}">
			  {{ csrf_field() }}
			  <div class="input-group">
			    <div class="input-group-prepend">
			      	<button class="env_link_grey env_point input-group-text env_border_rslim" id="btnGroupAddon2" type="submit">Add</button>
			    </div>
			    <input name="folder" type="text" class="form-control" placeholder="New folder" aria-label="Input group example" aria-describedby="btnGroupAddon2">
			  </div>
			  </form>
			</div>
		@endif
	</div>

	<div class="col-md-5" id="vs_iframe_holder" style="display: ;">
		<div class="row box-shadow-bottom">
		  <div class="card w-100">
		    <h6 class="card-header dtitle p-2">
		      <i class="fa fa-cube fa-fw mr-1 text-success"></i>3D Model
		    </h6>
		      <div class="card-body p-0">
		        <iframe id="vs_iframe" src="https://www.viewstl.com/?embedded" class="w-100 h-100 border-0 m-0"></iframe>
		      </div>
		      {{--
		      <div class="card-footer env_uploaded_div pl-2">
		        <p class="env_p">Uploaded at XXX</p>
		      </div>
		      --}}
		  </div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$('.blueprints_autosubmit').change(function() {
      $(this).closest("form").submit();
    });

    $('.file_drop').click(function(e) {
    	$.ajax({
		    url: '{{ $project_url }}',
		    type: 'post',
		    data: {
	    		'delete': true, 
	    		'folder': $(this).attr('data-folder'),
	    		'file': $(this).attr('data-file')
		    },
		    headers: {
	          'X-CSRF-TOKEN': '{{ csrf_token() }}'
	    	}
		}).done(function(data) {
		    console.log(data);
		    $('#project_files').load('{{ $project_url }}/files');			
		});
    	e.preventDefault();
    });

    $('.file_view').click(function(e) {
    	var url = $(this).attr('data-url');
    	if(url.endsWith('.stl')) {
    		if(!$('#vs_iframe_holder').is(":visible"))
    			 $('#vs_iframe_holder').show();
    		document.getElementById('vs_iframe').contentWindow.postMessage({msg_type:'load', url:url}, '*');
    	}
    });
</script>

