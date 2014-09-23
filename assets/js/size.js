var size = function(){

	var w, h;

	function init(){
		events();
	}

	function events(){
		$(window).on('load resize', function(){

			// w = window.innerWidth
			// 	|| document.documentElement.clientWidth
			// 	|| document.body.clientWidth;

			h = window.innerHeight
				|| document.documentElement.clientHeight
				|| document.body.clientHeight;

			setSize();
		});
	}

	function setSize(){
		$('.fullsize').each(function(){
			$(this).css('height', h);
		});
	}

	return {
		init: init
	}

}();