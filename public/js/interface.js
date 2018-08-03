( function($) {
  'use strict';
$(function(e) {
	
/*------------------------------------------------------------------
	PrettyPhoto
	-------------------------------------------------------------------*/
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	  });
	
	
/*-------------------------------------------------------------------------------
	  Smooth scroll to anchor
	-------------------------------------------------------------------------------*/
	var navbar=$('.js-navbar');
	var navbarAffixHeight=80
	$('.js-target-scroll').on('click', function(e) {
		var target = $(this.hash);
		if (target.length) {
			$('html,body').animate({
				scrollTop: (target.offset().top - navbarAffixHeight + 1)
			}, 1000);
			return false;
		}
	});
	$('body').scrollspy({
			offset:  navbarAffixHeight + 1
	});
	$('.navbar-nav a ').on('click', function(){
	  if($('#navigation').removeClass('in')) {
	  }
    });
	
	
/*------------------------------------------------------------------
	Banner-Slideshow
	-------------------------------------------------------------------*/
	$('#banner .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1}
    }
	})
	

/*------------------------------------------------------------------
	Screenshots-Slider
	-------------------------------------------------------------------*/
	$('#screenshots_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
	autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{items:1},
        600:{items:2},
        1000:{items:3}
    }
	})
	
	
/*------------------------------------------------------------------
	Reviews-Slider
	-------------------------------------------------------------------*/
	$('#customer_reviews .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,

	autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1}
    }
	})

 /*-------------------------------------------------------------------------------
  Ajax Form
	-------------------------------------------------------------------------------*/
 
	if ($('#js-ajax-form').length) {
		$('#js-ajax-form').each(function(){
			$(this).validate({
				errorClass: 'error wobble-error',
				submitHandler: function(form){
					$.ajax({
						type: "POST",
						url:"mail.php",
						data: $(form).serialize(),
						success: function() {
							$('.modal').modal('hide');
							$('#success').modal('show');
						},
	
						error: function(){
							$('.modal').modal('hide');
							$('#error').modal('show');
						}
					});
				}
			});
		});
	}
 /*-------------------------------------------------------------------------------
 Newsletter Ajax Form
	-------------------------------------------------------------------------------*/
 	
	if ($('#newsletter-js-ajax-form').length) {
		$('#newsletter-js-ajax-form').each(function(){
			$(this).validate({
				errorClass: 'error wobble-error',
				submitHandler: function(form){
					$.ajax({
						type: "POST",
						url:"newsletter.php",
						data: $(form).serialize(),
						success: function() {
							$('.modal').modal('hide');
							$('#newsletter_success').modal('show');
						},
						error: function(){
							$('.modal').modal('hide');
							$('#newsletter_error').modal('show');
						}
					});
				}
			});
		});
	}
	
/*------------------------------------------------------------------
	back to top
	-------------------------------------------------------------------*/
 var top = $('#back-top');
	top .hide();
	 
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				top .fadeIn();
			} else {
				top .fadeOut();
			}
		});
		$('#back-top a').on('click', function(e) {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});	 


});


})(jQuery);