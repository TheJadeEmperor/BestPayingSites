$(function() {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});
	var ratioW = 1440,
		devW = 1,
		devL=0,
		eyeOff = 300;

	function alignBG(){
		if ($('#bg img').width() > ratioW ) {
			devW = $('#bg img').width()/1440;
		} else {
			devW =1;
		}
		$('#bg img').css('top', -((eyeOff*devW)-eyeOff))

		if ($(window).width() < ratioW){
			devL = -( (ratioW - $(window).width())/2);
		} else {
			devL = 0
		}
		$('#bg img').css('left',devL  )
	}

	$(window).on('resize', function(){
		alignBG()
	}).on('load', function(){
		alignBG()
		$('#bg img').animate({opacity:1},200)
	})

});