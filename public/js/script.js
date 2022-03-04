



$(window).scroll(function() {
	var $height = $(window).scrollTop();
  if($height > 80) {
		$('#mapNotation').addClass('activate-notation');
	} else {
		$('#mapNotation').removeClass('activate-notation');
	}
});



function dce(y) {
	$(y).remove();
}