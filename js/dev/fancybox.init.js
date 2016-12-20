$(document).ready(function(){
	$('.fb').fancybox({ 
		padding: 0
	});

	$('.fb-noclose').fancybox({ 
		padding: 0,
		closeBtn: false,
	});

	$('.close-btn').click(function(){
		$.fancybox.close();
	});
});