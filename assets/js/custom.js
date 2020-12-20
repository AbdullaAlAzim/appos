(function($) {
    "use strict";
    $(document).on('ready', function() {

		
			
	//jQuery for preloader
	
	jQuery(window).load(function() {
	 jQuery(".wrapper").delay(2000).fadeOut(500);
	 jQuery("#preloader_2").click(function() {
	 jQuery("#preloader_2").fadeOut(500);
	 })
	});



	//jQuery for page scrolling feature
	
	$(".menu-icon").on("click", function () {
	$("body").addClass('open')
	});
	
	$(".mob-menu-close").on("click", function () {
	$("body").removeClass('open')
	});


	//jQuery for mobile-menu
	
	$('ul').each( function( i, liList ) {
	  var $liList = $( liList );
	  $liList.on( 'click', 'li a', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 2000, 'easeInOutExpo');
		event.preventDefault();
	  });
	});
	
	
	
	//jQuery for menu-fixed

	var fixed_top = $(".main-menu");
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 80) {
			fixed_top.addClass("menu-fixed animated fadeInDown");
		} else {
			fixed_top.removeClass("menu-fixed animated fadeInDown");
		}

	});
	
	
	
	//jQuery for banner
	
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		slidesPerView: 5,
		autoplayDisableOnInteraction: true,
		centeredSlides: true,
		spaceBetween: 0,
		loop: true,
		pagination: {
		el: '.swiper-pagination',
		clickable: true,
	  },
	  centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
	  breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }
	});


	
	//jQuery for slider01
	
	$(document).ready(function(){
		var swiper = new Swiper('.swiper-container02', {
			pagination: {
			el: '.swiper-pagination',
			type: 'progressbar',
			},
			navigation: {
			nextEl: '.swiper-next',
			prevEl: '.swiper-prev',
			},
		  
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		centeredSlides: true,
			autoplay: {
			delay: 5500,
			disableOnInteraction: false,
		},
		loop:true,
		slidesPerView: 1,
	});



	//jQuery for page scroll

	$(document).ready(function(){
	 //Check to see if the window is top if not then display button
	   $(window).scroll(function(){
	   if ($(this).scrollTop() > 100) {
		$('.scrollToTop').fadeIn();
	   } else {
		$('.scrollToTop').fadeOut();
	   }
	   });
	 
	   //Click event to scroll to top
	   $('.scrollToTop').click(function(){
	   $('html, body').animate({scrollTop : 0},800);
	   return false;
	   });
	   });
	});	

		});
})(jQuery);