jQuery(document).ready(function($){
	var isLateralNavAnimating = false;
	
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		if( !isLateralNavAnimating ) {
			if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
			
			$('body').toggleClass('navigation-is-open');
			$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				isLateralNavAnimating = false;
			});
		}
	});
});

var update = function () {
    datetime = moment();
	time.html(datetime.format('HH')+":"+datetime.format('mm'));
    date.html(datetime.format('LL'));
};

var formatjam = moment().format('H');

$(document).ready(function(){
	$('#fade').fadeIn(2000);
    date = $('#date');
    time = $('#time'); 

	var waktu = parseInt(formatjam);

    update();
    setInterval(update, 1000);

	if (waktu <= 12) {
	   	$( "#info" ).text('Good morning, Christiawan');
	   	document.getElementById("waktu").style.color = "white";
	   	// document.body.style.backgroundSize = "100% 100%";
	   	document.getElementById("main").style.background = "url('../images/afternoon.jpg')";
	   	// document.main.style.background = "url('../images/morning.jpg') no-repeat right top";
	} else if (waktu <= 17) {
	   	$( "#info" ).text('Good afternoon, Christiawan');
	   	document.getElementById("waktu").style.color = "white";
	   	// document.body.style.backgroundSize = "100% 100%";
	   	// document.main.style.background = "url('../images/afternoon.jpg') no-repeat right top";
	   	document.getElementById("main").style.background = "url('../images/afternoon.jpg')";
	}else {
	   	$( "#info" ).text('Good evening, Christiawan');
	   	document.getElementById("waktu").style.color = "white";
	   	// document.main.style.background = "url('../images/evening.jpg') no-repeat right top";
	   	document.getElementById("main").style.background = "url('../images/afternoon.jpg')";
	   	// document.body.style.backgroundSize = "100% 100%";
	}
});