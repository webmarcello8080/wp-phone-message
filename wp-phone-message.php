<?php
/**
 * Plugin Name:       WP Phone Message
 * Plugin URI:        https://webmarcello.co.uk/blog/wp-phone-message-plugin/
 * Description:       Send a whatsapp message from your Wordpress website. You can render a message form through shotcode or widget.
 * Version:           1.1.1
 * Requires at least: 4.5.13
 * Requires PHP:      5.6
 * Author:            Marcello Perri
 * Author URI:        http://webmarcello.co.uk
 * Text Domain:       wp-phone-message
 */


define('PLUGIN_WPM_BASENAME', plugin_basename(__FILE__) );

// import files from folder 'includes'
foreach ( glob( plugin_dir_path( __FILE__ ) .'includes/*.php') as $filename)
{
    include_once $filename;
}

// load classes, create an instance of the classes to run __constructs
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

// plugin uninstallation
register_uninstall_hook( __FILE__, 'wp_phone_message_uninstall' );
function wp_phone_message_uninstall() {
    deletePlugin();
}