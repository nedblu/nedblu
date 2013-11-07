$(document).ready(function() {

	// Menu animation...
	var n = '#nav', no = 'nav-open';
	$('#nav-menu').click(function() {
		if($(n).hasClass(no)){
			$(n).animate({height:0},600);
			setTimeout(function(){
				$(n).removeClass(no).removeAttr('style');
			},620);
		}else{
			var newH = $(n).css('height', 'auto').height();
			$(n).height(0).animate({height:newH},600);
			setTimeout(function(){
				$(n).addClass(no).removeAttr('style');
			},620);
		}
	});

	// Container margin-top...
	var h = $('.nav-bar').height();
	h-=4;
	$('#container').css('padding-top', h);

	// Autosizing textarea with animation...
	$(function(){
		$('.animated').autosize({append: "\n"});
	});

	// Scroll to anchor...
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    if($(n).hasClass(no)){
			$(n).animate({height:0},600);
			setTimeout(function(){
				$(n).removeClass(no).removeAttr('style');
			},620);
		}

		var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top-h
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});

});