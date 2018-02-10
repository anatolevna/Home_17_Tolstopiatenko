(function( $ ) {
  "use strict";

  // Home Top Background Image - Image Control
  wp.customize( 'sk_home_top_background_image', function( value ) {
    value.bind( function( to ) {
      $( '.main-background' ).css( 'background-image', 'url( ' + to + ')' );
    } );
  });


})( jQuery );