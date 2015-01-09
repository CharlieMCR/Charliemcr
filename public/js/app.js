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
	// console.log($('.front').height());

	// setFrontHeight();
 //    $(window).on('orientationchange', function(e){
 //    	setFrontHeight();
 //    });

    $('.down').on('click', function(){
    	$(this).fadeOut();
    	$('html, body').animate({
    		scrollTop: $('.wrapper').offset().top
    	}, 2000);
    });
        
    }); // end ready

    // stuff not needing dom can run here.
})(jQuery, window);