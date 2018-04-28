
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

});