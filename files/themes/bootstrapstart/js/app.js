$(function() {
	//The passed argument has to be at least a empty object or a object with your desired options
	//$("body").overlayScrollbars({ });

	$(".searchfield, i.fa-search").on('click', function(e) {
		$(".searchfield").addClass("sf-width").focus();
	});

	$(".searchfield").focusout(function() {
		$(this).removeClass("sf-width")
	});
});