var menu = function(){

	var event_type = (typeof window.Touch == 'object') ? 'touchend' : 'click'
	,	the_class = 'sitenav-visible'
	,	nav_show = $('.nav-show')
	,	nav_hide = $('.nav-hide')
	,	parent = $('body')
	,	nav = $('.sitenav');

	function init(){
		events();
	}

	function events(){
		nav_show.on( event_type, show );
		nav_hide.on( event_type, hide );
	}

	function show( ev ){
		ev.preventDefault();
		parent.addClass( the_class );
		nav_show.hide();
		nav_hide.show();

		// Cancel out scroll
		// window.onmousewheel = document.onmousewheel = function(ev){
		// 	ev.preventDefault();
		// };
	}

	function hide( ev ){
		ev.preventDefault();
		parent.removeClass( the_class );
		nav_show.removeAttr('style');
		nav_hide.removeAttr('style');

		// Reinstate scroll
		// window.onmousewheel = document.onmousewheel = null;
	}

	return {
		init: init
	}

}();