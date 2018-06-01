
$(function(){
	route();
	$(window).on('hashchange', function(){
		if ($('#mainNav').hasClass('on')){
			toggleMainNav();
		}
		route();
	});
	$('#toggleMain, #mainNav a').click(function(e){
		toggleMainNav();
	});
	$('div.gall a').click(function(e){
		$(this).closest('.gall').find('.gall-cont img').attr('src', this.href);
		// console.log(this.href, $(this).closest('.gall').find('.gall-cont img').attr('src'));
		return false;
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

// http://farm3.staticflickr.com/2856/9207329420_7f2a668b06_o.jpgtion 
function toggleMainNav(){
	$('html').animate({scrollTop: 0}, 300);
	$('#mainNav').toggleClass('on');
	$('body').toggleClass('nav-on');
};
// http://farm3.staticflickr.com/2856/9207329420_7f2a668b06_o.jpg
function nextArticle(el){
	let next = $(el).parents('article').next();
	// console.log(next);

};