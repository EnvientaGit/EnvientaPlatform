  <div class="">
    <div class="container p-3 bg-warning">
      <div class="row">
        <div class="col-md-8 bg-warning">
          <style>
            path {
                fill: #fff;
            }
            #map {
              width: 100%;
              height: 500px;
              background-color: grey;
            }
          </style>
          <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: new google.maps.LatLng(-33.91722, 151.23064),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          parking: {
            icon: iconBase + 'parking_lot_maps.png'
          },
          library: {
            icon: iconBase + 'library_maps.png'
          },
          info: {
            icon: iconBase + 'info-i_maps.png'
          }
        };

        var features = [
          {
            position: new google.maps.LatLng(-33.91721, 151.22630),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91539, 151.22820),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91747, 151.22912),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91910, 151.22907),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91725, 151.23011),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91872, 151.23089),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91784, 151.23094),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91682, 151.23149),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91790, 151.23463),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91666, 151.23468),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.916988, 151.233640),
            type: 'info'
          }, {
            position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.916365282092855, 151.22937399734496),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.91665018901448, 151.2282474695587),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.919543720969806, 151.23112279762267),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.91608037421864, 151.23288232673644),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
            type: 'library'
          }
        ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzUgMvVth_8CH-_8g9ONZFDx1U8-DsOEM&callback=initMap">
          </script>
        </div>
        <div class="col-md-4 bg-warning">
          <div class="pull-right e_pencil">
            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
          </div>
          <h4 class="py-3"><b>Manufacturer &amp; Assembly Warranty Time</b></h4>
          <table class="table table-hover table-responsive">
            <thead class="thead-default">
              <tr>
                <th scope="row" class="text-center"><h5>№</h5></th>
                <th class="text-center"><h5>Warranty Time</h5></th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <th scope="row" class="btn-danger text-center">3.</th>
                <td><b>03/2017 - 03/2020</b></td>
              </tr>
              <tr class="text-center">
                <th scope="row" class="btn-danger text-center">2.</th>
                <td><b>03/2017 - 03/2019</b></td>
              </tr>
              <tr class="text-center">
                <th scope="row" class="btn-danger text-center">1.</th>
                <td><b>03/2017 - 03/2018</b></td>
              </tr>
            </tbody>
          </table>
          <br>
          <h5>Pay with:</h5>
            <div>
              <a href="#">
                <button class="btn btn-danger"><i class="fa fa-credit-card" aria-hidden="true"></i> | Credit Card</button>
              </a>
            </div><br>
          <h5>Or with cryptocurrency:</h5>
            <div>
              <a href="#">
                <button class="btn btn-danger"><i class="fa fa-paypal" aria-hidden="true"></i> | PayPal</button>
              </a>
              <a href="#">
                <button class="btn btn-danger"><i class="fa fa-btc" aria-hidden="true"></i> | BitCoin</button>
              </a>
              <a href="#">
              <button class="btn btn-danger">
              <svg aria-labelledby="simpleicons-ethereum-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="15" height="19" style="vertical-align: middle;">
                <path d="M11.944 17.97L4.58 13.62 11.943 24l7.37-10.38-7.372 4.35h.003zM12.056 0L4.69 12.223l7.365 4.354 7.365-4.35L12.056 0z"/>
              </svg> | Ether</button>
            </a>
            </div>
        </div>
      </div>
    </div>
  </div>