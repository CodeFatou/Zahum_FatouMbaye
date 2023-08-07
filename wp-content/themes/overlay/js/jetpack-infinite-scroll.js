/**
 * Overlay - JetPack Compatibility
 *
 */
( function( $ ) {
    
    $( document ).ready( function( $ ) {

        infinite_count = 0;
        
	     // Triggers re-layout on infinite scroll
	     $( document.body ).on( 'post-load', function () {
	     	
			infinite_count = infinite_count + 1;
			
			var $container = $( '.overlay-list-inner' );
			var $selector = $( '#infinite-view-' + infinite_count );
			var $elements = $selector.find( 'article.hentry' );
			
			$elements.hide();
			$container.masonry( 'reload' );
			$elements.fadeIn( 'slow' );
			
	     });
        
    });
    
} )( jQuery );