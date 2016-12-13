
function mod(n, m) {
	return ((n % m) + m ) % m;
}

jQuery(document).ready(function($) {

	var heroIndex = 0;
	var HERO_PAGES = 4;

	function heroTimer(index) {

		$('#hero-nav').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-nav-box');
		$('#hero-img').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-images');

		// Use manual index or increment
		if ((!index === 'undefined')) { heroIndex = index; }
		else { heroIndex++; }

		$('#hero-nav').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-nav-sel');
		$('#hero-img').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-img-sel');

		// Change Title and Words to next element 

		var titles = document.getElementsByClassName( 'hero-title' );
		document.getElementById( 'hero-title' ).innerHTML = titles[mod(heroIndex, HERO_PAGES)].innerHTML;
		var cont = document.getElementsByClassName( 'hero-content' );
		document.getElementById( 'hero-content' ).innerHTML = cont[mod(heroIndex, HERO_PAGES)].innerHTML;
	}

	var timer = setInterval(heroTimer, 5000);	

	$('#hero-nav-1').click( function() { return heroTimer(0); } );
});