$(document).ready(function(){
	$(window).on("scroll touchmove", function () {
	    $('#headerwrapper').toggleClass('tiny', $(document).scrollTop() > 0);
	});
});	