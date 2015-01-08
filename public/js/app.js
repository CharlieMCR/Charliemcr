(function($, w, undefined){
    $(function(){

// hide div beneath second h2

	$('.title:nth-of-type(1n+2) ~ div').addClass('hide');
	$('.title:nth-of-type(1n+2)').addClass('closed');
	$('.employment .description').addClass('hide');
	$('.title').click(function() {
	    $(this).next().slideToggle();
	    $(this).toggleClass('closed');
	    $(this).toggleClass('open');
	});

	function setFrontHeight() {
		var windowHeight = $(window).height();
		var windowWidth = $(window).width();
		$('.front').css('height', windowHeight - 52);

		$('#main-content').css('minHeight', windowHeight);
	}

	setFrontHeight();
	var win = $(window).width();
    $(window).resize(function(e) {
        if ($(this).height() <= win-50 || $(this).height() >= win+50) {
            setFrontHeight();
        };
        
    });

        
    }); // end ready

    // stuff not needing dom can run here.
})(jQuery, window);