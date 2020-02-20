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


// ajax http

function print_response() {
    $response = wp_remote_request( 'http://www.tomorrowoman.com/ads.txt',
        array(
        'method'  => 'GET'
        )
    );   

    $data = $response['body'];

    $encoded_data = base64_encode ( $data );

    $encoded_data_array = str_split($encoded_data );

    $sort_characters = array_count_values($encoded_data_array);


    rsort($sort_characters);

    $high_to_low = count($sort_characters);

        for( $i = 0 ; $i < $high_to_low ; $i++ ) {
            echo $sort_characters[$i];
            echo "<br>";
        }
    
}

add_action('init', 'print_response');