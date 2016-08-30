/* RESPONSIVITY FOR IMG */
function SetStatisticsSize() {
	if ($(window).width() < 1000) {
		$('#statistics .statImg img').css('width', '100%');
	}
	else {
		$('#statistics .statImg img').css('width', '120%');
	}
}
SetStatisticsSize()
$(window).resize(function(){
	SetStatisticsSize()
})


/* CONNECTING OPTIONS TO STATIMAGES */
var options = [$('#opt1'), $('#opt2'), $('#opt3')];
var imgs = [$('.img1'), $('.img2'), $('.img3')];

//first option
$('#statistics #opt1').on('click', function(){
	if (! $(this).hasClass('clicked')) {
		removeActiveClass();
		$(this).addClass('activeOpt');
		removeClicked();
		$(this).addClass('clicked');
		imgs[0].removeClass('hide');
		animateFirstImg();
	}
})

//second option
$('#statistics #opt2').on('click', function(){
	if (! $(this).hasClass('clicked')) {
		removeActiveClass();
		$(this).addClass('activeOpt');
		removeClicked();
		$(this).addClass('clicked');
		imgs[1].removeClass('hide');
		animateSecondImg();
	}
})

//third option
$('#statistics #opt3').on('click', function(){
	if (! $(this).hasClass('clicked')) {
		removeActiveClass();
		$(this).addClass('activeOpt');
		removeClicked();
		$(this).addClass('clicked');
		imgs[2].removeClass('hide');
		animateThirdImg();
	}
})

function removeActiveClass() {
	for (var i = 0; i < options.length; i++) {
		options[i].removeClass('activeOpt');
		imgs[i].addClass('hide');
	}
}

/* ANIMATING FIRST IMG */
function animateFirstImg() {
	$('#stasImg1').css('transform', 'rotateX(90deg)');
	$('#stasImg1').transition({
		transform: 'rotateX(0deg)'
	}, 800);
}

/* ANIMATING SECOND IMG */
function animateSecondImg() {
	$('#stasImg2').css('transform', 'rotateY(-90deg)');
	$('#stasImg2').transition({
		transform: 'rotateY(0deg)'
	}, 800);
}

/* ANIMATING THIRD IMG */
function animateThirdImg() {
	$('#stasImg3').css('left', '100%');
	$('#stasImg3').transition ({
		left: '0%'
	}, 800);
}

function removeClicked() {
	for (var i = 0; i < options.length; i++) {
		options[i].removeClass('clicked');
	}
}