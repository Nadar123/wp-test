<?
/*
Plugin Name: Qurey Url
Plugin URI: https://http://localhost:8080/wp-test/
Description: test
Version: 1.0
Author: Nadar Rossano 
Text Domain: Qurey Url
*/

// adding js to the plugin
function add_js(){
   wp_enqueue_script('add_js', plugins_url( '/main.js', __FILE__ ));
}
add_action('init', 'add_js');

// adding css to the plugin
function add_css(){
  wp_enqueue_style('add_css', plugins_url( '/style.css', __FILE__ ));
}
add_action('init', 'add_css');

// Footer section 
function footer_wp_test() {
  echo '<footer class="footer-wrapper"> here is the wp-test-footer </footer> ';

}
add_action( 'wp_footer', 'footer_wp_test' );

?>

<script type="text/javascript">
    window.alert("alert");
</script>




