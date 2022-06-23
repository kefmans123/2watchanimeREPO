function restrict_access_admin_panel(){
    global $current_user;
    wp_get_current_user();
 
    if ($current_user->user_level <  4) {
        wp_redirect( get_bloginfo('url') );
        exit;
    }
}
add_action('admin_init', 'restrict_access_admin_panel', 1);