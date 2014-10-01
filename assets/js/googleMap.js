var googleMap = function(){

	var styles = [
	  {
	    "featureType": "water",
	    "stylers": [
	      { "visibility": "simplified" },
	      { "invert_lightness": true },
	      { "color": "#38aae1" }
	    ]
	  },{
	    "featureType": "road",
	    "elementType": "labels",
	    "stylers": [
	      { "visibility": "simplified" }
	    ]
	  },{
	    "featureType": "poi",
	    "stylers": [
	      { "visibility": "off" }
	    ]
	  },{
	    "featureType": "landscape",
	    "stylers": [
	      { "hue": "#0091ff" }
	    ]
	  },{
	    "featureType": "road",
	    "elementType": "geometry.stroke",
	    "stylers": [
	      { "visibility": "off" }
	    ]
	  },{
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [
	      { "visibility": "on" },
	      { "lightness": 100 }
	    ]
	  }
	];

	var canvas = document.getElementById('map-canvas')
	,	coords = new google.maps.LatLng(59.3340906, 18.0981453)
	,	map;
	
	var image = {
		url: 'http://local.cloudnine.se/wp-content/themes/cloudnine/assets/img/poi_50procent.svg',
		size: new google.maps.Size(50, 50),
		origin: new google.maps.Point(100,100),
		// anchor: new google.maps.Point(0,0)
	};

	var contentString = '<div id="content">'+
							'<div id="siteNotice"></div>'+
							'<div id="bodyContent">'+
								'<strong>Cloud Nine AB</strong>'+
								'<p>Lorem ipsum dolor sit amet..</p>'+
							'</div>'+
						'</div>';

	function setMapAndMarker(){

		map = new google.maps.Map(canvas, {
			zoom: 15,
			center: new google.maps.LatLng(59.3360906, 18.0981453),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: styles
		});

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		var marker = new google.maps.Marker({
			position: coords,
			map: map,
			// icon: image
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}

	function init(){
		google.maps.event.addDomListener(window, 'load', setMapAndMarker);
	}

	return {
		init: init
	}

}();