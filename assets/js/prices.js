function SetPricesSize() {
	if ($(window).width() < 1000) {
		$('#prices .row1 p').css("width", "90%");
		$('#prices .row3 p').css("width", "90%");
	}
	else {
		$('#prices .row1 p').css("width", "35%");
		$('#prices .row3 p').css("width", "35%");
	}
}

SetPricesSize();
$(window).resize(function() {
	SetPricesSize();
})