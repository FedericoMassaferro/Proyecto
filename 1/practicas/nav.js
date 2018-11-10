$(document).ready(function(){
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('header').addClass('header2');
		} else {
			$('header').removeClass('header2');
		}
	});
});
$(document).ready(function(){
	var ancho = $(window).width();
	var posicion = ancho * 0.20

	if (ancho <= 1350){
		$('body').css({
			'background-position': '0' + posicion + 'px'
		});
	}
});
$(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 100);
	});
	$(window).scroll(function(){
		if( $(this).scrollTop() > 800 ){
			$('.ir-arriba').slideDown(1200);
		} else {
			$('.ir-arriba').slideUp(600);
		}
	});
});
