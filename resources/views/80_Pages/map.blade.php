@extends('00_header.platform')

@section('content')

    <div class="container p-3">
      <div class="row">
        <div class="col-md-12">
        	<div class="row m-0 mb-3 box-shadow-bottom">
			  	<div class="card w-100">
			    	<h6 class="card-header dtitle p-2">Makerspace Map 
			    		<i class="fa fa-map-o" aria-hidden="true"></i>
			    		<i class="fa fa-plus-square-o env_edit pull-right" aria-hidden="true" data-toggle="modal" data-target=""></i>
			    	</h6>
				    <div class="card-body p-3" id="maker_map" style="height: 600px;">
				        <p class="card-text text-justify">
				          
				        </p>
				    </div>
			  	</div>
			</div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    	var map = new L.Map('maker_map', {center: new L.LatLng(51.51, -0.11), zoom: 9});
    	var googleLayer = new L.Google('ROADMAP');
      	map.addLayer(googleLayer);

      	navigator.geolocation.getCurrentPosition(function(p) {
      		console.log(p);
      		map.panTo(new L.LatLng(p.coords.latitude, p.coords.longitude));
      	});
    </script>
    
@endsection 