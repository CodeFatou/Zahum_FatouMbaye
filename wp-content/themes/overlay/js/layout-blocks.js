/**
 * Custom Blocks Functionality
 *
 */
( function( $ ) {
    
    $(window).on('load',function () {
        
        // Initialize the Masonry plugin
        var grid = $( '.list-grid .overlay-list-inner' ).masonry({
            columnWidth: '.list-grid article.blog-grid-block',
            itemSelector: '.list-grid article.blog-grid-block',
            percentPosition: true
        });

        // Once all images within the grid have loaded lay out the grid
        $( '.list-grid .overlay-list-inner' ).imagesLoaded( function() {
            grid.masonry('layout');
        });

        // Once the layout is complete hide the loader. Triggering the window resize event fixes a small spacing issue on the grid 
        grid.one( 'layoutComplete', function() {
            $( '.overlay-list' ).removeClass( 'loading-blocks' );
            $(window).resize();
        } );
        
    });
    
} )( jQuery );