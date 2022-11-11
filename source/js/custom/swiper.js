// Three Cards Slider
/* ========================================== */
function threeCardsSlider() {
	$(".three-cards-slider").each(function (i, el) {
		let swiperClass = "three-cards-slider-" + i;
		$(this).addClass(swiperClass);

		let prevClass = "three-cards-button-prev-" + i;
		let nextClass = "three-cards-button-next-" + i;

		$(this).parent().find(".swiper-button-prev").addClass(prevClass);
		$(this).parent().find(".swiper-button-next").addClass(nextClass);

		new Swiper("." + swiperClass, {
			slidesPerView: 1,
			spaceBetween: 24,
			grabCursor: true,
			navigation: {
				prevEl: "." + prevClass,
				nextEl: "." + nextClass,
			},
			slideToClickedSlide: true,
			navigation: {
				prevEl: "." + prevClass,
				nextEl: "." + nextClass,
			},
			breakpoints: {
				1024: {
					slidesPerView: 2.8,
					spaceBetween: 25,
				},
				768: {
					slidesPerView: 2.2,
					spaceBetween: 25,
				},
				640: {
					slidesPerView: 1,
					spaceBetween: 16,
				},

			},

		});
	});
}
threeCardsSlider();

function fourCardsSlider() {
	$(".four-cards-slider").each(function (i, el) {
		let swiperClass = "four-cards-slider-" + i;
		$(this).addClass(swiperClass);

		let prevClass = "four-cards-button-prev-" + i;
		let nextClass = "four-cards-button-next-" + i;

		$(this).parent().find(".swiper-button-prev").addClass(prevClass);
		$(this).parent().find(".swiper-button-next").addClass(nextClass);

		new Swiper("." + swiperClass, {
			slidesPerView: 1.4,
			spaceBetween: 24,
			grabCursor: true,
			navigation: {
				prevEl: "." + prevClass,
				nextEl: "." + nextClass,
			},
			slideToClickedSlide: true,
			navigation: {
				prevEl: "." + prevClass,
				nextEl: "." + nextClass,
			},
			breakpoints: {
				1024: {
					slidesPerView: 4.1,
					spaceBetween: 25,
				},
				768: {
					slidesPerView: 2.2,
					spaceBetween: 25,
				},
				640: {
					slidesPerView: 1.3,
					spaceBetween: 16,
				},

			},

		});
	});
}
fourCardsSlider();



var swiper = new Swiper(".vertical-swiper", {
	autoHeight: true,
	grabCursor: true,
	slidesPerView: "auto",
	direction: "vertical",
	slideToClickedSlide: true,
	loop: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: true,
	},
	navigation: {
		nextEl: ".next",
		prevEl: ".prev",
	},
	on: {
		reachEnd: function() {
			this.snapGrid = [...this.slidesGrid];
		},
	}
});
