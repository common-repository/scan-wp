<?php
/*
Plugin Name: Scan WP - Your Own Detector
Plugin URI: http://scanwp.net
Description: This plugin adds your own theme and plugin detector on your site on any page/s you decide, in order to help your users detect themes and plugins on other sites.
Author: Avi Klein
Version: 0.1
Author URI: http://scanwp.net
Text Domain: scan-wp
*/

function Scan_Wp_Shortcode( $atts ){
	return '<div id="scanwp"></div>';
}
add_shortcode( 'scan-wp', 'Scan_Wp_Shortcode' );


function load_scan_wp_style() {
        wp_enqueue_script( 'scanwp_custom_script', 'http://scanwp.net/js/scanwp-search.js' );
        //wp_enqueue_style( 'scanwp-style', plugins_url() . '/scan-wp/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'load_scan_wp_style' );


function scanwp_plugin_menu() {
	add_plugins_page( 'Scan WP Settings Page', 'Scan WP', 'read', 'scan-wp', 'scanwp_plugin_text');

}
add_action('admin_menu', 'scanwp_plugin_menu');

function scanwp_plugin_text(){ ?>

	<script>
	      window.fbAsyncInit = function() {
	        FB.init({
	          appId      : '566513566821789',
	          xfbml      : true,
	          version    : 'v2.3'
	        });
	      };

	      (function(d, s, id){
	         var js, fjs = d.getElementsByTagName(s)[0];
	         if (d.getElementById(id)) {return;}
	         js = d.createElement(s); js.id = id;
	         js.src = "//connect.facebook.net/en_US/sdk.js";
	         fjs.parentNode.insertBefore(js, fjs);
	       }(document, 'script', 'facebook-jssdk'));
	    </script>

	<div style="width:100%; text-align: left; direction: ltr;">
		<h1>Scan WP - Your Very Own Theme and Plugin Detector</h1>
		<strong>Take advantage of ScanWP's abilities and implement it on your site!</strong><br />
		Implementing our FREE tool on your site is a sure bet to get your visitors interested and engage with your site, thus increasing your <strong>Time on site</strong> and reducing your <strong>Bounce rate</strong>.<br />
		If you are in the Wordpress business or are a designer, developer, SEO, PPC or something along these lines, this tool is exactly what you need!
		<br />
		All you need to do is copy the following shortcode<br />
		<code>[scan-wp]</code> <br />
		and implement it on any page or post you want.<br />
		If you need to implenent it within the PHP files, paste the following code between openning and closing PHP tags: <br />
		<code>echo do_shortcode( '[scan-wp]' );</code><br />
		<h2>Like us on facebook and keep in touch!</h2>

		<div class="fb-page" data-href="https://www.facebook.com/scanwp" data-width="300" data-height="130" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/scanwp"><a href="https://www.facebook.com/scanwp">Scan WP</a></blockquote></div></div><br />

		For any general information visit us on: <a href="http://scanwp.net?ref=plugin">Scan WP</a><br/>
		For any information specificly about our tools and plugins visit: <a href="http://scanwp.net/our-plugins">Our tools</a>


	</div>
<?php } ?>
