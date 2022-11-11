var btnMorePost    = $( '#ajax-more-post' );
var loadingDots    = $( '.loading-dots' );

// Load More Post
////////////////////////////////////////////////
btnMorePost.on( 'click', function( e ) {
  e.preventDefault();

  // disable load more button
  btnMorePost.addClass( 'btn-disabled' );

  update_post( $( this ), 'filter_more' );
} );

// Update Post
////////////////////////////////////////////////
function update_post( $this, trigger ) {

  // show loading dots
  loadingDots.addClass( 'js-active' );

  if ( trigger == 'filter_more' ) {
    var pageNumber = $( '#filter-pagenum' ).val();
  }

  var cpt             = $this.data( 'cpt' );
  var pageNumber      = $( '#filter-pagenum' ).val();
  var postsPerPage    = $( '#filter-posts-per-page' ).val();
  var unseenPostCount = $( '#filter-unseen-post-count' ).val();

  $.ajax( {
    type: 'POST',
    dataType: 'html',
    url: localize_var.ajax_url,
    data: {
      action       : 'update_post_ajax',
      cpt          : cpt,
      pageNumber   : pageNumber,
      postsPerPage : postsPerPage,
    },
    success: function( data ) {

      var $data = $( data );

      if ( $.trim( data ) != '' && $.trim( data ) != 0 ) {

        loadingDots.removeClass( 'js-active' );

        /*----------- Filter More -----------*/
        if ( trigger == 'filter_more' ) {

          unseenPostCount = unseenPostCount - $data.length;

          $( '#filter-pagenum' ).val( parseInt( pageNumber ) + 1 );
          $( '#filter-unseen-post-count' ).val( unseenPostCount );

          $( '#ajax-list-post' ).append( $data );

          // scroll to newly appended data object
          // $( 'html,body' ).animate( {
          //   scrollTop: $( $data ).offset().top
          // }, 100 );
          ScrollTrigger.refresh();
          init();
        }

        if ( unseenPostCount > 0 ) {
          // console.log( data.length );
          // console.log( unseenPostCount );
          btnMorePost.fadeIn( 400 );
          btnMorePost.attr( 'disabled', false );
        } else {
          btnMorePost.hide();
        }

      } else {

        $( '.loading-spinner' ).removeClass( 'js-active' );
        loadingDots.removeClass( 'js-active' );
        btnMorePost.hide();

      } // trim

    } //success

  } ); //ajax
  return false;
}