// bootstrap JS modules (for more modules look in node_modules/bootstrap-styl/js/)
require('bootstrap-styl/js/dropdown');
require('bootstrap-styl/js/collapse');

require('./main.styl');

$(document).ready(function(){

	$('body').css('display', 'block');

	$('.logo-area').stickMe({
		topOffset: 100,
		transitionStyle: 'slide'
	});

	$('.navbar-toggle').click(function(){
		$('.left-collapse').toggle( "right" );
	});

	$('#close-menu').click(function(){
		$('.left-collapse').toggle( "right" );
	});

});