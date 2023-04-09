/*==========

Theme Name: Digital Design - Creative Agency HTML Template
Theme Version: 1.0

==========*/

/*==========
----- JS INDEX -----
1.Whole Script Strict Mode Syntax
2.Loader JS
3.Wow Animation JS
4.Smooth Scrolling JS
5.Scroll To Top JS
6.Sticky Header JS
7.Toogle Menu Mobile JS
8.Testimonial Slider JS
9.Team Slider JS
10.Partners Slider JS
11.Pricing Switchig JS
12.Submenu For Mobile JS
13.Pricing Mobile Slider JS
14.Team Page Mobile Slider JS
15.Portfolio Tabbing JS
==========*/



$(document).ready(function($) {

	// Whole Script Strict Mode Syntax
	"use strict";

	$(window).ready(function(){
		// Loader JS Start
		$('.loader-box').fadeOut();
		 // Loader JS End
	     $('body').removeClass('fixed');
		 // Wow Animation JS Start
		 new WOW().init(); 
		 // Wow Animation JS Start
	});


	// Smooth Scrolling JS Start
	if(window.location.hash){
		// smooth scroll to the anchor id
		$('html,body').animate({
			scrollTop:$(window.location.hash).offset().top - 100
			},1000,'swing');
		} else {
			setTimeout( function() { scroll(0,0); }, 1);
		}
	
		jQuery('a[href*=\\#]:not([href$=\\#])').on('click', function(evt) {
			
			evt.preventDefault();
			var url = $(this).attr('href');
			var id = url.substring(url.lastIndexOf('#'));
			if ($(id).length > 0) {
				$('html, body').animate({ 
					scrollTop: $(id).offset().top - 100
				},1000);
			}
			else{
				window.location.href = url;
			}
		});
	// Smooth Scrolling JS End

	// Scroll To Top JS Start
	$('#scroll-to-top').on('click', function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
	$(window).on( 'scroll', function() {
	  if ($(window).scrollTop() > 300) {
	    $("#scroll-to-top").fadeIn(500);
	  } else {
	    $("#scroll-to-top").fadeOut(500);
	  }
	});
	// Scroll To Top JS End

	// Sticky Header JS Start
	$(window).on( 'scroll', function(){
	  if ($(window).scrollTop() >= 100) {
	    $('.site-header').addClass('sticky-header');
	   }
	   else {
	    $('.site-header').removeClass('sticky-header');
	   }
	});
	// Sticky Header JS End

	// Toogle Menu Mobile JS Start
	$(".toggle-button").on( 'click', function(){
		$(".main-navigation").toggleClass('toggle-menu');
		$(".header-menu .black-shadow").fadeToggle();
	});
	$(".main-navigation ul li a").on( 'click', function(){
		$(".main-navigation").removeClass('toggle-menu');
		$(".header-menu .black-shadow").fadeOut();
	});
	$(".main-navigation ul li.sub-items>a").on( 'click', function(){
		$(".main-navigation").addClass('toggle-menu');
		$(".header-menu .black-shadow").stop();
	});
	$(".header-menu .black-shadow").on( 'click', function(){
		$(this).fadeOut();
		$(".main-navigation").removeClass('toggle-menu');
	});
	// Toogle Menu Mobile JS End


	// Testimonial Slider JS Start
	$('.review-slider').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  prevArrow: '<button class="slick-arrow prev-arrow"></button>',
	  nextArrow: '<button class="slick-arrow next-arrow"></button>',
	  dots: false,
	  arrows: true,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
  	  {
  	  	breakpoint: 992,
  	  	settings: {
  	  		slidesToShow: 1,
  	  	}
  	  },
  	  {
  	  	breakpoint: 768,
  	  	settings: {
  	  		slidesToShow: 1
  	  	}
  	  }
    ]
	});
	// Testimonial Slider JS End


	// Team Slider JS Start
	$('.team-slider').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  prevArrow: '<button class="slick-arrow prev-arrow"></button>',
	  nextArrow: '<button class="slick-arrow next-arrow"></button>',
	  arrows: false,
	  dots: true,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  responsive: [
  	  {
  	  	breakpoint: 1200,
  	  	settings: {
  	  		slidesToShow: 3,
  	  	}
  	  },
  	  {
  	  	breakpoint: 992,
  	  	settings: {
  	  		slidesToShow: 2,
  	  	}
  	  },
  	  {
  	  	breakpoint: 768,
  	  	settings: {
  	  		slidesToShow: 2
  	  	}
  	  },
  	  {
  	  	breakpoint: 576,
  	  	settings: {
  	  		slidesToShow: 1
  	  	}
  	  }
    ]
	});
	// Team Slider JS End

	// Partners Slider JS Start
	$('.partners-slider').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-arrow prev-arrow"></button>',
		nextArrow: '<button class="slick-arrow next-arrow"></button>',
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 1500,
		responsive: [
		  {
			  breakpoint: 1200,
			  settings: {
				  slidesToShow: 3,
			  }
		  },
		  {
			  breakpoint: 992,
			  settings: {
				  slidesToShow: 3,
			  }
		  },
		  {
			  breakpoint: 768,
			  settings: {
				  slidesToShow: 2
			  }
		  }
	  ]
	  });
	  // Partners Slider JS End

	// Pricing Switchig JS Start
	$('body').on('click','.pricing-switch a',function(){
		$('.pricing-switch a').removeClass('active');
		$(this).addClass('active');
		var id = $(this).attr('id');
		if(id == 'monthly'){
			$('.monthly_text').show();
			$('.yearly_text').hide();
		}
		else {
			$('.yearly_text').show();
			$('.monthly_text').hide();
		}
	});
	// Pricing Switchig JS End


	if ($(window).width() < 992) {
		// Submenu For Mobile JS Start
		$('body').on('click', '.main-navigation ul li.sub-items>a', function() {
            if (($(this).parent().hasClass('active-sub-menu'))) {
            $(this).parent().removeClass('active-sub-menu');
            $(this).parent().find('ul').slideUp();
            } else {
                $(this).parent().addClass('active-sub-menu');
                $(this).parent().find('ul').slideDown();
            }
        });
		// Submenu For Mobile JS End

		// Pricing Mobile Slider JS Start
		$('.pricing-slider').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow: '<button class="slick-arrow prev-arrow"></button>',
			nextArrow: '<button class="slick-arrow next-arrow"></button>',
			arrows: false,
			dots: true,
			autoplay: true,
			autoplaySpeed: 3000,
			responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1
				}
			}
			]
		});
		// Pricing Mobile Slider JS End

		// Team Page Mobile Slider JS Start
		$('.team-mobile-slider').slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			prevArrow: '<button class="slick-arrow prev-arrow"></button>',
			nextArrow: '<button class="slick-arrow next-arrow"></button>',
			arrows: false,
			dots: true,
			autoplay: true,
			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			}
		]
		});
		// Team Page Mobile Slider JS End

	}

	jQuery("#filters").on('click', function(){
		jQuery("#portfoliolist").removeClass('bydefault_show');
	});

});


// Portfolio Tabbing JS Start
$(function() {
    var filterList = {
        init: function() {
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixItUp({
                selectors: {
                    target: '.portfolio',
                    filter: '.filter'
                },
                load: {
                    filter: '.all, .graphic-design, .web-design, .ui-ux, .mobile-app'
                }
            });
        }
    };
    // Run the show!
    filterList.init();
});
// Portfolio Tabbing JS End

