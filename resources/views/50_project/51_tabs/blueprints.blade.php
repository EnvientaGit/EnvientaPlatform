{{--
<div class="row m-0">
	<iframe src="https://3dwarehouse.sketchup.com/embed.html?mid=f9c78f177ea35a4bf5926f6cee661177&width=580&height=326" 
		frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="726.66" height="435" allowfullscreen 
		class="dmodel border rounded box-shadow-bottom p-2 mb-3" style="display: none;">
	</iframe>
</div>
--}}

@foreach($folders as $folder)
<div class="row m-0">
	<div class="card box-shadow-bottom mb-3">
		<table class="table table-hover table-responsive table-sm rounded mb-0">
		<caption class="p-2">List of <strong>{{ $folder['name'] }}</strong></caption>
		  <thead class="thead-default bg-light">
		    <tr>
		      <th class="border-0">№</th>
		      <th class="border-0 w-40">Name</th>
		      <th class="border-0 w-20">Date</th>
		      {{--<th class="border-0 w-15">Version</th>--}}
		      <th class="border-0 w-30">Size</th>
		      <th class="border-0 w-15">Delete</th>
		      <th class="border-0">File</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach($folder['files'] as $idx => $file)
		    <tr class="text-center">
		      <td class="bg-danger text-white text-center ">{{ $idx - 1 }}.</td>
		      <td class="text-left">{{$file}}</td>
		      <td class="text-left">2017-03-01</td>
		      {{--<td class="text-left">v1.1.2</td>--}}
		      <td class="text-left">3.8 MB</td>
		      <td class="text-left"><a href="" class="text-danger">Drop <i class="fa fa-times text-danger" aria-hidden="true"></i></a></td>
		      <td class=""><a href="{{ $repo_url . '/' . $folder['name'] . '/' . $file }}" target="_blank"><i class="fa fa-cloud-download fa-lg" aria-hidden="true"></i></a></td>
		    </tr>
		    @endforeach
		  </tbody>
		  <tfoot>
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
		  </tfoot>
		</table>
	</div>
</div>
@endforeach

<script type="text/javascript">
	$('.blueprints_autosubmit').change(function() {
      $(this).closest("form").submit();
    });
</script>

<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <form id="blueprints_add_folder" method="post" target="_blueprints_ajax_frame" action="{{ $project_url }}">
  {{ csrf_field() }}
  <div class="input-group">
    <div class="input-group-prepend">
      	<button class="env_link_grey input-group-text env_border_rslim" id="btnGroupAddon2" type="submit">Add</button>
    </div>
    <input name="folder" type="text" class="form-control" placeholder="New folder" aria-label="Input group example" aria-describedby="btnGroupAddon2">
  </div>
  </form>
</div>