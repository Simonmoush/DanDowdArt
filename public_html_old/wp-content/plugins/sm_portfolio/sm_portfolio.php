<?php
/**
 * Plugin Name: Portfolio
 * Author: Simon Moushabeck
 * Author URI: simonmoush.com
 */


/* plugin should
	1) make a custom post type that is "portfolio entry"
	2) restrict the blocks available on that page to just the gallery and text one
		2a) maybe make a custom block type for this
	3) create a category for portfolio under which all works will fall

*/


/**
 * Register the "artwork" custom post type
 */
function sm_setup_post_type() {
    register_post_type( 'artwork', ['public' => true ] );
}
add_action( 'init', 'sm_setup_post_type' );


/**
 * Activate the plugin.
 */

function sm_activate() {
    pluginprefix_setup_post_type();

    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'sm_activate' );


/**
 * Deactivation hook.
 */
function sm_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'artwork' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'sm_deactivate' );
