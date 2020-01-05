<?php
/**
 * @package Jazzchat
 * @version 1.0
 */
/*
Plugin Name: Jazzchat
Plugin URI: http://wordpress.org/plugins/jazzchat/
Description: Connect users and agents within domains using chat, audio and video.
Author: Piotr Gregor piotr@dataandsignal.com
Version: 1.0
Author URI: https://jazzchat.pl
License: GPLv2 or later
Date: 1 Jan 2020
*/
add_action( 'wp_head', 'jazzchat_header_scripts' );

function jazzchat_header_scripts(){

	wp_enqueue_script( "jazzchat_js_uuid", "https://jazzchat.pl/client/js/jazzchat.js" );
	
	$domain_uuid = get_option( 'jazzchat_uuid' );
	if( !$domain_uuid ) {
		$domain_uuid = 'DOMAIN_NOT_SET';
	}
	
	$jazzchat_uuid_define = 'var jazzchat_uuid = "' . $domain_uuid . '";';
	wp_add_inline_script( "jazzchat_js_uuid", $jazzchat_uuid_define );
}

add_action( 'admin_menu', 'jazzchat_create_plugin_settings_page' );

function jazzchat_create_plugin_settings_page() {

	// Add the menu item and page
	$page_title = 'Jazzchat Settings Page';
	$menu_title = 'Jazzchat';
	$capability = 'manage_options';
	$slug = 'jazzchat';
	$callback = 'jazzchat_plugin_settings_page_content';
	$icon = 'dashicons-admin-plugins';
	$position = 100;
	add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
}

function jazzchat_plugin_settings_page_content() {?>
	<div class="wrap">
	<h2>Jazzchat Settings</h2><?php
	if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
		jazzchat_admin_notice();
	} ?>
		<form method="POST" action="options.php">
		<?php
			settings_fields( 'jazzchat' );
			do_settings_sections( 'jazzchat' );
			submit_button();
		?>
		</form>
		</div> <?php
}

function jazzchat_admin_notice() {
	?>
	<div class="notice notice-success is-dismissible">
		<p>Your settings have been updated!</p>
	</div>
	<?php
}

/* Add Settings and Fields */
add_action( 'admin_init', 'jazzchat_setup_sections' );
add_action( 'admin_init', 'jazzchat_setup_fields' );

function jazzchat_setup_sections() {
	add_settings_section( 'jazzchat_settings_first_section', 'Domain', 'jazzchat_settings_callback', 'jazzchat' );
}

function jazzchat_settings_callback( $arguments ) {
	printf( '<div>When you activate Jazzchat plugin, a chat widget is displayed in the right bottom corner of your web page.</div>' );
	printf( '<div>When the widget is clicked, it will open new chat and attempt to notify all agents in your domain.</div>' );
	printf( '<div>Therefore you must tell WordPress what is your domain name registered at <a href=\'https://jazzchat.pl\' target=\'_blank\'>https://jazzchat.pl</a>. If you have not registered your domain yet, you can do it now.</div>' );
	printf( '<div>All agents in your domain will have access to every chat started in your domain and can communicate with clients.</div>' );
	printf( '<br/><div>You can configure all the chat settings for your domain in agent\'s panel once you signed into your domain at Jazzchat.</div>' );
}

function jazzchat_setup_fields() {
	add_settings_field( 'jazzchat_uuid', 'Your domain registered at Jazzchat', 'jazzchat_field_callback', 'jazzchat', 'jazzchat_settings_first_section', '' );
	register_setting( 'jazzchat', 'jazzchat_uuid' );
}

function jazzchat_field_callback( $arguments ) {
	
	$domain_uuid = get_option( 'jazzchat_uuid' );
	if( !$domain_uuid ) {
		$domain_uuid = 'DOMAIN_NOT_SET';
	}

	$format = '<input name="jazzchat_uuid" id="jazzchat_uuid" type="text" placeholder="%s" value="%s" />';
	echo sprintf( $format, $domain_uuid, $domain_uuid );
}

