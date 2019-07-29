(function($) {
	"use strict";
	var HT = {};
	
	
	/* MAIN VARIABLE */
	
	var $window            	= $(window),
	$document           	= $(document),
	$niceSelect        		= $(".nice-select"),
	$countDownTimer     	= $('.countdown-timer'),
	$homepageDeal			= $('.homepage-deal .owl-carousel'),
	$homepageCat			= $('.homepage-category .owl-carousel'),
	$brandLogo              = $('.brand-carousel .owl-carousel'),
	$asideBanner            = $('.aside .block-aside .owl-carousel'),
	$homepagePromo			= $('.homepage-saleoff .owl-carousel'),
	$homepageMostViewd		= $('.homepage-view .owl-carousel'),
	$footerPost				= $('.widget-container .owl-carousel'),
	$homepageProduct		= $('.homepage-product .owl-carousel'),
	$sliderTrend		    = $('#homepage .slider .owl-carousel'),
	$slideFlash              = $('#homepage .flash-sale .owl-carousel'),
	$logoBrand               = $('#homepage .logo-brand .owl-carousel'),
	$productSlide            = $('#homepage .section-bar .owl-carousel'),
	$banner                  = $('#productPage .banner .owl-carousel'),
	$categories             = $('#productPage .categories .owl-carousel'),
	$thumbSlider            = $('#productDetail .detail-img .owl-carousel'),
	$relatedPro              = $('#productDetail .relatedProduct .owl-carousel'),
	$galleryThumbs     		 = $(".gallery-with-thumbs"),
	$priceRange        	 	= $("#price_slider");


	
	
	// Check if element exists
	$.fn.elExists = function() {
		return this.length > 0;
	};

	


	HT.covertGrid = function() {

		const action = '.action';
		$(document).on('click',action,function() {
			let self = $(this);


			$(action).removeClass('active');
			self.addClass('active');					
			let target = self.attr('data-target');

			$('.pro-content').find('.panel-body ul').addClass('uk-hidden');
			$(`#${target}`).removeClass('uk-hidden');

					// console.log(target);


					return false;
				});

	}

	HT.sliderTrend = function() {
		$sliderTrend.owlCarousel({
			loop:true,
			margin:10,
			nav: true,
			navText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
			dots: false,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:3
				},
				600:{
					items:4
				},
				1000:{
					items:6
				}
			}
		});
	}

HT.slideFlash = function() {
		$slideFlash.owlCarousel({
			loop:true,
			margin:10,
			nav: true,
			navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			dots: false,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});
	}

HT.logoBrand = function() {
		$logoBrand.owlCarousel({
			loop:true,
			margin:10,
			nav: true,
			navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			dots: false,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:4
				},
				1000:{
					items:6
				}
			}
		});
	}

HT.productSlider = function() {
		$productSlide.owlCarousel({
			loop:true,
			margin:0,
			nav: false,
			dots: false,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});
	}
// =========Product Page ============

HT.bannerProduct= function() {
		$banner.owlCarousel({
			loop:true,
			margin:0,
			nav: false,
			dots: true,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});
	}

// categories product
HT.categoriesProduct = function() {
		$categories.owlCarousel({
			loop:true,
			margin:10,
			nav: true,
			navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			dots: false,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:4
				},
				1000:{
					items:6
				}
			}
		});
	}

// thumb product detail
HT.thumnSilder = function() {
		$thumbSlider.owlCarousel({
			loop:true,
			margin:10,
			nav: true,
			navText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
			dots: false,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:4
				},
				1000:{
					items:4
				}
			}
		});
	}
  // =========== related product ==========
 HT.relatedProduct = function() {
		$relatedPro.owlCarousel({
			loop:true,
			margin:10,
			nav: true,
			navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			dots: false,
			ladyLoad : true,
			smartSpeed : 500,
			autoplayHoverPause : true,
			autoplay : false,
			autoplayTimeout : 3000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});
	}


//   // Document ready functions
$document.on('ready', function() {

	HT.covertGrid();
	HT.sliderTrend();
	HT.slideFlash();
	HT.logoBrand();
	HT.bannerProduct();
	HT.categoriesProduct();
	HT.thumnSilder();
	HT.relatedProduct();
});

})(jQuery);





	// Check if element exists
    // HT.niceInit = function() {
    //     $niceSelect.niceSelect();
    // };

	/*
		COUNT DOWN SETTING
		*/
	// HT.countDown = function() {
	// 	if ($countDownTimer.elExists()) {

	// 		var countInstances = [];
	// 		$countDownTimer.each(function(index, element) {

	// 			var $this = $(this);

	// 			// Fetching from data attibutes
	// 			var year    = $this.attr("data-countdown-year") ? $this.attr("data-countdown-year") : 2019;
	// 			var month   = $this.attr("data-countdown-month") ? $this.attr("data-countdown-month") : 6;
	// 			var day     = $this.attr("data-countdown-day") ? $this.attr("data-countdown-day") : 28;

	// 			// Adding instances for multiple use
	// 			$this.addClass("instance-0" + index);

	// 			// Initializing the count down
	// 			countInstances[index] = simplyCountdown(".instance-0" + index, {
	// 				year: year,
	// 				month: month,
	// 				day: day,
	// 				words: {                            // Words displayed into the countdown
	// 					days: 'day',
	// 					hours: 'hr',
	// 					minutes: 'min',
	// 					seconds: 'sec',
	// 					pluralLetter: 's'
	// 				},
	// 				plural: true,                       // Use plurals
	// 				inline: false,
	// 				enableUtc: false,
	// 				refresh: 1000,                      // Default refresh every 1s
	// 				sectionClass: 'countdown-section',  // Section css class
	// 				amountClass: 'countdown-amount',    // Amount css class
	// 				wordClass: 'countdown-word'         // Word css class
	// 			});
	// 		});
	// 	}
	// };
	
	/************************************************************
        Product Gallery with Thumbnails
        *************************************************************/

    // HT.galleryWithThumb = function() {
    //     if ($galleryThumbs.elExists()) {

    //         // Params
    //         var mainSliderSelector = '.main-slider',
    //             navSliderSelector = '.nav-slider';

    //         // Main Slider
    //         var mainSliderOptions = {
    //             effect: 'fade',
    //             loop: true,
    //             speed:1000,
    //             loopAdditionalSlides: 10,
    //             watchSlidesProgress: true,
    //             observer: true,
    //             observeParents: true
    //         };
    //         var mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

    //         // Navigation Slider
    //         var navSliderOptions = {
    //             loop: true,
    //             loopAdditionalSlides: 10,
    //             speed:1000,
    //             slidesPerView: 3,
    //             centeredSlides: true,
    //             spaceBetween: 15,
    //             autoplay: {
    //                 delay: 100000000
    //             },
    //             touchRatio: 0.2,
    //             grabCursor: true,
    //             slideToClickedSlide: true,

    //             navigation: {
    //                 nextEl: '.swiper-arrow.next',
    //                 prevEl: '.swiper-arrow.prev'
    //             },

    //             // Responsive breakpoints
    //             breakpoints: {
    //                 479: {
    //                     autoplay: {
    //                         delay: 5000
    //                     }
    //                 }
    //             }
    //         };
    //         var navSlider = new Swiper(navSliderSelector, navSliderOptions);

    //         // Connecting the sliders
    //         mainSlider.controller.control = navSlider;
    //         navSlider.controller.control = mainSlider;

    //         // Updating slider in modal
    //         $('body').on('show.bs.modal', '#product_quick_view', function() {
    //             setTimeout(function() {
    //                 navSlider.update();
    //                 mainSlider.update();
    //             }, 500);
    //         });
    //     }
    // };


	/************************************************************
        Price Range Slider
        *************************************************************/

    // HT.rangeSlider = function() {
    //     if ($priceRange.elExists()) {
    //         $priceRange.slider({
    //             range: true,
    //             min: 50000,
    //             max: 2800000,
    //             values: [ 50000, 2800000 ],
    //             slide: function( event, ui ) {
    //                 $( "#min_price" ).val(addCommas(ui.values[ 0 ]) + 'đ');
    //                 $( "#max_price" ).val(addCommas(ui.values[ 1 ]) + 'đ');
    //             }
    //         });
    //         $( "#min_price" ).val(addCommas($priceRange.slider( "values", 0 )) + 'đ'  );
    //         $( "#max_price" ).val(addCommas($priceRange.slider( "values", 1 )) + 'đ');
    //     }
    // };






// 	HT.productDeal = function() {
// 		$homepageDeal.owlCarousel({
// 			margin: 30,
// 			lazyLoad:true,
// 			nav: true,
// 			autoplay: true,
// 			smartSpeed: 1000,
// 			autoplayTimeout: 5000,
// 			dots: false,
// 			loop: true,
// 			responsive: {
// 			  0: {
// 				items: 1
// 			  },
// 			  600: {
// 				items: 2
// 			  },
// 			  1000: {
// 				items: 4
// 			  }
// 			}
// 		});
// 	}
// 	HT.Product = function() {
// 		$homepageProduct.owlCarousel({
// 			margin: 30,
// 			lazyLoad:true,
// 			nav: true,
// 			autoplay: true,
// 			smartSpeed: 1000,
// 			autoplayTimeout: 5000,
// 			dots: false,
// 			loop: true,
// 			responsive: {
// 			  0: {
// 				items: 1
// 			  },
// 			  600: {
// 				items: 2
// 			  },
// 			  1000: {
// 				items: 4
// 			  }
// 			}
// 		});
// 	}
// 	HT.ProductPromo = function() {
// 		$homepagePromo.owlCarousel({
// 			margin: 30,
// 			lazyLoad:true,
// 			nav: true,
// 			autoplay: true,
// 			smartSpeed: 1000,
// 			autoplayTimeout: 5000,
// 			dots: false,
// 			loop: true,
// 			responsive: {
// 			  0: {
// 				items: 1
// 			  },
// 			  600: {
// 				items: 1
// 			  },
// 			  1000: {
// 				items: 1
// 			  }
// 			}
// 		});
// 	}
// 	HT.ProductMostView = function() {
// 		$homepageMostViewd.owlCarousel({
// 			margin: 30,
// 			lazyLoad:true,
// 			nav: true,
// 			autoplay: true,
// 			smartSpeed: 1000,
// 			autoplayTimeout: 5000,
// 			dots: false,
// 			loop: true,
// 			responsive: {
// 			  0: {
// 				items: 1
// 			  },
// 			  600: {
// 				items: 2
// 			  },
// 			  1000: {
// 				items: 2
// 			  }
// 			}
// 		});
// 	}

	// HT.footerPost = function() {
	// 	$footerPost.owlCarousel({
	// 		margin: 30,
	// 		lazyLoad:true,
	// 		nav: true,
	// 		autoplay: true,
	// 		smartSpeed: 1000,
	// 		autoplayTimeout: 5000,
	// 		dots: false,
	// 		loop: true,
	// 		responsive: {
	// 		  0: {
	// 			items: 1
	// 		  },
	// 		  600: {
	// 			items: 1
	// 		  },
	// 		  1000: {
	// 			items: 1
	// 		  }
	// 		}
	// 	});
	// }
	



// function addCommas(nStr){
//     nStr += '';
//     x = nStr.split('.');
//     x1 = x[0];
//     x2 = x.length > 1 ? '.' + x[1] : '';
//     var rgx = /(\d+)(\d{3})/;
//     while (rgx.test(x1)) {
//         x1 = x1.replace(rgx, '$1' + '.' + '$2');
//     }
//     return x1 + x2;
// }

