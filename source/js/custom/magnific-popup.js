/*====================================================
=            Magnific Popup - Members Bio            =
====================================================*/
// all the popup should have a same class
$( '.list-members' ).magnificPopup( {
  delegate: 'a',
  mainClass: 'mfp-move-from-top',
  removalDelay: 500, // delay removal by X to allow out-animation
  midClick: true,
  gallery: {
    enabled: true
  }
} );