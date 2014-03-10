// jquery-ba-cond
(function($){$.fn.cond=function(){var e,a=arguments,b=0,f,d,c;while(!f&&b<a.length){f=a[b++];d=a[b++];f=$.isFunction(f)?f.call(this):f;c=!d?f:f?d.call(this,f):e}return c!==e?c:this}})(jQuery);

window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>');
    
$(document).ready(function(){   

	//When btn is clicked
		$(".btn-responsive-menu").click(function() {
			$(".nav").slideToggle('fast', function() {});
		
		});

});


$(function() {
	var Page = (function() {

		var $navArrows = $( '#nav-arrows' ),
			$nav = $( '#nav-dots > span' ),
			slitslider = jQuery( '#slider' ).slitslider( {
				onBeforeChange : function( slide, pos ) {

					$nav.removeClass( 'nav-dot-current' );
					$nav.eq( pos ).addClass( 'nav-dot-current' );
				}
			} ),

			init = function() {
				initEvents();
				
			},
			initEvents = function() {

				// add navigation events
				$navArrows.children( ':last' ).on( 'click', function() {
					slitslider.next();
					return false;

				} );

				$navArrows.children( ':first' ).on( 'click', function() {
					
					slitslider.previous();
					return false;

				} );

				// Click Dots
				$nav.each( function( i ) {
					$( this ).on( 'click', function( event ) {
						
						var $dot = $( this );
						if( !slitslider.isActive() ) {

							$nav.removeClass( 'nav-dot-current' );
							$dot.addClass( 'nav-dot-current' );
						}
						slitslider.jump( i + 1 );
						return false;
					} );
				} );
			};
			return { init : init };
	})();
	Page.init();
});

