

//  ..helper mod function..
function mod(n, m) {
	return ((n % m) + m ) % m;
}

jQuery(document).ready(function($) {


	/*
	 *	 HERO SLIDER SCRIPT - DEC 2016
	 */

	//  ..variable default and constants..
	var heroIndex = 0;
	var HERO_PAGES = 4;
	var HERO_TIME = 5000;

	//  ..timer function to begin transiton and call changeSlides after predetirmed amount of time..
	function heroTimer(index) {

		//  ..adds hero-slide class to all moving elements..
		$('#hero-img, #hero-text, #hero-shadow, #hero-btn').addClass('hero-slide');
		//  .. remove hero-slide class after animation end..
		$('#hero-img, #hero-text, #hero-shadow, #hero-btn').on('animationend', function() { $(this).removeClass('hero-slide'); });
		setTimeout( function() {
			return changeSlides(index);
		}, 300);
	}

	function changeSlides(index) {

		//  ..remove current nav box and img 'selected' classes..
		$('#hero-nav').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-nav-box');
		$('#hero-img').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-images');

		//  ..use manual index or increment..
		if ( index === undefined ) { heroIndex++; }
		else { heroIndex = index; }
		
		//  ..change nav box and img to new index..
		$('#hero-nav').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-nav-sel');
		$('#hero-img').children()[mod(heroIndex, HERO_PAGES)].setAttribute('class', 'hero-img-sel');

		//  ..change Title and Words to next element.. 
		$('#hero-title').text(  $('#hero-info .hero-title').eq( mod(heroIndex, HERO_PAGES) ).text() );
		$('#hero-content').text ( $('#hero-info .hero-content').eq ( mod(heroIndex, HERO_PAGES) ).text() );
	}

	//  ..set timer to run in intervals of 5 sec..
	var timer = setInterval(heroTimer, HERO_TIME);	

	//  ..click on nav box to select element..
	$('.hero-nav-box').each( function (index) {
		$(this).click( function () {

			// ..reset timer..
			clearInterval(timer);
			timer = setInterval(heroTimer, HERO_TIME);
			return heroTimer(index);
		});
	});

	/**** END OF SCRIPT ****/

	/*
	 *   MEDIA BOX SCRIPT - DEC 2016
	 */

	//  ..initialze yt_players array..
	var yt_int, yt_players = {},
		initYT = function() {
			$('.ytplayer').each( function() {
				yt_players[this.id] = new YT.Player(this.id);
			});
		};

	//  ..alternative to onYouTubeIframeAPIReady() function
	//  ..instead checks every .5s if loaded then runs init function
	$.getScript('https://www.youtube.com/player_api', function() {
		yt_int = setInterval( function() {
			if (typeof YT === 'object') {
					initYT();
					clearInterval(yt_int);
			}
		}, 500);
	});
	
	function videoClick(ind) {
		var vid = $('.ytplayer').eq(ind);
		var player = yt_players[vid["0"].id];
		if (vid.hasClass('isPlaying')) {
			vid.removeClass('isPlaying').parent().css( {"order": "", "flex-basis": "auto"} );
			player.pauseVideo();
		} else {
			var tmp = $('.isPlaying');
			if (tmp.length != 0) {
				var prev = $('.ytplayer.isPlaying');
				yt_players[prev["0"].id].pauseVideo();
				tmp.removeClass('isPlaying').parent().css( {"order": "", "flex-basis": "auto"} );
			}
			vid.addClass('isPlaying').parent().css( {"order": "99", "flex-basis": "850px"} );
			yt_players[vid["0"].id].playVideo();
		}
	}

	$('.media-video p').each( function(index) {
		$(this).click( function() {
			videoClick(index)
		});
	});

	

	// ..NEED WAIT FOR ANIMATION TO END CHECK..
	$('#media span').each( function(index) {
		$(this).click( function () {
			$('#media-box').slideToggle("slow");
		})
	});
});







