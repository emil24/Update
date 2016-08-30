function SetStartupSize() {
	if ($(window).width() < 1000) {
		$('#startup .row1 button')
		.addClass("col-xs-12")
		.css("width", "100%");
		$('#startup .firstTab .firstTabText h5').css('width', '90%');
		$('#startup .secondTab .secondTabText').css('padding-top', '0px');
		$('#startup .secondTab .secondTabText h5').css('width', '100%');
		$('#startup .thirdTab .row1 p').css("width", "100%");
	}
	else {
		$('#startup .row1 button')
		.removeClass("col-xs-12")
		.css("width", "180px");
		$('#startup .firstTab .firstTabText h5').css('width', '70%');
		$('#startup .secondTab .secondTabText').css('padding-top', '60px');
		$('#startup .secondTab .secondTabText h5').css('width', '70%');
		$('#startup .thirdTab .row1 p').css("width", "30%");
	}
}
SetStartupSize()
$(window).resize(function() {
	SetStartupSize()
})



/* CONNECTING BUTTONS TO TABS */
var buttons = [$('#firstTabBtn'), $('#secondTabBtn'), $('#thirdTabBtn')];
disableActiveButton();
//first tab button
$('#firstTabBtn').on('click', function(){
	$('#thirdTabBtn').removeClass('activeBtn');
	$('#secondTabBtn').removeClass('activeBtn');
	$('#firstTabBtn').addClass('activeBtn');
	disableActiveButton();
	$('#startup .secondTab').addClass('hide');
	$('#startup .thirdTab').addClass('hide');
	$('#startup .firstTab').removeClass('hide');

	EdgeToCenter('#firstTabLeft', '#firstTabRight');
	
})


//second button tab
$('#secondTabBtn').on('click', function(){
	$('#firstTabBtn').removeClass('activeBtn');
	$('#thirdTabBtn').removeClass('activeBtn');
	$('#secondTabBtn').addClass('activeBtn');
	disableActiveButton();
	$('#startup .firstTab').addClass('hide');
	$('#startup .thirdTab').addClass('hide');
	$('#startup .secondTab').removeClass('hide');
	
	//animating second tab
	//for big screen
	if ($(window).width() > 1000) {
		$('#secondTabRight').css('left', '100%');
		$('#secondTabRight').css('visibility', 'visible');
		$('#secondTabRight').animate({
			left: "52%"
		}, 500, function(){
			$(this).animate({
				left: "55%"
			}, 500)
		});
		$('#secondTabLeft').css('left', '-100%');
		$('#secondTabLeft').css('visibility', 'visible');
		$('#secondTabLeft').animate({
			left: "-47%"
		}, 500, function(){
			$(this).animate({
				left: "-50%"
			}, 500)
		})
	}
	//for small screen
	else {
		$('#secondTabRight').css('left', '100%');
		$('#secondTabRight').css('visibility', 'visible');
		$('#secondTabRight').animate({
			left: "-5%"
		}, 500, function(){
			$(this).animate({
				left: "0%"
			}, 500)
		});
		$('#secondTabLeft').css('left', '-100%');
		$('#secondTabLeft').css('visibility', 'visible');
		$('#secondTabLeft').animate({
			left: "10%"
		}, 500, function(){
			$(this).animate({
				left: "0%"
			}, 500)
		})
	}
})

//third button tab
$('#thirdTabBtn').on('click', function(){
	$('#firstTabBtn').removeClass('activeBtn');
	$('#secondTabBtn').removeClass('activeBtn');
	$('#thirdTabBtn').addClass('activeBtn');
	disableActiveButton();
	$('#startup .firstTab').addClass('hide');
	$('#startup .secondTab').addClass('hide');
	$('#startup .thirdTab').removeClass('hide');
	
	//animating third tab
	$('.thirdTab .row1 p').hide().fadeIn(500);
	$('#thirdTabFooter').css('top', '-130px');
	$('#thirdTabLeft').css('visibility', 'visible');
	$('#thirdTabFooter').animate({
		top: '0px'
	}, 300 
	); 
})

//disabling button if active
function disableActiveButton() {
	for (var i = 0; i < buttons.length; i++) {
		buttons[i].prop('disabled', false);//first remove disable
		if (buttons[i].hasClass('activeBtn')) {
			buttons[i].prop('disabled', true);
		}
	}
}
