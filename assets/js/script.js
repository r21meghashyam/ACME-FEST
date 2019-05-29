
var pc=(innerWidth>1200)?true:false;
$(document).ready(function(){


	if(pc)
	{
		console.log(1);
		sizeAdjust();
		$(window).resize(function(){
			sizeAdjust();
		});

	}


	$(window).scroll(function(){
		var mul=(pc)?1:5;
		if(pc){
		$('header').height(window.innerHeight-($(window).scrollTop()*mul));
		if($(window).scrollTop()==0)
			$('.countdown.main').fadeIn();
		}
		if($(window).scrollTop()>0)
			$('.countdown.main').fadeOut();
		

		if(innerWidth>1200){
			$('.title').css('width',($('header').height()*100/window.innerHeight)+"%");
			
		}
		
		if(pc){
		fontSize=($('header').height()*titleFontSize/window.innerHeight);
		if(fontSize<20)
			fontSize=20;
		$('.title').css('font-size',fontSize+"px");

		fontSize=($('header').height()*themeFontSize/window.innerHeight);
		if(fontSize<10)
			fontSize=10;
		$('.title .theme').css('font-size',fontSize+"px");

		fontSize=($('header').height()*navFontSize/window.innerHeight);
		if(fontSize<20)
			fontSize=20;
		top=$('header').height()*90/window.innerHeight;
		imgWidth=($('header').height()*150/window.innerHeight);
		if(imgWidth<40)
			imgWidth=40;
		$(".title img").width(imgWidth);
		$('nav').css('top',(20+($('header').height()*30/window.innerHeight))+"%");
		$('nav li').css('font-size',fontSize+"px");
		}
		else{
			$("header").css("position","absolute");
			topL=$('header').offset().top+$('header').outerHeight();
			scroll=$(document.body).scrollTop();
			if(topL<scroll)
				{
					$("header").css("position","fixed").addClass("top-mode");
					if(Number($("section").css("top").replace("px",""))>70){
						$("section").css("top","70px").css("margin-top","0px");
					
					$(window).scrollTop(70);

				}
				}
		}
	});
});

sizeAdjust=function(){
	$(".title").css("font-size",(window.innerWidth/15)+"px");
	$(".title .theme").css("font-size",(window.innerWidth/60)+"px");

	titleFontSize=Number($('.title').css("font-size").replace("px",""));
	themeFontSize=Number($('.title .theme').css("font-size").replace("px",""));
	navFontSize=Number($("nav li").css("font-size").replace("px",""));
	navPadding=Number($("nav li").css("padding").replace("px",""));
	
	$(window).scroll();
}
