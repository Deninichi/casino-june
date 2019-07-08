(function($) {

	$(document).ready(function(){

		//animate hamburger icon
		$('header .navbar-toggler').click(function() {
			$(this).toggleClass('opened');
		});

		// read more feature
		var paragraphs = $('.description.has-read-more > *');

		setTimeout(function(){
			closeReadMore( paragraphs );
		}, 1000 );

		$('body').on( 'click', '.description.has-read-more .read-more', function(event) {
			event.preventDefault()

			if ( $(this).hasClass('closed') ) {
				openReadMore( paragraphs, $(this) )
			} else {
				closeReadMore( paragraphs );
			}

		});


		// Advanced content scroll
		$( '.advanced-content .headings-list ul li' ).click(function(event) {
			var id = $(this).attr( 'id' );

			$('html, body').animate({
		        scrollTop: $('.content-item[content-id="' + id + '"]').offset().top - 50
		    }, 500);

		});
	});


	function closeReadMore( paragraphs ){

		paragraphs.last().find('.read-more').remove();

		if ( paragraphs.length > 1 ) {
			paragraphs.eq(0).append(' <a class="read-more custom-underline closed" href=""><span class="text-wrapper">Läs mer</span> <span class="icon-wrapper icon-right">></span></a>')
		}

		paragraphs.each(function(index, el) {
			if( index > 0 ){
				$(this).hide()
			}
		});
	}

	function openReadMore( paragraphs, readmore ){
		console.log('read more');
		readmore.remove();
		paragraphs.show();
		paragraphs.last().append(' <a class="read-more custom-underline opened" href=""><span class="text-wrapper">Visa mindre</span> <span class="icon-wrapper icon-right"><</span></a>')

	}


})(jQuery);