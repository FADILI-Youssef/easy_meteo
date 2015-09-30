    $(document).ready(function() {
		$('.scrollTo').click( function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			$('html, body').animate( { scrollTop: $(page).offset().top }, 750 ); // Go
			return false;
		});
	});



    $(document).ready(function() {
		$('#submit_to_periodic_display').click( function() { // Au clic sur un élément
            var id = $(this).attr('id');
			var page = id.substring(10, id.length); // Page cible
			$('html, body').animate( { scrollTop: $('#'+page).offset().top }, 750 ); // Go
			return false;
		});
	});