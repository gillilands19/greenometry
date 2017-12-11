jQuery( document ).ready( function( $ ) {

		$('#close').hide();

		$('#menu-icons').click(function(){
			$('#open').toggle();
			$('#close').toggle();
			$('#navigation-container').toggle();
		});
	}
);
