<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

delete_option( 'wp-phone-message-phone-number' );
delete_option( 'wp-phone-message-phone-prefix' );
delete_option( 'wp-phone-message-full-phone-number' );
delete_option( 'wp-phone-message-title' );
delete_option( 'wp-phone-message-text' );
delete_option( 'wp-phone-message-button' );
delete_option( 'wp-phone-message-form-message' );
delete_option( 'wp-phone-message-textarea' );
delete_option( 'wp-phone-message-name' );
delete_option( 'wp-phone-message-name-active' );
delete_option( 'wp-phone-message-name-mandatory' );
delete_option( 'wp-phone-message-phone' );
delete_option( 'wp-phone-message-phone-active' );
delete_option( 'wp-phone-message-phone-mandatory' );
delete_option( 'wp-phone-message-extra' );
delete_option( 'wp-phone-message-extra-active' );
delete_option( 'wp-phone-message-extra-mandatory' );
delete_option( 'wp-phone-message-email' );
delete_option( 'wp-phone-message-email-active' );
delete_option( 'wp-phone-message-email-mandatory' );

delete_option( 'wp-phone-message-button-widget' );
delete_option( 'wp-phone-message-textarea-widget' );
delete_option( 'wp-phone-message-name-widget' );
delete_option( 'wp-phone-message-name-active-widget' );
delete_option( 'wp-phone-message-name-mandatory-widget' );
delete_option( 'wp-phone-message-phone-widget' );
delete_option( 'wp-phone-message-phone-active-widget' );
delete_option( 'wp-phone-message-phone-mandatory-widget' );
delete_option( 'wp-phone-message-extra-widget' );
delete_option( 'wp-phone-message-extra-active-widget' );
delete_option( 'wp-phone-message-extra-mandatory-widget' );
delete_option( 'wp-phone-message-email-widget' );
delete_option( 'wp-phone-message-email-active-widget' );
delete_option( 'wp-phone-message-email-mandatory-widget' );

add_shortcode( 'wp-phone-message', '__return_false' );