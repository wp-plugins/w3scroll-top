<?php
/*
Plugin Name: W3Scroll Top
Plugin URI: http://w3itinfo.com/plugins/w3scrolltop/
Description: This plugin will enable scroll to top function in your WordPress theme. Active W3Scroll Top plugin, don't need to do anything. It will work for your WordPress theme. Impossible to be easier than this one!
Author: W3itinfo
Author URI: http://w3itinfo.com/
Version: 1.0
*/

/*Some Set-up*/

define('W3_SCROLLTOP_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

/* Latest jQuery from Wordpress */

function w3itinfo_scrolltop_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'w3itinfo_scrolltop_latest_jquery');

/*********** Plugin javascript and Css File Call ***********/

function w3itinfo_scrolltop_plugin_main_js() {
	
/* Plugin javascript Main file */

wp_enqueue_script('w3scrolltop-plugin-main', W3_SCROLLTOP_PLUGIN_PATH.'js/jquery-scrollToTop.js', array('jquery'), 1.0, true);

/* Adding plugin javascript active file */

wp_enqueue_script('w3scrolltop-plugin-script-active', W3_SCROLLTOP_PLUGIN_PATH.'js/w3itinfo-scrolltop-active.js', array('jquery'), '1.0', true);

/* Plugin easing CSS file */

wp_enqueue_style('w3easing-plugin-style', W3_SCROLLTOP_PLUGIN_PATH.'css/easing.css');

/* Plugin scrollToTop CSS file */

wp_enqueue_style('w3scrollToTop-plugin-style', W3_SCROLLTOP_PLUGIN_PATH.'css/scrollToTop.css');

}

add_action('wp_enqueue_scripts','w3itinfo_scrolltop_plugin_main_js');


?>