<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators d-none">
					@foreach($images as $idx => $image)
                    	<li data-target="#carousel" data-slide-to="{{ $idx }}" class="{{ $idx == 0 ? 'active': ''}}"></li>
                  	@endforeach
				</ol>
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					@foreach($images as $idx => $image)
						@if($idx % 4 == 0)
                    	<div class="carousel-item {{ $idx == 0 ? 'active': ''}}">
                    		<div class="row">
                    	@endif		
	                      		<div class="col-sm-3">
									<div class="thumb-wrapper">
										<div class="img-box">
											<img src="{{$image}}" class="img-fluid rounded vlink_img env_point vs_img" alt="" data-idx="{{$idx}}">
										</div>
									</div>
								</div>
						@if(($idx - 3) % 4 == 0 || count($images)-1 == $idx)		
							</div>
                    	</div>
                    	@endif
                  	@endforeach
				</div>
				<!-- Carousel controls -->
				<a class="rounded carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="rounded carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>

		</div>
	</div>
</div>

@extrajs
<script type="text/javascript">
	$(".vs_img").click(function() {
		$('#vlinks_slider').carousel($(this).data('idx'));
		$('#vlinks_modal').modal('show');
	});
</script>
@endextrajs