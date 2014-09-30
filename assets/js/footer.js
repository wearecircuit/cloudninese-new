var footer = function(){

	function init(){
		$(window).on('scroll', calc);
	}

	function calc(){

		var w = $(window)
		,	f = $('footer.content-info')
		,	c = $('.career')
		,	e = $('.contact-form')
		,	x = $('.social-media')

		// Element
		,	eHeight = e.outerHeight()
		,	eOffset = e.offset().top

		// Window
		,	wHeight = w.height()
		,	wOffset = w.scrollTop()

		// Boxes
		,	container = eHeight + eOffset + x.outerHeight()
		,	viewport = wHeight + wOffset

		// Fold
		,	fold = container - viewport;

		// Position 'career' according to 'social-media' height.
		c.css('bottom', x.outerHeight());

		var fHeight;

		// Add/remove 'fixed' classes.
		if( fold <= 0 && !f.hasClass('locked') ){
			fHeight = c.outerHeight() + e.outerHeight() + x.outerHeight();
			f.css('height', fHeight ).addClass('locked');
			c.css('visibility','visible');
		}
		else if( fold > 0 && f.hasClass('locked') ) {
			f.removeAttr('style').removeClass('locked');
			c.removeAttr('style');
		}

	}

	return {
		init: init
	}

}();