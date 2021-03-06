@extends('admin.index')

@section('content2')
<strong><i class="glyphicon glyphicon-globe"></i> Peta</strong>
<hr>
<div id="map" style="width: 80%;"></div>

@stop

@section('script')
<!-- peta -->
<script>
var map;
var marker;
var infoWindow;
var infoWindow2;

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -34.397, lng: 150.644},
		zoom: 8
	});
	infoWindow = new google.maps.InfoWindow({map: map});

  	// Try HTML5 geolocation.
  	if (navigator.geolocation) {
  		navigator.geolocation.getCurrentPosition(function(position) {
	  		var pos = {
	  			lat: position.coords.latitude,
	  			lng: position.coords.longitude
	  		};

	  		infoWindow.setPosition(pos);
	  		infoWindow.setContent('Lokasi Anda.');
	  		map.setCenter(pos);
  		}, function() {
  			handleLocationError(true, infoWindow, map.getCenter());
  		});
  	} else {
	    // Browser doesn't support Geolocation
	    handleLocationError(false, infoWindow, map.getCenter());
	}

	// Listener untuk menampilkan lat, lng yang diklik
	google.maps.event.addListener(map, "click", function (e) {
		placeMarker(e.latLng); //memanggil fungsi placeMarker
	});
}

// Fungsi untuk menampilkan lat, lng pada peta yang diklik
function placeMarker(location) {
	if (marker) {
		marker.setPosition(location);
	} else {
		marker = new google.maps.Marker({
			position: location,
			map: map
		});
	}
	infoWindow2 = new google.maps.InfoWindow();
	var result = "Latitude : "+location.lat()+"<br>Longitude : "+location.lng();
	infoWindow2.setContent(result);
	infoWindow2.open(map, marker);
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeolocation ?
		'Error: The Geolocation service failed.' :
		'Error: Your browser doesn\'t support geolocation.');
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKGnrU99_YZNYBR9Kid4-hjrxDW0lmZsY&callback=initMap" async defer></script>
@stop