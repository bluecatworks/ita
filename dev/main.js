// bootstrap JS modules (for more modules look in node_modules/bootstrap-styl/js/)
require('bootstrap-styl/js/dropdown');
require('bootstrap-styl/js/collapse');

require('./main.styl');

$(document).ready(function(){
	$(".second-menu [href]").each(function() {
		if (this.href == window.location.href) {
			$(this).addClass("active");
		}
	});

	$('body').css('display', 'block');

	$('.logo-area').stickMe({
		topOffset: 100,
		transitionStyle: 'slide'
	});

	$('.navbar-toggle').click(function(){
		$('.left-collapse').toggle();
		$('.menu-overlay').toggle();
		return false;
	});

	$('a.close-menu').click(function(){
		$('.left-collapse').toggle('right');
		$('.menu-overlay').toggle();
		return false;
	});

	$('.menu-overlay').click(function(){
		$('.left-collapse').toggle('right');
		$('.menu-overlay').toggle();
	});

	$( ".nav > ul > li a" ).click(function() {
		if($( this ).parent().find('.sub-menu').length > 0){
			if($( this ).parent().find('.sub-menu').is(":visible")){
				$( this ).parent().find('.sub-menu').fadeOut('fast');
			}
			else{
				$( this ).parent().find('.sub-menu').fadeIn('slow');
			}
			return false;
		}
	});

/*	$( ".nav > ul > li" ).mouseleave(function() {
		$( this ).find('.sub-menu').fadeOut();
	});*/
});