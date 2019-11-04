$(function () {
	// This will create a single gallery from all elements that have class "gallery-item"
	$('.page-single .page-index__image a').magnificPopup({
	  type: 'image',
	});

	let slider = function () {
		$('#js-slider').slick({
			arrows: true,
			fade: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 4000,
			speed: 2000
		});
	};

	let donors = function(){
		$('#js-donors').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 2000
		});

		$('#js-donors-1').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 2000
		});
	};

	slider();
	donors();
});