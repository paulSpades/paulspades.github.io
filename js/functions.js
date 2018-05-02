
$(function(){
	route();
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
	$('html').animate({scrollTop: 0}, 300);
};

function toggleMainNav(){
	$('html').animate({scrollTop: 0}, 300);
	$('#mainNav').toggleClass('on');
	$('body').toggleClass('nav-on');
};

function nextArticle(el){
	let next = $(el).parents('article').next();
	// console.log(next);

};