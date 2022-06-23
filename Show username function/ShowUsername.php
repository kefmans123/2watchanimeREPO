<?php
function give_username(){
    $user=wp_get_current_user();
    $name=$user->display_name; 
    return $name;
}

add_shortcode('profile_name', 'give_username');

add_filter( 'wp_nav_menu_objects', 'my_dynamic_menu_items' );
function my_dynamic_menu_items( $menu_items ) {
    foreach ( $menu_items as $menu_item ) {
        if ( '#profile_name#' == $menu_item->title ) {
            global $shortcode_tags;
            if ( isset( $shortcode_tags['profile_name'] ) ) {
                // Or do_shortcode(), if you must.
                $menu_item->title = call_user_func( $shortcode_tags['profile_name'] );
            }    
        }
    }

    return $menu_items;
} 
