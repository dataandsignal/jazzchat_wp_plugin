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
*/
add_action( 'wp_head', 'my_header_scripts' );

function my_header_scripts(){
  ?>
        <script type='text/javascript'>var jazzchat_uuid = 'test4';</script>
        <script  src='https://jazzchat.pl/client/js/jazzchat.js'></script>
  <?php
}

add_action( 'admin_menu', 'create_plugin_settings_page' );

function create_plugin_settings_page() {

	// Add the menu item and page
	$page_title = 'Jazzchat Settings Page';
	$menu_title = 'Jazzchat';
	$capability = 'manage_options';
	$slug = 'jazzchat';
	$callback = 'plugin_settings_page_content';
	$icon = 'dashicons-admin-plugins';
	$position = 100;
	add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
}

function plugin_settings_page_content() {?>
	<div class="wrap">
	<h2>Jazzchat Settings</h2><?php
	if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
		admin_notice();
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

function admin_notice() {
	?>
	<div class="notice notice-success is-dismissible">
		<p>Your settings have been updated!</p>
	</div>
	<?php
}

/* Add Settings and Fields */
add_action( 'admin_init', 'setup_sections' );
add_action( 'admin_init', 'setup_fields' );

function setup_sections() {
	add_settings_section( 'jazzchat_settings_first_section', 'Domain', 'settings_callback', 'jazzchat' );
}

function settings_callback( $arguments ) {
	printf( '<div>The only settings you must give to WordPress is Jazzchat\'s domain name that you have registered. If you have not done this yet, you can register domain for free here: <a href=\'https://jazzchat.pl\' target=\'_blank\'>https://jazzchat.pl</a>.</div>' );
	printf( '<br/><div>You can configure all domain and chat settings in agent\'s panel once you signed into your domain at Jazzchat.</div>' );
}

function setup_fields() {
	add_settings_field( 'jazzchat_uuid', 'jazzchat_uuid', 'field_callback', 'jazzchat', 'jazzchat_settings_first_section', '' );
	register_setting( 'jazzchat', 'jazzchat_uuid' );
}

function field_callback( $arguments ) {
	
	$value = get_option( 'jazzchat_uuid' );
	if( !$value ) {
		$value = 'YOUR_DOMAIN';
	}

	$format = '<input name="jazzchat_uuid" id="jazzchat_uuid" type="text" placeholder="%s" value="%s" />';
	echo sprintf( $format, $value, $value );
/**	?>
	<div>
		<p>Here it will be</p>
	</div>
<?php
**/
}

