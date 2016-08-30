/* MAKING CHANGES TO INPUTS AND BUTTONS */

//static changes
if ($(window).width() < 1000) {
	//for small screens
	$('#updates #name').css("width", "100%");	//change name input
	$('#updates #email').css("width", "100%");	//change email input
	$('#updates button').css("width", "100%");	//change button
	$('#updates h1').css("font-size", "36px");
}
else {
	//for big screen
	$('#updates #name').css("width", "185px");	//set to original size
	$('#updates #email').css("width", "275px");	//set to original size
	$('#updates button').css("width", "auto");	//set to original size
	$('#updates h1').css("font-size", "45px");
}

//dynamic changes
$(window).resize(function() {
	if ($(window).width() < 1000) {
		//for small screens
		$('#updates #name').css("width", "100%");	//change name input
		$('#updates #email').css("width", "100%");	//change email input
		$('#updates button').css("width", "100%");	//change button
		$('#updates h1').css("font-size", "36px");
	}
	else {
		//for big screen
		$('#updates #name').css("width", "185px");	//set to original size
		$('#updates #email').css("width", "275px");	//set to original size
		$('#updates button').css("width", "auto");	//set to original size
		$('#updates h1').css("font-size", "45px");
	}

})