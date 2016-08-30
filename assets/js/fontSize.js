function SetFontSize() {
	if ($(window).width() > 1000) {
		$('h1').css('font-size', '45px');
		$('h2').css('font-size', '34px');
		$('h3').css('font-size', '')
	}
	else {
		$('h1').css('font-size', '27px');
		$('h2').css('font-size', '23px');
	}
}

SetFontSize();
$(window).resize(function(){
	SetFontSize();
})