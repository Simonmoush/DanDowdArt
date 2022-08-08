<?php


/*
function dd_enqueue_scripts(){
	//wp_enqueue_style("tachyons-min", get_stylesheet_directory_uri() . "/lib/tachyons-min.css");
}
add_action("wp_enqueue_scripts", "dd_enqueue_scripts");
*/


add_action( 'after_setup_theme', 'register_primary_menu' );
function register_primary_menu() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'dd' ) );
}

apply_filters("show_admin_bar", "__return_false");
