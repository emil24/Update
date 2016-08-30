function EdgeToCenter(left,right) {
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

function TopToDown(element) {
	$(element).css('visibility', 'visible');
	$(element).css('top', '-100px');
	$(element).transition({
		top: '20px',
		opacity: 1
	},300, function(){
		$(this).animate({
			top: '0px'
		}, 200)
	})
}

function DownToTop(element) {
	$(element).css('visibility', 'visible');
	$(element).css('top', '100px');
	$(element).transition({
		top: '-20px',
		opacity: 1
	}, 300, function(){
		$(this).animate({
			top: '0px'
		}, 200)
	});
}