<?php 
/*
Plugin Name: Test plugin
Description: test
Version: 1.0
Author: Nadar Rossano 
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

/**
 * Register custom js and css files
 *
 * @return void
 */
function register_custom_files() {
    wp_enqueue_style( 'main-style', plugin_dir_url(__FILE__). '/includes/style.css' );
    wp_enqueue_script( 'main-script', plugin_dir_url(__FILE__). '/includes/main.js' );
}

add_action('wp_enqueue_scripts', 'register_custom_files');


// Footer section 
function footer_wp_test() {
    echo '<footer class="footer-wrapper"> </footer> ';
  }
  
  add_action( 'wp_footer', 'footer_wp_test' );