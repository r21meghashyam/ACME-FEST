$(document).ready(function(){
	if(innerWidth<1200){
			$('header').addClass('top-mode');
		$('nav').css('width',$('nav a').outerWidth()).css('right','-'+$('nav').outerWidth());
	}

	$(window).scroll(function(){
		if(innerWidth<1200){
			$('header').addClass('top-mode');
			$('nav').css('width',$('nav a').outerWidth()).css('right','-'+$('nav').outerWidth());
		}
	});
	$('.menu-bar').click(function(){
		$('nav').animate({right:0},function(){
			$('.nav-closer').fadeIn();
		});
		
	});
	$('.nav-closer').click(function(){
		$('nav').animate({right:'-'+$('nav').outerWidth()},function(){
			$('.nav-closer').fadeOut();
		});
		
	});

});