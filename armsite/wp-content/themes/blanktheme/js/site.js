
function mod(n, m) {
	return ((n % m) + m ) % m;
}

jQuery(document).ready(function($) {

	var heroIndex = 0;

	var heroTimer = setInterval(function() {

		// Changes selected box

		$('.hero-nav-box').removeClass('hero-nav-sel');
		var elm = document.getElementById( 'hero-nav-' + (mod(heroIndex, 4) + 1).toString() );
		elm.classList.add('hero-nav-sel');

		// Changes Image

		$('.hero-images').removeClass('hero-img-sel');

		var elm = document.getElementById( 'hero-img-' + (mod(heroIndex, 4).toString()) );
		elm.classList.add('hero-img-sel');

		// Change Title and Words to next element 

		var titles = document.getElementsByClassName( 'hero-title' );
		var elm = document.getElementById( 'hero-title' );
		elm.innerHTML = titles[mod(heroIndex, 4)].innerHTML;
		var cont = document.getElementsByClassName( 'hero-content' );
		var elm2 = document.getElementById( 'hero-content' );
		elm2.innerHTML = cont[mod(heroIndex, 4)].innerHTML;

		heroIndex++;
	}, 5000);	
});