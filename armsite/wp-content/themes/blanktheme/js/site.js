//
//	HERO SLIDER SCRIPT
//

// ..helper mod function..
function mod(n, m) {
	return ((n % m) + m ) % m;
}

jQuery(document).ready(function($) {

	var heroIndex = 0;
	var HERO_PAGES = 4;
	var HERO_TIME = 5000;

	function heroTimer(index) {

		$('#hero-img, #hero-text, #hero-shadow, #hero-btn').addClass('hero-slide');
		$('#hero-img, #hero-text, #hero-shadow, #hero-btn').on('animationend', function() { $(this).removeClass('hero-slide'); });
		setTimeout( function() {
			return changeSlides(index);
		}, 300);
	}

	function changeSlides(index) {
		// ..remove current nav box and img 'selected' classes..
		$('#hero-nav').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-nav-box');
		$('#hero-img').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-images');

		// ..use manual index or increment..
		if ( index === undefined ) { heroIndex++; }
		else { heroIndex = index; }
		
		// ..change nav box and img to new index..
		$('#hero-nav').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-nav-sel');
		$('#hero-img').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-img-sel');

		// ..change Title and Words to next element.. 
		$('#hero-title').text(  $('#hero-info .hero-title').eq( mod(heroIndex, HERO_PAGES) ).text() );
		$('#hero-content').text ( $('#hero-info .hero-content').eq ( mod(heroIndex, HERO_PAGES) ).text() );
	}

	// ..set timer to run in intervals of 5 sec..
	var timer = setInterval(heroTimer, HERO_TIME);	

	// ..click on nav box to select element..
	$('.hero-nav-box').each( function (index) {
		$(this).click( function () {

			// ..reset timer..
			clearInterval(timer);
			timer = setInterval(heroTimer, HERO_TIME);
			return heroTimer(index);
		});

	});
});