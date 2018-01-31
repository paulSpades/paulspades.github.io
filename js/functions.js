
$(function(){
	function route(){
		$('main section').removeClass('on');
		if ($(':target').length){
			if($(':target').is('article')){
				$('main section article').removeClass('on');
				$(':target').toggleClass('on').parent().toggleClass('on');
			} else {
				$('main section article').removeClass('on');
				$(':target').toggleClass('on');
			}
		} else {
			$('main section article').removeClass('on');
			$('#work').toggleClass('on');
		}
		$(this).scrollTop(0);
	};
	route();
	function toggleMainNav(){
		$('body').animate(function(){
			$(this).scrollTop(0);
		}, 300);
		$('#sun, #mainNav').toggleClass('on');
		$('body').toggleClass('nav-on');
	}

	$(window).on('hashchange', function(){
		if ($('#mainNav').is('on')){
			toggleMainNav();
		}
		route();
	});
	$('#toggleMain, #mainNav a').click(function(e){
		toggleMainNav();
	});


	$('.gal a').imageLightbox({	
		selector:       'id="imagelightbox"',   // string;
		allowedTypes:   'png|jpg|jpeg|gif',     // string;
		animationSpeed: 250,                    // integer;
		preloadNext:    true,                   // bool;            silently preload the next image
		enableKeyboard: true,                   // bool;            enable keyboard shortcuts (arrows Left/Right and Esc)
		quitOnEnd:      false,                  // bool;            quit after viewing the last image
		quitOnImgClick: false,                  // bool;            quit when the viewed image is clicked
		quitOnDocClick: true,                   // bool;            quit when anything but the viewed image is clicked
		onStart:        false,                  // function/bool;   calls function when the lightbox starts
		onEnd:          false,                  // function/bool;   calls function when the lightbox quits
		onLoadStart:    false,                  // function/bool;   calls function when the image load begins
		onLoadEnd:      false                   // function/bool;   calls function when the image finishes loading
	});
});