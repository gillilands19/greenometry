jQuery( document ).ready( function( $ ) {

		$('#close').hide();

		const navElem = [$('#open'), $('#close'), $('#navigation-container')];

		$('#menu-icons').click(function() {
			if($(window).width() < 925) {
				navElem.forEach(elem => elem.toggle());
		}
		});

		$(window).on('resize', () => {
			if($(window).width() > 925) {
				navElem.forEach(elem => elem.toggle());
				$('#navigation-container').show();
			} else {
				$('#navigation-container').hide();
				$('#close').hide();
				$('#open').show();
			}
		})

	});

