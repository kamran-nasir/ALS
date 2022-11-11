$( '.header-nav-toggle' ).click( function ( e ) {
  $( this ).toggleClass( 'js-active' );
  $( '.nav-wrapper' ).toggleClass( 'js-active' );
  $( 'body' ).toggleClass( 'js-popup-active' );
  e.preventDefault();
} );

$( '.header-nav-close' ).click( function( e ) {
  $( '.header-nav-toggle' ).toggleClass( 'js-active' );
  $( '.nav-wrapper' ).toggleClass( 'js-active' );
  $( 'body' ).removeClass( 'js-popup-active' );
  e.preventDefault();
} );

$('.sub-menu li a').click(function(e) {
 $('.sub-menu li.active').removeClass('active');
  var $parent = $(this).parent();
  $parent.addClass('active');
});

$( '.sub-menu' ).addClass( 'has-scroll-to-section-links' );

/* Add dropdown arrow for mobile parent menu */
$( '.header-primary-parent-menu li.menu-item-has-children > a' ).append( '<span class="has-icon icon-arrow-down"></span>' );
$( '.header-primary-parent-menu li.menu-item-has-children > a span' ).on( 'click', function( e ) {
  e.preventDefault();
  $( this ).toggleClass('js-active');
  $( this ).parent( 'a' ).siblings( '.sub-menu' ).toggleClass( 'js-active' );
  $( this ).parent( 'a' ).siblings( '.sub-menu' ).find( 'span.js-active' ).removeClass( 'js-active' );
  $( this ).parent( 'a' ).siblings( '.sub-menu' ).find( '.sub-menu.js-active' ).removeClass( 'js-active' );
} );