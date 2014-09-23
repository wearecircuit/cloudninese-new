var menu = function(){

	var event_type = (typeof window.Touch == 'object') ? 'touchend' : 'click'
	,	the_class = 'visible'
	,	nav_show = $('.nav-show')
	,	nav_hide = $('.nav-hide')
	,	nav = $('.sitenav');

	function init(){
		events();
	}

	function events(){
		nav_show.on( event_type, show );
		nav_hide.on( event_type, hide );
	}

	function show(){
		nav.addClass( the_class );
		nav_show.hide();
		nav_hide.show();
	}

	function hide(){
		nav.removeClass( the_class );
		nav_show.removeAttr('style');
		nav_hide.removeAttr('style');
	}

	return {
		init: init
	}

}();