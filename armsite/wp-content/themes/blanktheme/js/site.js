
	jQuery(document).ready(function($) {

		var mod = function(n, m) {
			return ((n % m) + m ) % m;
		}

		var heroIndex = 1;
		var heroTimer = function() {
			heroBox();
			heroImg();
			heroText();
			heroIndex++;
		}

		var heroBox = function () {
			$('.hero-nav-box').removeClass('hero-nav-sel');

			var elm = document.getElementById( 'hero-nav-' + (mod(heroIndex, 4) + 1).toString() );
			elm.classList.add('hero-nav-sel');
		}

		var heroImg = function () {
			$('.hero-images').removeClass('hero-img-sel');

			var elm = document.getElementById( 'hero-img-' + (mod(heroIndex, 4).toString()) );
			elm.classList.add('hero-img-sel');
		}

		var heroText = function () {
			var titles = document.getElementsByClassName( 'hero-title' );
			var elm = document.getElementById( 'hero-title' );
			elm.innerHTML = titles[mod(heroIndex, 4)].innerHTML;
			var cont = document.getElementsByClassName( 'hero-content' );
			var elm2 = document.getElementById( 'hero-content' );
			elm2.innerHTML = cont[mod(heroIndex, 4)].innerHTML;
		}

		setInterval(heroTimer, 5000);
	});

