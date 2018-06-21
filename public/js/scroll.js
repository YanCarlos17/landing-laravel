$( document ).ready(function() {
	$( ".up" ).click(function() {
		$('html, body').animate({
			scrollTop:$('.main__intro').offset().top - 48
		}, 'slow');
	});

	$( window ).scroll(function() {
		if($(window).scrollTop() > 300) {
			$(".up").fadeIn('fast', function(){
			});
		} 
		else {
			$(".up").fadeOut('fast', function(){
			});
		}
	});
	
});