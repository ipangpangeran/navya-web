//Page Loader
/*window.onload=function(e){
	function onReady(callback) {
		var intervalID = window.setInterval(checkReady, 1000);
	
		function checkReady() {
			if (document.getElementsByTagName('body')[0] !== undefined) {
				window.clearInterval(intervalID);
				callback.call(this);
			}
		}
	}
	
	function show(id, value) {
		document.getElementById(id).style.display = value ? 'block' : 'none';
	}
	
	onReady(function (e) {
		show('fullpage', true);
		show('loading', false);
	});
}*/

//Parallax backgroung
$.fn.parallax = function ( resistance, mouse ) {
	$el = $( this );
	TweenLite.to( $el, 0.2, 
	{
		x : -(( mouse.clientX - (window.innerWidth/2) ) / resistance ),
		y : -(( mouse.clientY - (window.innerHeight/2) ) / resistance )
	});

};

//Glitch Image
$( function(e) {
	$( ".glitch-img" ).mgGlitch({
		destroy : false, // set 'true' to stop the plugin
		glitch: true, // set 'false' to stop glitching
		scale: true, // set 'false' to stop scaling
		blend : true, // set 'false' to stop glitch blending
		blendModeType : 'hue', // select blend mode type
		glitch1TimeMin : 600, // set min time for glitch 1 elem
		glitch1TimeMax : 900, // set max time for glitch 1 elem
		glitch2TimeMin : 10, // set min time for glitch 2 elem
		glitch2TimeMax : 115, // set max time for glitch 2 elem
	});
});


$(document).ready(function(e) {
	$('#fullpage').fullpage({
		autoScrolling: false,
		verticalCentered: false,
		responsiveWidth: 1100,
		//responsiveHeight: 0,
		slidesNavigation: true,
	   	/*afterRender: function () {
			setInterval(function () {
				$.fn.fullpage.moveSlideRight();
			}, 1000);
		},*/
	
	});
	
	new WOW().init();
	
	//Bx- Slider
	$('.bxslider').bxSlider({
	 // mode: 'fade',
	  auto: true,
	  pager: false,
	  autoControls: false,
	  pause: 5000,
	  onSliderLoad: function (e) {
        $('.text-play div').eq(1).addClass('load');
      },
	  onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
		console.log(currentSlideHtmlObject);
		$('.load').removeClass('load');
		$('.text-play div').eq(currentSlideHtmlObject + 1).addClass('load');
	  },
	  onSlideBefore: function (e) {
		$(".text-play div.load").removeClass('load');
		$(".one.text-play div.load").removeAttr('style');
	  },
	});
	
	var slider = $('.bxslider-dua').bxSlider({
		auto: true,
	  	pager: true,
	 	autoControls: false,
	  	pause: 5000
	});
	$(document).keydown(function(e){
		if (e.keyCode == 39)	{
			slider.goToNextSlide();
			return false;
		}
		else if (e.keyCode == 37)	{
			 slider.goToPrevSlide();
			return false;
	   }
	});
	//Text Animasi
	/*$('#text-play').textition({
		speed: 1,
		animation: 'ease-out',
		map: {x: 300, y: 200, z: 0},
		autoplay: false,
		interval: 5
	})*/
	
	//Main Menu Burger
	/*$('#nav-icon2').click(function(e){
		$(this).toggleClass('open');
	});*/
	
	//Main Menu Show
	$('.menu-wrap a').click(function(e){
        $('.menu-full').animate({
			top:'0',
            right: '0',            
            height: '100%',
            width: '100%'			        
		 }, 600, function(e) {
			$('.show-menu, .white-navya, .close-menu').fadeIn(200);
	  	});	
    });
	
	//Main Menu Hide
	$('.close-menu').click(function(e){
		$('.show-menu, .white-navya, .close-menu').hide(0);
        $('.menu-full').animate({
			top:'0',
            right: '0',            
            height: '0',
            width: '0'        
		 	}, 500, function(e) {				
		});
	});
	
	//Onfocus text Area
	$('.what-search, .contact-right input[type="text"], .contact-right textarea').focus(function (e) {
        $(this).data('placeholder', $(this).attr('placeholder'))
               .attr('placeholder', '');
    	}).blur(function (e) {
        $(this).attr('placeholder', $(this).data('placeholder'));
    });
	
	//Show Button Seach
	$('#text-seacrh').focus(function(e) {
    $('.connect a').show();
    $(document).bind('focusin.what-search click.what-search',function(e) {
			if ($(e.target).closest('.what-search, #text-seacrh').length) return;
			$(document).unbind('.what-search');
			$('.connect a').hide(0);
		});
	});
	$('.connect a').hide();
	
	//Show Hide masiking
	$('.show-hover, .project-wrapp').mouseenter(function(e) {
		$(this).find('.trans-cover').fadeIn();
	});	
	$('.show-hover, .project-wrapp').mouseleave(function(e) {
		$(this).find('.trans-cover').fadeOut();
	})
	
	$('.bg-grey').mouseenter(function(e) {
		$(this).find('.expert-wrapp').addClass('blue-hover');
	});
	
	$('.bg-grey').mouseleave(function(e) {
		$(this).find('.expert-wrapp').removeClass('blue-hover');
	})
});


$(document).mousemove( function(e) {
	$( '.background' ).parallax( -50, e );
	$( '.cloud1' ).parallax( 35, e );
	$( '.cloud2' ).parallax( 25, e );
	$( '.cloud3' ).parallax( 10, e );
	$( '.back-who' ).parallax( -40, e );
	$( '.frnt-who1' ).parallax( 30, e );
});