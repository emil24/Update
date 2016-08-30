//define initial home page size
$('#home').css({
	height: $(window).height() + 'px'
})

//define initial #home #homeContainer .inner margin-top
$('#home #homeContainer .inner').css({
	marginTop: ($(window).height() - $('#home .inner').height())/2 + 'px'
})



$(window).resize(function() {
	//dynamically changing home page size
	$('#home').css({
		height: $(window).height() + 'px'
	})

	//dynamically changing .inner marginTop
	$('#home #homeContainer .inner').css({
	marginTop: ($(window).height() - $('#home .inner').height())/2 + 'px'
})
})

//adding active class to EXTRA in menu
function openExtra() {
	$('#home .navbar .dropdown').addClass('open');
	$('#home .navbar .dropdown').css ('borderTop', '3px solid #1AC6FF');
	$('#home .navbar .dropdown .dropdown-toggle').css('color', '#1AC6FF');
}
$('#home .navbar .dropdown').on('mouseenter',function() {
	openExtra();
});
//removing active class
function closeExtra() {
	$('#home .navbar .dropdown').removeClass('open');
	$('#home .navbar .dropdown').css ('borderTop', 'none');	
	$('#home .navbar .dropdown .dropdown-toggle').css('color', '#C6B7D1');
}
$('#home .navbar .dropdown').on('mouseleave',function() {
	closeExtra();
});

/* RESPONSIVITY FOR TEXT */
function SetHomeSize() {
	if ($(window).width() < 1000) {
		$('#homeContainer .inner h1').css('font-size', '29px');
		$('#homeContainer .inner p').css('font-size', '19px');
		$('#homeContainer .inner button').css({
			width: '90%',
			margin: '0 auto',
			marginBottom: '20px'
		});
	}
	else {
		$('#homeContainer .inner h1').css('font-size', '60px');
		$('#homeContainer .inner p').css('font-size', '23px');
		$('#homeContainer .inner button').css({
			width: 'auto',
			marginRight: '20px'
		});
	}
}
SetHomeSize()
$(window).resize(function(){
	SetHomeSize()
})

/* #homepagesMenu #blogMenu #ecommerceMenu activation */
$('#homepagesMenu').fadeOut(0);
$('#blogMenu').fadeOut(0);
$('#ecommerceMenu').fadeOut(0);

$('#homepages').on('mouseenter', function(){
	$('#homepagesMenu').fadeIn(500);
});
$('#homepages').on('mouseleave', function(){
	$('#homepagesMenu').fadeOut(0);
});
$('#homepagesMenu').on('mouseenter', function() {
	$('#homepagesMenu').fadeIn();
	openExtra();
})
$('#homepagesMenu').on('mouseleave', function() {
	$('#homepagesMenu').fadeOut();
	closeExtra();
})

$('#blog').on('mouseenter', function(){
	$('#blogMenu').fadeIn(500);
});
$('#blog').on('mouseleave', function(){
	$('#blogMenu').fadeOut(0);
});

$('#ecommerce').on('mouseenter', function(){
	$('#ecommerceMenu').fadeIn(500);
});
$('#ecommerce').on('mouseleave', function(){
	$('#ecommerceMenu').fadeOut(0);
});


if ($(window).scrollTop() > 500) {
	$('#header').addClass('white');
	$('.navbar-brand img').attr('src', 'img/1.png');
}
else {
	$('#header').removeClass('white');
	$('.navbar-brand img').attr('src', 'img/3.png');
}

$(window).scroll(function(){
	if ($(window).scrollTop() > 500) {
		$('#header').addClass('white');
		$('.navbar-brand img').attr('src', 'img/1.png');
	}
	else {
		$('#header').removeClass('white');
		$('.navbar-brand img').attr('src', 'img/3.png');
	}
})


/* LOCATING #homepagesMenu */
$('#homepages').on('mouseenter', function(){
	//first check if big screen 
	if ($(window).width() > 1000) {
		//left according to #homepages
		var leftPos = $('#homepages').offset().left + $('#homepages').width();
		//check whether to place on right or left
		if ($(window).width() > (leftPos + $('#homepagesMenu').width())) {
			//if width of window bigger than left start point of #homepagesMenu 
			//+ it's width then place on right side
			$('#homepagesMenu').css({
				top: '64px',
				left: leftPos + 'px'
			})
		}
		else {
			//if width of screen is less than #homepages + #homepagesMenu width
			//place on left side
			var leftPos = $('#homepages').offset().left - $('#homepages').width();
			$('#homepagesMenu').css({
				top: '64px',
				left: $('#homepages').offset().left - $('#homepagesMenu').width() + 'px'
			})
		}
	}
	//locating for small screen
	else {

	}
})

/* LOCATING #blogMenu */
$('#blog').on('mouseenter', function(){
	//first check if big screen 
	if ($(window).width() > 1000) {
		var topPos = 110;
		var leftPos = $('#blog').offset().left + $('#blog').width();
		if ($(window).width() > (leftPos + $('#blogMenu').width())) {
			$('#blogMenu').css({
				top: topPos + 'px',
				left: leftPos + 'px'
			})
		}
		else {
			var leftPos = $('#blog').offset().left - $('#blog').width();
			$('#blogMenu').css({
				top: topPos + 'px',
				left: $('#blog').offset().left - $('#blogMenu').width() + 'px'
			})
		}
	}
	//locating for small screen
	else {

	}
})

/* LOCATING #ecommerceMenu */
$('#ecommerce').on('mouseenter', function(){
	//first check if big screen 
	if ($(window).width() > 1000) {
		var topPos = 156;
		var leftPos = $('#ecommerce').offset().left + $('#ecommerce').width();
		if ($(window).width() > (leftPos + $('#ecommerceMenu').width())) {
			$('#ecommerceMenu').css({
				top: topPos + 'px',
				left: leftPos + 'px'
			})
		}
		else {
			var leftPos = $('#ecommerce').offset().left - $('#ecommerce').width();
			$('#ecommerceMenu').css({
				top: topPos + 'px',
				left: $('#ecommerce').offset().left - $('#ecommerceMenu li').width() + 'px'
			})
		}
	}
	//locating for small screen
	else {

	}
})


/* CONNECT LINKS TO PAGES */
$('#homeLink').on('click', function(){
	HomeRemoveActiveClass();
	$('#homeLink').addClass('active');
	$('body').animate ({
		scrollTop: $('#home').offset().top
	}, 1000);
})
$('#aboutLink').on('click', function(){
	HomeRemoveActiveClass();
	$('#aboutLink').addClass('active');
	$('body').animate ({
		scrollTop: $('#startup').offset().top - $('#header').height()
	}, 1000);
})
$('#featuresLink').on('click', function(){
	HomeRemoveActiveClass();
	$('#featuresLink').addClass('active');
	$('body').animate ({
		scrollTop: $('#statistics').offset().top - $('#header').height()
	}, 1000);
})
$('#pricesLink').on('click', function(){
	HomeRemoveActiveClass();
	$('#pricesLink').addClass('active');
	$('body').animate ({
		scrollTop: $('#prices').offset().top - $('#header').height()
	}, 1000);
})
$('#feedbackLink').on('click', function(){
	HomeRemoveActiveClass();
	$('#feedbackLink').addClass('active');
	$('body').animate ({
		scrollTop: $('#feedback').offset().top - $('#header').height()
	}, 1000);
})
$('#teamLink').on('click', function(){
	HomeRemoveActiveClass();
	$('#teamLink').addClass('active');
	$('body').animate ({
		scrollTop: $('#team').offset().top - $('#header').height()
	}, 1000);
})
$('#contactsLink').on('click', function(){
	HomeRemoveActiveClass();
	$('#contactsLink').addClass('active');
	$('body').animate ({
		scrollTop: $('#contacts').offset().top - $('#header').height()
	}, 1000);
})

var menuLinks = ['#homeLink','#aboutLink', '#featuresLink', '#pricesLink', 
				 '#feedbackLink', '#teamLink', '#contactsLink'];
function HomeRemoveActiveClass() {
	for (var i = 0; i < menuLinks.length; i++) {
		$(menuLinks[i]).removeClass('active');
	}
}

/* SWITCH BETWEEN NAVBAR LINKS ON SCROLL */
$(window).scroll(function(){
	if ($(window).scrollTop() >= $('#contacts').offset().top - $('#header').height() - $(window).height()) {
		HomeRemoveActiveClass();
		$('#contactsLink').addClass('active');
	}
	else if ($(window).scrollTop() >= $('#team').offset().top - $('#header').height()) {
		HomeRemoveActiveClass();
		$('#teamLink').addClass('active');
	}
	else if ($(window).scrollTop() >= $('#feedback').offset().top - $('#header').height()) {
		HomeRemoveActiveClass();
		$('#feedbackLink').addClass('active');
	}
	else if ($(window).scrollTop() >= $('#prices').offset().top - $('#header').height()) {
		HomeRemoveActiveClass();
		$('#pricesLink').addClass('active');
	}
	else if ($(window).scrollTop() >= $('#statistics').offset().top - $('#header').height()) {
		HomeRemoveActiveClass();
		$('#featuresLink').addClass('active');
	}
	else if ($(window).scrollTop() >= $('#startup').offset().top - $('#header').height()) {
		HomeRemoveActiveClass();
		$('#aboutLink').addClass('active');
	}
	else {
		HomeRemoveActiveClass();
		$('#homeLink').addClass('active');
	}
})

/* SETTING NAVBAR FOR SMALL SCREENS */
$('.navbar-toggle').on('click', function(){
	$('.navbar-collapse').css('background','#272727');
})
$(window).resize(function(){
	if ($(window).width() > 950) {
		$('.navbar-collapse').css('background','none');
	}
}) 
// $('#smallScreenMenu').css({
// 	left: $('#main').offset().left
// })
// $('.navbar-toggle').on('click', function(){
// 	if ($(window).width() < 750) {
// 		$('#smallScreenMenu').css({
// 			top: '0',
// 			right: '-100%',
// 			visibility: 'visible'
// 		})
// 		$('#smallScreenMenu').animate({
// 			right: '0px'
// 		}, 1000)
// 		$('#main').css({
// 			position: 'relative'
// 		})
// 		$('#main').animate({
// 			left: '-260px'
// 		}, 1000)
// 	}
// })
