<?php


function dd_enqueue_scripts(){
	//wp_enqueue_style("tachyons-min", get_stylesheet_directory_uri() . "/lib/tachyons-min.css");
}
add_action("wp_enqueue_scripts", "dd_enqueue_scripts");
