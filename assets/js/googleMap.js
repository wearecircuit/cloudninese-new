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
		url: 'http://local.cloudnine.se/wp-content/themes/cloudnine/assets/img/poi-heart.svg',
		// size: new google.maps.Size(20, 32),
		// origin: new google.maps.Point(0,0),
		// anchor: new google.maps.Point(0, 32)
	};

	function init(){

		// var styledMap = new google.maps.StyledMapType(styles, {name: 'Styled Map'});


		map = new google.maps.Map(canvas, {
			zoom: 15,
			center: coords,
			// mapTypeControlOptions: {
			// 	mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			// }
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: styles
		});

		var marker = new google.maps.Marker({
			position: coords,
			icon: image,
			map: map
		});

		// map.mapTypes.set('map_style', styledMap);
		// map.setMapTypeId('map_style');
	}

	google.maps.event.addDomListener(window, 'load', init);

}();