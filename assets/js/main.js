(function() {
    // main visual Text On Class
    /*
    $(window).on("load", function() {
        $("#fields").addClass("on");
    });
    */
	
	// 비주얼 슬라이더
	$("#jumbo .jumbo-slider ul").bxSlider({
		auto: true,
		pause: 5000,
		autoHover: true,
		controls: false,
		preventDefaultSwipeX: true,
		preventDefaultSwipeY: true,
		buildPager: function(i) {
			return '<span class="sr-only">'+ i +'</span>';
		},
		onSliderLoad: function(currentIndex) {
			var jumboVideo = $("#jumbo .jumbo-slider ul li:not('.bx-clone'):eq("+currentIndex+")").addClass('active').find("video").get(0);
			if (jumboVideo) {
				jumboVideo.play();
			}
		},
		onSlideBefore: function($slideElement, oldIndex, newIndex) {
			//var jumboVideo = $slideElement.find("video").get(0);
			var jumboVideo = $("#jumbo .jumbo-slider ul li:not('.bx-clone'):eq("+oldIndex+")").find("video").get(0);
			console.log(jumboVideo, oldIndex, newIndex);
			if (jumboVideo) {
				jumboVideo.pause();
			}
		},
		onSlideAfter: function($slideElement, oldIndex, newIndex) {
			//var jumboVideo = $slideElement.find("video").get(0);
			$slideElement.siblings('.active').removeClass('active');
			$slideElement.addClass('active');
			var jumboVideo = $("#jumbo .jumbo-slider ul li:not('.bx-clone'):eq("+newIndex+")").find("video").get(0);
			console.log(jumboVideo, oldIndex, newIndex);
			if (jumboVideo) {
				jumboVideo.play();
			}
		}
	});
    
    // RSA PRESS 슬라이드
    $('.press-slider').bxSlider({
        auto: false
    });
    
    // RSA 제품 슬라이드
    $('.product-list').bxSlider({
        auto: true
    });
	
})(jQuery);