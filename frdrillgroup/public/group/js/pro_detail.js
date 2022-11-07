

$(function(){
    if($(document.body).width() < 768) {        $('.pro-content table').wrap("<div class='table-response'></div>");		$('.pro-content table,.pro-content table tr,.pro-content table td').attr("style", "");		$('.pro-content table,.pro-content table tr,.pro-content table td').attr("width", "");    };
    var viewSwiper = new Swiper('.view .swiper-container', {
		onSlideChangeStart: function() {
			updateNavPosition()
		}
	})

	$('.view .arrow-left').on('click', function(e) {
		e.preventDefault()
		if (viewSwiper.activeIndex == 0) {
			viewSwiper.slideTo(viewSwiper.slides.length - 1, 1000);
			return
		}
		viewSwiper.slidePrev()
	})
	$('.view .arrow-right').on('click', function(e) {
		e.preventDefault()
		if (viewSwiper.activeIndex == viewSwiper.slides.length - 1) {
			viewSwiper.slideTo(0, 1000);
			return
		}
		viewSwiper.slideNext()
	})

	var previewSwiper = new Swiper('.preview .swiper-container', {
		//visibilityFullFit: true,
		slidesPerView: 'auto',
		allowTouchMove: false,
		onTap: function() {
				viewSwiper.slideTo(previewSwiper.clickedIndex)
		}
	})

	function updateNavPosition() {
		$('.preview .active-nav').removeClass('active-nav')
		var activeNav = $('.preview .swiper-slide').eq(viewSwiper.activeIndex).addClass('active-nav')
		if (!activeNav.hasClass('swiper-slide-visible')) {
			if (activeNav.index() > previewSwiper.activeIndex) {
				var thumbsPerNav = Math.floor(previewSwiper.width / activeNav.width()) - 1
				previewSwiper.slideTo(activeNav.index() - thumbsPerNav)
			} else {
				previewSwiper.slideTo(activeNav.index())
			}
		}
	};
	
	
	
});
