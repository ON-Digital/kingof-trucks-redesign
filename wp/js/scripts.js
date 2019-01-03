jQuery( document ).ready( function( $ ) {

  'use strict';

  $( '#menu_responsive' ).on( 'click', function( event ) {

    event.stopPropagation();

    $( '.nav-menu-wrp' ).toggleClass( 'nav-menu-wrp-show' );

  } );

} );
