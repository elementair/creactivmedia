<?php
// Add custom Theme Functions here
function wpb_load_fa() {

wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

}

add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );