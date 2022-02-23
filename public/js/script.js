
$("#mapYear").change(function () {
    chosenYear = this.value;

    switch (chosenYear) {
        case "2021":
            $("#mapKvartal").empty();
            $("#mapKvartal").append('<option selected value="4">4 квартал</option>');
          break;
        case "2022":
            $("#mapKvartal").empty();
            $("#mapKvartal").append('<option selected value="1">1 квартал</option>');
          break;
    }
    
});



$(window).scroll(function() {
	var $height = $(window).scrollTop();
  if($height > 80) {
		$('#mapNotation').addClass('activate-notation');
	} else {
		$('#mapNotation').removeClass('activate-notation');
	}
});