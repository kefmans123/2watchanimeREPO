// Disable the toolbar for subscrcibers only
add_filter( 'show_admin_bar', function( $show ) {
    if ( current_user_can( 'subscriber' ) ) {
        return false;
    }
    return $show;
} );