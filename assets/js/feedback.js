function SetFeedbackSize() {
	if ($(window).width() < 1000) {
		$('#feedback .container-fluid').css("padding", "0px");
		$('#feedback .row1 p').css("width", "65%");
		$('#feedback .row1 #secondQuote').css({
			top: '-50px',
			left: '90%'
		})
	}
	else {
		$('#feedback .container-fluid').css("padding", "60px 0px");
		$('#feedback .row1 p').css("width", "auto");
		$('#feedback .row1 #secondQuote').css({
			top: '100px',
			left: '0'
		})
	}
}

SetFeedbackSize()
$(window).resize(function() {
	SetFeedbackSize()
})