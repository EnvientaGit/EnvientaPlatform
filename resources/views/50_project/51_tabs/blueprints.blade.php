{{--
<div class="row m-0">
	<iframe src="https://3dwarehouse.sketchup.com/embed.html?mid=f9c78f177ea35a4bf5926f6cee661177&width=580&height=326"
		frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="726.66" height="435" allowfullscreen
		class="dmodel border rounded box-shadow-bottom p-2 mb-3" style="display: none;">
	</iframe>
</div>
--}}

<div class="container-fluid mb-5">
	<div class="row">
		<div class="col-md-7">
			@foreach($folders as $folder)
			<div class="row mr-0">
				<div class="border card box-shadow-bottom mb-3">
					<div class="tableTitle">
    						@if($folder['name'] == 'images')
    							<caption class="p-2 text-dark bg-light border-top">
    								<h4>@lang('project.SLIDER_IMAGES')</h4>
    							</caption>
    						@else
    							@if ($folder['name'] == 'blueprints')
    								<caption>
        							<h4>@lang('project.BLUEPRINTS')</h4>
        							</caption>
    							@else
        							<caption class="p-2 text-dark bg-light border-top">
        							<h4>{{ $folder['name'] }}</h4>
        							@if($mine)
        								<a href=""><i class="fa fa-window-close text-danger env_edit p-1 pull-right" 
        									title="@lang('project.DELETEFOLDER')"></i></a>
        							@endif
        							</caption>
        						@endif
    						@endif
					</div>	
				
					<table class="table table-hover table-responsive table-sm rounded mb-0">
						<thead>
							<tr>
								<th class="border-0">№</th>
								<th class="border-0 w-40">@lang('project.NAME')</th>
								<th class="border-0 w-20">@lang('project.DATE')</th>
								<th class="border-0 w-30">@lang('project.SIZE')</th>
								@if($mine)
									<th class="border-0 w-15">@lang('project.DELETE')</th>
								@endif
								<th class="border-0">@lang('project.DOWNLOAD')</th>
							</tr>
						</thead>	
						<tbody>
							@foreach($folder['files'] as $idx => $file)
							<tr class="text-center">
								<td class="bg-primary text-light text-center ">{{ $idx + 1 }}.</td>
								<td class="text-left"><span class="file_view" data-url="{{ $repo_url . '/' . $folder['name'] . '/' . $file['name'] }}" style="cursor: pointer;">{{$file['name']}}</span></td>
								<td class="text-left">{{$file['lastmod']}}</td>
								{{--<td class="text-left">v1.1.2</td>--}}
								<td class="text-left">{{$file['size']}}</td>
								@if($mine)
								<td class="text-danger">
								  <a href="#" data-folder="{{$folder['name']}}"
									title="@lang('project.DROP')"  
									data-file="{{$file['name']}}" class="file_drop">
								     <i class="fa fa-times fa-lg" aria-hidden="true"></i></a>
								</td>
								@endif
								<td class="text-danger"><a href="{{ url($repo_url . '/' . $folder['name'] . '/' . $file['name']) }}" 
									title="@lang('project.DOWNLOAD')" target="_blank">
									<i class="far fa-cloud-download fa-lg" aria-hidden="true"></i></a></td>
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
												<i class="far fa-cloud-upload fa-2x text-primary" aria-hidden="true"></i>
												<h6>@lang('project.UPLOAD')</h6>
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
			<div class="row">
				<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
					<form id="blueprints_add_folder" method="post" target="_blueprints_ajax_frame" action="{{ $project_url }}">
						{{ csrf_field() }}
						<div class="input-group">
							<input name="folder" type="text" class="form-control" 
							placeholder="@lang('project.NEWFOLDER')" aria-label="Input group example" aria-describedby="btnGroupAddon2">
							<div class="input-group-prepend">
								<button class="env_link_grey env_point input-group-text env_border_rslim" id="btnGroupAddon2" type="submit">
									@lang('project.ADD')
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			@endif
		</div>

		<div class="col-md-5" id="vs_iframe_holder">
			<div class="row box-shadow-bottom">
				<div class="border card w-100">
					<h6 class="card-header dtitle p-2">
						<i class="fa fa-cube fa-fw mr-1 env_color"></i>3D Model
					</h6>
					<div class="card-body p-0" style="height: 400px;">
						<iframe id="vs_iframe" src="https://www.viewstl.com/?embedded" class="w-100 h-100 border-0 m-0"></iframe>
					</div>
					{{--
						<div class="card-footer env_uploaded_div pl-2">
							<p class="env_p">@lang('project.UPLADED')</p>
						</div>
						--}}
					</div>
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
