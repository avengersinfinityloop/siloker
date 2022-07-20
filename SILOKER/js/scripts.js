$(document).ready(function() {
	'use strict';
	/*-----------------------------------------------------------------------------------*/
	/*	STICKY HEADER
	/*-----------------------------------------------------------------------------------*/
	if ($(".navbar").length) {
		var options = {
			offset: 350,
			offsetSide: 'top',
			classes: {
				clone: 'banner--clone fixed',
				stick: 'banner--stick',
				unstick: 'banner--unstick'
			},
			onStick: function() {
				$($.SmartMenus.Bootstrap.init);
			},
			onUnstick: function() {
				$('.search-dropdown .dropdown-menu').collapse('hide');
			}
		};
		var banner = new Headhesive('.navbar', options);
	}
	/*-----------------------------------------------------------------------------------*/
	/*	HEADER BUTTONS
	/*-----------------------------------------------------------------------------------*/
	var $header_hamburger = $('.hamburger.animate');
	var $header_search = $('.search-dropdown .dropdown-menu');
	var $header_cart = $('.cart-dropdown .dropdown-menu');
	var $navbar_offcanvas = $('.offcanvas-nav');
	var $navbar_offcanvas_toggle = $('[data-toggle="offcanvas-nav"]');
	var $navbar_offcanvas_close = $('.offcanvas-nav-close');
	var $navbar_search_toggle = $('.search-dropdown .collapse-toggle');
	var $navbar_search_close = $(".search-dropdown .dropdown-menu .dropdown-close");
	var $info_offcanvas = $('.offcanvas-info');
	var $info_offcanvas_close = $('.offcanvas-info-close');
	var $info_offcanvas_toggle = $('[data-toggle="offcanvas-info"]');
	$header_hamburger.on("click", function() {
		$header_hamburger.toggleClass("active");
		$header_search.collapse('hide');
	});
	$header_search.on('click', function(e) {
		e.stopPropagation();
	});
	$navbar_search_close.click(function() {
		$header_search.collapse('hide');
	});
	$navbar_search_toggle.on('click', function(e) {
		$navbar_offcanvas.removeClass('open');
		$header_hamburger.removeClass('active');
	});
	$navbar_offcanvas_toggle.on("click", function(e) {
		e.stopPropagation();
		$navbar_offcanvas.toggleClass('open');
	});
	$navbar_offcanvas.on("click", function(e) {
		e.stopPropagation();
	});
	$header_cart.on('click', function(e) {
		e.stopPropagation();
	});
	$navbar_offcanvas_close.on("click", function(e) {
		$navbar_offcanvas.removeClass('open');
		$header_hamburger.removeClass('active');
	});
	$info_offcanvas_toggle.on("click", function(e) {
		e.stopPropagation();
		$info_offcanvas.toggleClass('open');
		$header_search.collapse('hide');
	});
	$info_offcanvas.on("click", function(e) {
		e.stopPropagation();
	});
	$(document).on('click', function() {
		$header_search.collapse('hide');
		$navbar_offcanvas.removeClass('open');
		$info_offcanvas.removeClass('open');
		$header_hamburger.removeClass('active');
	});
	$info_offcanvas_close.on("click", function(e) {
		$info_offcanvas.removeClass('open');
	});
	$('.onepage .navbar li a').on('click', function() {
		$navbar_offcanvas.removeClass('open');
		$header_hamburger.removeClass('active');
	});
	/*-----------------------------------------------------------------------------------*/
	/*	BACKGROUND IMAGE
	/*-----------------------------------------------------------------------------------*/
	$(".bg-image").css('background-image', function() {
		var bg = ('url(' + $(this).data("image-src") + ')');
		return bg;
	});
	/*-----------------------------------------------------------------------------------*/
	/*	IMAGE ICON HOVER
	/*-----------------------------------------------------------------------------------*/
	$('.overlay:not(.caption) > a, .overlay:not(.caption) > span, .overlay.caption-overlay > a, .overlay.caption-overlay > span').prepend('<span class="bg"></span>');
	/*-----------------------------------------------------------------------------------*/
	/*	OWL CAROUSEL
	/*-----------------------------------------------------------------------------------*/
	$('.basic-slider').each(function() {
		var $bslider = $(this);
		$bslider.owlCarousel({
			items: 1,
			nav: false,
			dots: true,
			dotsEach: true,
			autoHeight: true,
			loop: true,
			margin: $bslider.data("margin")
		});
	});
	$('.carousel').each(function() {
		var $carousel = $(this);
		$carousel.owlCarousel({
			autoHeight: false,
			nav: false,
			dots: $carousel.data("dots"),
			dotsEach: true,
			loop: $carousel.data("loop"),
			margin: $carousel.data("margin"),
			autoplay: $carousel.data("autoplay"),
			autoplayTimeout: $carousel.data("autoplay-timeout"),
			responsive: $carousel.data("responsive")
		});
	});
	/*-----------------------------------------------------------------------------------*/
	/*	OWL SLIDER WITH THUMBNAILS
	/*-----------------------------------------------------------------------------------*/
	var $owlmain = $(".owl-slider-main");
	var $owlnav = $(".owl-slider-nav");
	//var totalslides = 10;
	var syncedSecondary = true;
	$owlmain
		.owlCarousel({
			items: 1,
			nav: false,
			margin: 10,
			autoplay: false,
			dots: false,
			loop: true,
			responsiveRefreshRate: 200
		})
		.on("changed.owl.carousel", syncPosition);
	$owlnav
		.on("initialized.owl.carousel", function() {
			$owlnav
				.find(".owl-item")
				.eq(0)
				.addClass("current");
		})
		.owlCarousel({
			items: 3,
			margin: 10,
			dots: false,
			nav: false,
			smartSpeed: 200,
			slideSpeed: 500,
			slideBy: 3,
			responsiveRefreshRate: 100
		})
		.on("changed.owl.carousel", syncPosition2);
	function syncPosition(el) {
		//if loop is set to false, then you have to uncomment the next line
		//var current = el.item.index;
		//to disable loop, comment this block
		var count = el.item.count - 1;
		var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
		if (current < 0) {
			current = count;
		}
		if (current > count) {
			current = 0;
		}
		//to this
		$owlnav
			.find(".owl-item")
			.removeClass("current")
			.eq(current)
			.addClass("current");
		var onscreen = $owlnav.find(".owl-item.active").length - 1;
		var start = $owlnav
			.find(".owl-item.active")
			.first()
			.index();
		var end = $owlnav
			.find(".owl-item.active")
			.last()
			.index();
		if (current > end) {
			$owlnav.data("owl.carousel").to(current, 100, true);
		}
		if (current < start) {
			$owlnav.data("owl.carousel").to(current - onscreen, 100, true);
		}
	}
	function syncPosition2(el) {
		if (syncedSecondary) {
			var number = el.item.index;
			$owlmain.data("owl.carousel").to(number, 100, true);
		}
	}
	$owlnav.on("click", ".owl-item", function(e) {
		e.preventDefault();
		var number = $(this).index();
		$owlmain.data("owl.carousel").to(number, 300, true);
	});
	/*-----------------------------------------------------------------------------------*/
	/*	LIGHTGALLERY
	/*-----------------------------------------------------------------------------------*/
	function enablelightGallery() {
		var $lg = $('.light-gallery-wrapper');
		$lg.lightGallery({
			thumbnail: false,
			selector: '.lightbox',
			mode: 'lg-fade',
			download: false,
			autoplayControls: false,
			zoom: false,
			fullScreen: false,
			videoMaxWidth: '1000px',
			loop: false,
			hash: false,
			mousewheel: true,
			videojs: true,
			share: false
		});
	}
	enablelightGallery();
	/*-----------------------------------------------------------------------------------*/
	/*	SLIDER REVOLUTION
	/*-----------------------------------------------------------------------------------*/
	$('#slider14').revolution({
		sliderType: "standard",
		sliderLayout: "fullwidth",
		fullScreenOffsetContainer: ".navbar:not(.fixed)",
		spinner: "spinner",
		dottedOverlay: '',
		delay: 9000,
		shadow: 0,
		gridwidth: 1920,
		gridheight: 750,
		responsiveLevels: [1240, 1024, 778, 480],
		disableProgressBar: "on",
		navigation: {
			keyboardNavigation: 'on',
			keyboard_direction: 'horizontal',
			arrows: {
				enable: true,
				hide_onleave: true,
				hide_under: 1024,
				style: '',
				tmp: ''
			},
			touch: {
				touchenabled: 'on',
				swipe_threshold: 75,
				swipe_min_touches: 1,
				swipe_direction: 'horizontal',
				drag_block_vertical: true
			},
			bullets: {
				enable: true,
				style: '',
				hide_onleave: true,
				hide_onmobile: false,
				h_align: "center",
				v_align: "bottom",
				space: 8,
				h_offset: 0,
				v_offset: 20
			}
		}
	});
	/*-----------------------------------------------------------------------------------*/
	/*	AOS
	/*-----------------------------------------------------------------------------------*/
	AOS.init({
        easing: 'ease-in-out-sine',
        duration: 800,
        once: true
    });
	/*-----------------------------------------------------------------------------------*/
	/*	VIDEO WRAPPER
	/*-----------------------------------------------------------------------------------*/
	$('.video-wrapper video').backgroundVideo({
		$outerWrap: $('.video-wrapper'),
		pauseVideoOnViewLoss: false,
		parallaxOptions: {
			effect: 3
		}
	});
	/*-----------------------------------------------------------------------------------*/
	/*	CONTACT FORM
	/*-----------------------------------------------------------------------------------*/
	function enableContactForm() {
		$('#contact-form').validator({
			disable: false,
			focus: false
		});
		// when the form is submitted
		$('#contact-form').on('submit', function(e) {
			// if the validator does not prevent form submit
			if (!e.isDefaultPrevented()) {
				var url = "contact/contact.php";
				// POST values in the background the the script URL
				$.ajax({
					type: "POST",
					url: url,
					data: $(this).serialize(),
					success: function(data) {
						// data = JSON object that contact.php returns
						// we recieve the type of the message: success x danger and apply it to the
						var messageAlert = 'alert-' + data.type;
						var messageText = data.message;
						// let's compose Bootstrap alert box HTML
						var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + messageText + '</div>';
						// If we have messageAlert and messageText
						if (messageAlert && messageText) {
							// inject the alert to .messages div in our form
							$('#contact-form').find('.messages').html(alertBox);
							// empty the form
							$('#contact-form')[0].reset();
						}
					}
				});
				return false;
			}
		})
	}
	enableContactForm();
	/*-----------------------------------------------------------------------------------*/
	/*	MODAL
	/*-----------------------------------------------------------------------------------*/
	setTimeout(function() {
		$(".modal-popup").modal("show")
	}, 200);
	$('#modal-03').on('shown.bs.modal', function() {
		enableContactForm();
	})
	/*-----------------------------------------------------------------------------------*/
	/*	PAGE LOADING
	/*-----------------------------------------------------------------------------------*/
	$('.page-loading').delay(350).fadeOut('slow');
	$('.page-loading .status').fadeOut('slow');
	/*-----------------------------------------------------------------------------------*/
	/*	IMAGE WRAPPER MOBILE
	/*-----------------------------------------------------------------------------------*/
	if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i)) {
		$('.image-wrapper').addClass('mobile');
	}
	/*-----------------------------------------------------------------------------------*/
	/*	PRICING
	/*-----------------------------------------------------------------------------------*/
	$('.pricing-wrapper').each(function(i, container) {
		var $container = $(container);
		$container.find(".pricing-switcher").on('click', function() {
			$container.find(".pricing-switcher").toggleClass('pricing-switcher-active');
			$container.find(".price").removeClass('price-hidden');
			$container.find(".price").toggleClass('price-show price-hide');
		});
	});
});