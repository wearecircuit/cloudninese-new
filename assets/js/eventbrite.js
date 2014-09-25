var eventbrite = function(){

	var url = 'https://www.eventbriteapi.com/json/event_search'
	,	obj = {app_key: 'UURJTO3QTH2BATRGQX'};

	function init(){
		$.getJSON( url, obj )
			.done(function( data ){
				console.log( 'done', data );
			})
			.fail(function(){
				console.log( 'fail' );
			});
	}

	return {
		init: init
	}

}();