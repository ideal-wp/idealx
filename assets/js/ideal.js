jQuery(document).on("keyup", function (e) {
  var modal = UIkit.modal(".uk-modal");
  if (e.keyCode === 27 && modal.isActive()) {
    modal.hide();
  }
});

jQuery(document).ready(function($){

  $(".postform").select2();
  $.fn.select2.defaults.set( "theme", "bootstrap" );
  $( "select" ).select2({
    theme: "bootstrap"
  });

	
	$( ".dropdown-toggle" ).focus(function() {
		$( this ).addClass("uk-open");
		$( this ).next("div").addClass("uk-open");

	});


	$( ".uk-navbar-dropdown-nav li:last-child a" ).keydown(function() {
		$(this).parentsUntil(".dropdown-toggle").removeClass("uk-open");
		
	});
	

	$( ".uk-parent a" ).focus(function() {
		$( this ).next(".uk-dropdown").addClass("uk-open");
	});

	$( ".more-link" ).focus(function() {
		$( this ).next("span").focus();
	});
	

});




( function() {
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();