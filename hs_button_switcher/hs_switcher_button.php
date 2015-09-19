<?php
/**
 * @package Button Switcher
 * @version 0.0.1
 */
/*
Plugin Name: Button Switcher
Plugin URI: http://silverhoneymedia.com
Description:  Button that switches to another site.
Author: Honey Silvas
Version: 0.0.1
Author URI: http://silverhoneymedia.com
*/

function hs_add_button_switcher(){
	require_once ( plugin_dir_path( __FILE__ ) . "script/add_button.php" );
	require_once ( plugin_dir_path( __FILE__ ) . "script/button_switcher_css.php" );
	require_once ( plugin_dir_path( __FILE__ ) . "script/button_switcher_javascript.php" );	
}

add_action( "wp_footer", "hs_add_button_switcher" );

?>