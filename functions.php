<?php 


/***************************
 * Work for script**********
***************************/
function whitetopshow_my_scripts_method_child() {
	global $wp_scripts;
	wp_enqueue_script('bootstrap_child',get_stylesheet_directory_uri() . '/js/bootstrap.min.js',array( 'jquery' ),false,true);
	wp_enqueue_script('script_child',get_stylesheet_directory_uri() . '/js/child_script.js',array( 'jquery' ),false,true);
}
add_action( 'wp_enqueue_scripts', 'whitetopshow_my_scripts_method_child' ); 

?>