<?php
defined( 'ABSPATH' ) or die( 'no' );
include(plugin_dir_path() ."/admin/menu.php");
include(plugin_dir_path() ."/settings.php");
/*
Plugin Name: WP Launch Logs
*/


function launchlogs_init() {
}

function launchlogs_greeting() {
}



add_action('init', 'launchlogs_settings');
add_action('init', 'launchlogs_init');
add_filter('greeting', 'launchlogs_greeting');

?>
