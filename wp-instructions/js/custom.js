// After item in the list is clicked
// change the tab styling
jQuery( '.menu a[data-toggle="tab"]' ).on( 'click', function ( e ) {
    // save the link e.g. #menu1
    var target = e.target.attributes.href.value;
    // remove the styling of the active tab
    jQuery( '.nav-tabs li.active' ).removeClass( 'active' );
    // add the style to the current tab
    jQuery( '.nav-tabs li a[href="' + target + '"]' ).parent().addClass( 'active' );
} );
