var logoPlayed = false;
var startupPlayed = false;
var tech1Played = false;
var tech2Played = false;
var stasPlayed = false;
var features1Played = false;
var features2Played = false;
var updatesPlayed = false;
var packagesPlayed = false;
var awardsPlayed = false;
var clientsSayPlayed = false;
var clientsPlayed = false;
var membersPlayed = false;

$(window).scroll(function(){
	if ($(window).width() >= 1000) {
		if (!logoPlayed) {
			if ($(window).scrollTop() >= 200 && $(window).scrollTop() <= 600) {
				var logos = ['#logo1', '#logo2', '#logo3', '#logo4', '#logo5'];
				AnimateLogo(logos);
				logoPlayed = true;
			}
		}
		if (!startupPlayed) {
			if ($(window).scrollTop() >= 500 && $(window).scrollTop() <= 1200) {
				EdgeToCenter('#firstTabLeft', '#firstTabRight');
				startupPlayed = true;
			}
		}
		if (!tech1Played) {
			if ($(window).scrollTop() >= 1150 && $(window).scrollTop() <= 1950) {
				$('.techPanel:first-child').css('visibility', 'visible');
				EdgeToCenter('#firstTechLeft', '#firstTechRight');
				tech1Played = true;
			}
		}
		if (!tech2Played) {
			if ($(window).scrollTop() >= 1700 && $(window).scrollTop() <= 2450) {
				$('.techPanel:last-child').css('visibility', 'visible');
				EdgeToCenter('#secondTechLeft', '#secondTechRight');
				tech2Played = true;
			}
		}
		if (!stasPlayed) {
			if ($(window).scrollTop() >= 2600 && $(window).scrollTop() <= 3200) {
				animateFirstImg();
				$('#stasImg1').css('visibility', 'visible');
				stasPlayed = true;
			}
		}
		if (!features1Played) {
			if ($(window).scrollTop() >= 3000 && $(window).scrollTop() <= 3500) {
				AnimateFeatures1();
				$('#featuresRow1').css('visibility', 'visible');
				features1Played = true;
			}
		}
		if (!features2Played) {
			if ($(window).scrollTop() >= 3300 && $(window).scrollTop() <= 3700) {
				AnimateFeatures2();
				$('#featuresRow2').css('visibility', 'visible');
				features2Played = true;
			}
		}
		if (!updatesPlayed) {
			if ($(window).scrollTop() >= 3500 && $(window).scrollTop() <= 4000) {
				EdgeToCenter('#updatesLeft', '#updatesRight');
				$('#updates .container .row').css('visibility', 'visible');
				updatesPlayed = true;
			}
		}
		if (!packagesPlayed) {
			var visibleTop = $('#packages').offset().top - 300;
			var visibleBottom = $('#packages').offset().top + $('#packages').height() - 200;
			if ($(window).scrollTop() >= visibleTop && $(window).scrollTop() <= visibleBottom) {
				DownToTop('#packages');
				packagesPlayed = true;
			}
		}
		if (!awardsPlayed) {
			if ($(window).scrollTop() >= 4650 && $(window).scrollTop() <= 5250) {
				TopToDown('#awards');		
				awardsPlayed = true;
			}
		}
		if (!clientsSayPlayed) {
			if ($(window).scrollTop() >= 4950 && $(window).scrollTop() <= 5550) {
				TopToDown('#clientsSay');
				clientsSayPlayed = true;
			}
		}
		if (!clientsPlayed) {
			if ($(window).scrollTop() >= 5250 && $(window).scrollTop() <= 5750) {
				TopToDown('#clients');
				clientsPlayed = true;
			}
		}
		if (!membersPlayed) {
			if ($(window).scrollTop() >= 5800 && $(window).scrollTop() <= 6400) {
				var members = ['#member1', '#member2', '#member3', '#member4'];
				AnimateLogo(members);
				membersPlayed = true;
			}
		}
	}
})


/* ANIMATIONS */
function AnimateLogo(items) {
	for (var i = 0; i < items.length; i++) {
		if (i % 2) {
			$(items[i]).css('top', '100px');
		} else {
			$(items[i]).css('top', '-100px');
		}
		$(items[i]).css('visibility', 'visible');
		$(items[i]).transition({
			top: '0px',
			opacity: '1'
		},{
			duration: 400,
			delay: 200 * (i + 1)
		})
	}
}


function AnimateTech(left, right) {
	$(left).css('left', '-100%');
	$(left).css('visibility', 'visible');
	$(left).animate({
		left: "3%"
	}, 500, function(){
		$(this).animate({
			left: "0%"
		}, 500)
	});
	$(right).css('left', '100%');
	$(right).css('visibility', 'visible');
	$(right).animate({
		left: "-3%"
	}, 500, function(){
		$(this).animate({
			left: "0%"
		}, 500)
	})
}

function AnimateFeatures1() {
	$('#featuresRow1').css({
		left: '100%'
	})
	$('#featuresRow1').animate({
		left: '-5%'
	},500, function() {
		$(this).animate({
			left: '0%'
		}, 100)
	})
}

function AnimateFeatures2() {
	$('#featuresRow2').css({
		left: '-100%'
	})
	$('#featuresRow2').animate({
		left: '5%'
	},500, function() {
		$(this).animate({
			left: '0%'
		}, 100)
	})
}

/* CANCEL VISIBILITY HIDDEN FOR SMALL SCREENS */
function CancelVisibilityHidden(element) {
	$(element).css({
		visibility: 'visible',
		opacity: '1'
	});
}

function ElementsVisibility() {
	CancelVisibilityHidden('#featuresRow1');
	CancelVisibilityHidden('#featuresRow2');
	CancelVisibilityHidden('#clientsSay');
	CancelVisibilityHidden('#clients');
	CancelVisibilityHidden('#logo img');
	CancelVisibilityHidden('#packages');
	CancelVisibilityHidden('#awards');
	CancelVisibilityHidden('#stasImg1');
	CancelVisibilityHidden('#member1');
	CancelVisibilityHidden('#member2');
	CancelVisibilityHidden('#member3');
	CancelVisibilityHidden('#member4');
	CancelVisibilityHidden('.techPanel');
	CancelVisibilityHidden('#updatesLeft');
	CancelVisibilityHidden('#updatesRight');
	CancelVisibilityHidden('.firstTab');
}

if ($(window).width() < 1000) {
	ElementsVisibility();
}