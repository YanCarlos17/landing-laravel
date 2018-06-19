$( document ).ready(function() {
	
	$( ".up" ).click(function() {
		$('html, body').animate({
			scrollTop:$('.main__intro').offset().top - 48
		}, 'slow');
	});

    // Boton Up para el scroll, después de 48px

	$( window ).scroll(function() {
		if($(window).scrollTop() > 50) {
			$(".up").fadeIn('fast', function(){
			});
		} 
		else {
			$(".up").fadeOut('fast', function(){
			});
		}
	});
	
});