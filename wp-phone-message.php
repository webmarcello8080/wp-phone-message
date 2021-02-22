<?php
/**
 * Plugin Name:       WP Phone Message
 * Plugin URI:        https://github.com/webmarcello8080/wp-phone-message
 * Description:       Send a whatsapp message from your Wordpress website. You can render a message form through shotcode or widget.
 * Version:           1.1.0
 * Requires at least: 4.5.13
 * Requires PHP:      5.6
 * Author:            Marcello Perri
 * Author URI:        http://webmarcello.co.uk
 * Text Domain:       wp-phone-message
 */


define('PLUGIN_WPM_BASENAME', plugin_basename(__FILE__) );

foreach ( glob( plugin_dir_path( __FILE__ ) .'includes/*.php') as $filename)
{
    include_once $filename;
}

if ( !function_exists( 'wp_phone_message_loader' ) ) {
    function wp_phone_message_loader(){
        if( is_admin() ){
            new WpPhoneMessageAdmin;
        }
        new WpPhoneMessageShortcode;
        new WpPhoneMessageFrontend;
    }
    add_action('plugins_loaded', 'wp_phone_message_loader');
}

// Register and load the widget
if ( !function_exists( 'wp_phone_message_load_widget' ) ) {
    function wp_phone_message_load_widget() {
        register_widget( 'WpPhoneMessageWidget' );
    }
    add_action( 'widgets_init', 'wp_phone_message_load_widget' );
}
