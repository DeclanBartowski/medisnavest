function is_mobile() {
	return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
}
$(window).on('load', function() {
	  if (!is_mobile()) {
		$('.wrapper-loader').addClass('is-fade');
		 setTimeout(function() {
		 	$('.wrapper-loader').fadeOut(200);
		 }, 1000);
	}
	heightHead = parseInt($('.ui-header').outerHeight());
	jQuery(window).on("scroll load", function() {
		if ($(window).scrollTop() > heightHead) {
			 $('.ui-header').addClass('fixed-menu');
			 if($('.ui-header').hasClass('is-absolute')){
			 } else{
				 $('.global-wrapper').css('paddingTop', heightHead);
				}
			 setTimeout(function() {
			 	$('.ui-header').addClass('scroll-transform');
			 }, 100);
		} else {
			$('.ui-header').removeClass('fixed-menu');
			$('.ui-header').removeClass('scroll-transform');
			$('.global-wrapper').css('paddingTop', 0);
		}
		if ($(window).scrollTop() > $(window).height()) {
			$('.scroll-to-top').addClass('scroll-to-top-visible');
		} else {
			$('.scroll-to-top').removeClass('scroll-to-top-visible');
		}	
	});
		if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
	  	$('.element').addClass('is-pad');
		}
});
jQuery(document).ready(function($) {
	 if (is_mobile()) {
	  	$('.wrapper-loader').addClass('is-fade');
	  	setTimeout(function() {
	  		$('.wrapper-loader').fadeOut(150);
	  	}, 500);
	  }
	lazyLoad($('body'));
	if($('.main-section').length){
		$('.ui-header').addClass('is-absolute');
	}
	if($('.gray-section').length){
		$('body').addClass('is-gray');
	}
	$(".hamburger").on("click", function() {
		$(this).toggleClass('is-active');
		$('.head-nav').toggleClass('is-open');
		$('.bg-overlay').fadeToggle(200);
		if (is_mobile()) {
			$('html').toggleClass('is-hidden');
		}
	});
	$(".menu_close-btn").on("click", function() {
		$('.hamburger').removeClass('is-active');
		$('.head-nav').removeClass('is-open');
		$('.bg-overlay').fadeOut(200);
		if (is_mobile()) {
			$('html').removeClass('is-hidden');
		}
	});
	$(".bg-overlay").on("click", function() {
		$('.hamburger').removeClass('is-active');
		$('.head-nav').removeClass('is-open');
		$(this).fadeOut(200);
		if (is_mobile()) {
			$('html').removeClass('is-hidden');
		}
	});
	$('.head_search-icon').on("click", function() {
		$('.search-form').fadeIn(200);
	});
	$(window).resize(function() {
		if ($(window).width() > 575) {
			$('.search-form').removeAttr('style');
		}
	});

	$('.search-form_input').focus(function() {
		$(this).closest('.search-form').addClass('is-active');
		$(this).closest('.search-form').find('.input_delete-text').addClass('is-visible');
		if ($(this).val().length > 2) {
			$('.search-form_dropdown-list').fadeIn(150);
		}
	});
	$('.search-form_input').blur(function() {
		$(this).closest('.search-form').removeClass('is-active');
		$(this).closest('.search-form').find('.input_delete-text').removeClass('is-visible');
		$('.search-form_dropdown-list').fadeOut(150);
	});

	$('.input_delete-text').on("click", function() {
		$(this).closest('.search-form').find('.form-control').val(' ');
		$(this).removeClass('is-visible');
	});
	$('.search-form_input').on('input', function() {
		if ($(this).val().length > 2) {
			$('.search-form_dropdown-list').fadeIn(150);
		} else {
			$('.search-form_dropdown-list').fadeOut(150);
		}
	});

	$('body').on("touchend, click", function(e) {
		if ($(window).width() < 575) {
			if ($(e.target).closest(".search-form").length || $(e.target).closest(".head_search-icon").length) return;
			$('.search-form').fadeOut(200);
		}
	});
	

	$('.actions-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		appendArrows: $('.actions-arrow'),
		responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		}, 
		{
			breakpoint: 440,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 400,
				dots: true,
				arrows: false
			}
		}, 
		]
	});
	$('.works-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		}, 
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 400,
				arrows: false,
				dots: true
			}
		}, ]
	});

	$('.company-slider_img').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		appendArrows: $('.company-arrows'),
	});

	$('.certificates-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		appendArrows: $('.certificates-pagination'),
		responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		}, 
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				speed: 400,
			}
		}, ]
	});

	if ($('.certificates-slider').length) {
		var number = $(".certificates-slider").find('.slick-slide:not(.slick-cloned)').length;
		var currentIndex = $(".certificates-slider").find('.slick-active').index();
		$('.certificates-pagination').find('.pagination-digit').text(number);
		$('.certificates-pagination').find('.pagination-number').text(currentIndex);
		$(".certificates-slider").on('afterChange', function() {
			var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
			currentIndex = $(this).find('.slick-active').index();
			$('.certificates-pagination').find('.pagination-digit').text(number);
			$('.certificates-pagination').find('.pagination-number').text(currentIndex);
		});
	}

	$('.viewed-products_slider').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		appendArrows: $('.js-arrows:visible'),
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		}, 
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 400,
			}
		}, ]
	});

	if ($('.viewed-products_slider').length) {
		var number = $(".viewed-products_slider").find('.slick-slide:not(.slick-cloned)').length;
		var currentIndex = $(".viewed-products_slider").find('.slick-active').index();
		$('.viewed-products_pagination').find('.pagination-digit').text(number);
		$('.viewed-products_pagination').find('.pagination-number').text(currentIndex);
		$(".viewed-products_slider").on('afterChange', function() {
			var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
			currentIndex = $(this).find('.slick-active').index();
			$('.viewed-products_pagination').find('.pagination-digit').text(number);
			$('.viewed-products_pagination').find('.pagination-number').text(currentIndex);
		});
		if(number< 4){
			$('.viewed-products_pagination').addClass('is-hidden')
		}
	}
	$('.news-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 3,
		appendArrows: $('.news-pagination'),
		responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 400
			}
		}, 
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 400,
			}
		}, ]
	});

	if ($('.news-slider').length) {
		var number = $(".news-slider").find('.slick-slide:not(.slick-cloned)').length;
		var currentIndex = $(".news-slider").find('.slick-active').index();
		$('.news-pagination').find('.pagination-digit').text(number);
		$('.news-pagination').find('.pagination-number').text(currentIndex);
		$(".news-slider").on('afterChange', function() {
			var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
			currentIndex = $(this).find('.slick-active').index();
			$('.news-pagination').find('.pagination-digit').text(number);
			$('.news-pagination').find('.pagination-number').text(currentIndex);
		});
	}

	$('.product-other_slider').slick({
		slidesToShow: 3,
		slidesToScroll: 3,
		appendArrows: $('.product-other_pagination:visible'),
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 400
			}
		}, 
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 400,
			}
		}, ]
	});

	if ($('.product-other_slider').length) {
		var number = $(".product-other_slider").find('.slick-slide:not(.slick-cloned)').length;
		var currentIndex = $(".product-other_slider").find('.slick-active').index();
		$('.product-other_pagination').find('.pagination-digit').text(number);
		$('.product-other_pagination').find('.pagination-number').text(currentIndex);
		$(".product-other_slider").on('afterChange', function() {
			var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
			currentIndex = $(this).find('.slick-active').index();
			$('.product-other_pagination').find('.pagination-digit').text(number);
			$('.product-other_pagination').find('.pagination-number').text(currentIndex);
		});
		if(number< 3){
			$('.product-other_pagintion').addClass('is-hidden')
		}
	}

	function setProgress(index) {
		var calc = ((index + 1) / ($slider.slick('getSlick').slideCount)) * 100;
		$progressBarLabel.css('width', calc + '%')
	}
	var $slider = $('.product-card_img-list');
	var $progressBar = $('.progres-line');
	var $progressBarLabel = $('.progress-bar');
	$slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
		setProgress(nextSlide);
	});
	$('.product-card_img-list').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    responsive: [{
      breakpoint: 9999,
      settings: "unslick"
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  setProgress(0);

  $('.js_work-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		appendArrows: $('.works-pagination'),
	});

	if ($('.js_work-slider').length) {
		var number = $(".js_work-slider").find('.slick-slide:not(.slick-cloned)').length;
		var currentIndex = $(".js_work-slider").find('.slick-active').index();
		$('.works-pagination').find('.pagination-digit').text(number);
		$('.works-pagination').find('.pagination-number').text(currentIndex);
		$(".js_work-slider").on('afterChange', function() {
			var number = $(this).find('.slick-slide:not(.slick-cloned)').length;
			currentIndex = $(this).find('.slick-active').index();
			$('.works-pagination').find('.pagination-digit').text(number);
			$('.works-pagination').find('.pagination-number').text(currentIndex);
		});
	}

	$('.review-item_btn').on('click',function(){
  if ($(this).html() == 'Свернуть') {
      $(this).closest('.review-item').find('.hidden-text').slideUp(200);
      $(this).text('Читать полностью');
    } else {
      $(this).closest('.review-item').find('.hidden-text').slideDown(200);
      $(this).text('Свернуть');
    }
    return false;
 });

	$('.js_form-submit').on("click", function() {
		var jhis = $(this).closest('form');
		$(jhis).find('.requiredField').removeClass('input-error');
		$(jhis).find('.error').remove();
		var error = 0;
		$(jhis).find('.requiredField').each(function() {
			if ($(this).hasClass('callback-phone')) {
				if ($(this).val().length < 10) {
					$(this).after('<span class="error">Введите номер телефона</span>');
					$(this).addClass('input-error');
					error = 1;
				}
			} else if ($(this).hasClass('callback-email')) {
				var emailReg = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
				if (emailReg.test($(this).val()) == false) {
					$(this).after('<span class="error">Введите корректный E-mail</span>');
					$(this).addClass('input-error');
					error = 2;
				}
			} else if ($(this).hasClass('callback-name')) {
				if ($(this).val().length < 3) {
					$(this).addClass('input-error');
					$(this).after('<span class="error">Заполните поле </span>');
					error = 3;
				}
			} else if ($(this).hasClass('callback-text')) {
				if ($(this).val().length < 2) {
					$(this).addClass('input-error');
					$(this).after('<span class="error">Заполните поле</span>');
					error = 4;
				}
			} 
		});
		
		if (error == 0) {
			/*отправка формы**/
		} else {
			return false;
		}
	});

	if ($('.js_scroll-box').length) {
		jQuery(window).on("scroll load resize", function() {
			if ($(window).width() > 767) {
				var r_det = $('.unified_right-column').offset().top;
				var w_top = $(window).scrollTop();
				var r_top = $('.unified_right-column').outerHeight();
				var r_height = $('.js_scroll-box').outerHeight();
				var h_eighbor = $('.unified_left-column').outerHeight();
				if (h_eighbor > r_height) {
					if (w_top >= r_det) {
						$('.js_scroll-box').addClass('is-sticky');
					} else {
						$('.js_scroll-box').removeClass('is-sticky');
					}
					if (w_top + r_height >= (r_top + r_det)) {
						$('.js_scroll-box').addClass('is-static');
					} else {
						$('.js_scroll-box').removeClass('is-static');
					}
				}
			}
		});
	}
		
	$(document).find('.slick-cloned a').removeAttr('data-fancybox');
	$(".fancybox").fancybox({
		afterLoad: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').addClass('is-overflow');
				$('.scroll-to-top').addClass('is-hidden');
			}
		},
		afterClose: function(instance, current) {
			if (!is_mobile()) {
				$('.fixed-menu').removeClass('is-overflow');
				$('.scroll-to-top').removeClass('is-hidden');
			}
		},
		backFocus : false,
	});
	if (!is_mobile()) {
		$('.js-modal').on('show.bs.modal', function(event) {
			$('.fixed-menu').addClass('is-overflow');
			$('.scroll-to-top').addClass('is-hidden');
		});
		$('.js-modal').on('hidden.bs.modal', function(event) {
			$('.fixed-menu').removeClass('is-overflow');
			$('.scroll-to-top').removeClass('is-hidden');
		});
	}
	
	$('.scroll-to-top').on('click', function() {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	$('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
		"clearIncomplete": true,
		showMaskOnHover: false,
	});
});
function lazyLoad($content) {
		$content.find('img[data-src], source[data-src], audio[data-src], iframe[data-src]').each(function() {
			$(this).attr('src', $(this).data('src'));
			$(this).removeAttr('data-src');
			if ($(this).is('source')) {
				$(this).closest('video').get(0).load();
			}
		});
	}
if ($('#map').length) {

	function showYaMaps() {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
		document.getElementById("map").appendChild(script);
		script.onload = function() {
			ymaps.ready(init);
			var myMap,
				myPlacemark;

			function init() {
				 myMap = new ymaps.Map("map", {
          center: [55.85776606888105,37.66326949999996],
          zoom: 13,
          behaviors: ['default', 'scrollZoom']
        });
				myMap.behaviors.disable('scrollZoom');
				myMap.controls.remove('geolocationControl');
				myMap.controls.remove('searchControl');
				myMap.controls.remove('trafficControl');
				myMap.controls.remove('typeSelector');
				myMap.controls.remove('fullscreenControl');
				myMap.controls.remove('rulerControl');
				myMap.behaviors.disable('scrollZoom');
				myMap.geoObjects.add(new ymaps.Placemark([55.85776606888105,37.66326949999996], {
					iconCaption: 'Верхоянская улица, 18 к.2',
				}, {
					preset: 'islands#redCircleDotIcon',
				}));
			}
		}
	} showYaMaps();
}