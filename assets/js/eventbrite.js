var eventbrite = function(){

	// Eventbrite data.
	var uid = '99452424679'
	,	url = 'https://www.eventbriteapi.com/v3/users/'+ uid +'/owned_events/'
	,	key = {token: '4BWLTDSO63WYJPZSE7DV'};

	// doT.js template function.
	var tplFn
	,	front = $('.home.page');

	// Load local event template.
	if( front.length ){
		$.ajax({
			url: 'wp-content/themes/cloudnine/assets/js/eventbrite.tpl',
			success: function( data ){
				tplFn = doT.template( data );
			}
		});
	}

	// Load event data from Eventbrite.
	function init(){
		if( front.length ){
			$.ajax({url: url, data: key,})
				.done(function( data ){	
					output( data.events );
				})
				.fail(function(){
					console.log('Request failed.');
				});
		}
	}

	// Create output based on event data.
	function output( data ){
		var elm = $('.eventbrite');

		// Get object with status 'live'.
		var obj;
		for(var i=0; i<data.length; i++){
			if(data[i].status == 'live'){
				obj = data[i];
				break;
			}
		}

		// Date based on data.
		var d = new Date( obj.start.local )
		,	m = ['jan','feb','mar','apr','maj','jun','jul','aug','sep','okt','nov','dec'];

		if( elm.length ){
			// Model for template.
			var model = {
				logo: obj.logo.url,
				date: d.getDate(),
				month: m[d.getMonth()],
				format: obj.format.short_name,
				title: obj.name.text,
				url1: obj.url,
				url2: obj.organizer.url
			};

			// Apply model to template and append to HTML.
			elm.html(tplFn( model ));
		}
	}

	return {
		init: init
	}

}();