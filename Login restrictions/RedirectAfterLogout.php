<?php
function wpdocs_logout_redirect( $redirect_to, $requested_redirect_to, $user ) {
 
    $user_roles = $user->roles;
    $user_has_admin_role = in_array( 'administrator', $user_roles );
 
    if ( $user_has_admin_role ) :
        $redirect_to = admin_url();
    else:
        $redirect_to = home_url();
    endif;
 
    return $redirect_to;
}         
add_filter( 'logout_redirect', 'wpdocs_logout_redirect', 9999, 3 );
