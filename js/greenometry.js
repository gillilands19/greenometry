jQuery( document ).ready( function( $ ) {

		$('#close').hide();

		$('#menu-icons').click(function(){
			$('#open').toggle();
			$('#close').toggle();
			$('nav.main-header__nav').toggle();
		});
	}
);
