jQuery( document ).ready( function() {

  // Check whether a subscription item is present on the checkout page (this page contains multiple steps that will not immediately be visible)
  if ( jQuery('#order_review .subscription-details').length != 0 ) {

    // Remove checkout as guest button if it exists
    jQuery( '#wpmc-skip-login' ).remove();

  }

} );
