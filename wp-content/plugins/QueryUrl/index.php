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

?>

<script type="text/javascript">
    window.alert("alert");
</script>

