<?php
if ( !class_exists( 'WpPhoneMessageModel' ) ) {

    class WpPhoneMessageModel {

        public function setData($args){

            $phone = sanitize_text_field( $args['wp-phone-message-phone-number'] );
            $prefix = (int) str_replace(' ', '', sanitize_text_field( $args['wp-phone-message-phone-prefix'] ));
            $title = sanitize_text_field( $args['wp-phone-message-title'] );
            $text = sanitize_text_field( $args['wp-phone-message-text'] );
            $button = sanitize_text_field( $args['wp-phone-message-button'] );
            $textarea = sanitize_text_field( $args['wp-phone-message-textarea'] );
            $name_place = sanitize_text_field( $args['wp-phone-message-name'] );
            $name_active = sanitize_text_field( $args['wp-phone-message-name-active'] );
            $name_active_widget = sanitize_text_field( $args['wp-phone-message-name-active-widget'] );
            $name_mandatory = sanitize_text_field( $args['wp-phone-message-name-mandatory'] );
            $address_place = sanitize_text_field( $args['wp-phone-message-address'] );
            $address_active = sanitize_text_field( $args['wp-phone-message-address-active'] );
            $address_active_widget = sanitize_text_field( $args['wp-phone-message-address-active-widget'] );
            $address_mandatory = sanitize_text_field( $args['wp-phone-message-address-mandatory'] );
            $phone_place = sanitize_text_field( $args['wp-phone-message-phone'] );
            $phone_active = sanitize_text_field( $args['wp-phone-message-phone-active'] );
            $phone_active_widget = sanitize_text_field( $args['wp-phone-message-phone-active-widget'] );
            $phone_mandatory = sanitize_text_field( $args['wp-phone-message-phone-mandatory'] );
            $email_place = sanitize_text_field( $args['wp-phone-message-email'] );
            $email_active = sanitize_text_field( $args['wp-phone-message-email-active'] );
            $email_active_widget = sanitize_text_field( $args['wp-phone-message-email-active-widget'] );
            $email_mandatory = sanitize_text_field( $args['wp-phone-message-email-mandatory'] );

            $fullPhoneNumber = (int) str_replace(' ', '', $prefix) . ltrim(str_replace(' ', '', $phone), '0') ;

            update_option( 'wp-phone-message-phone-number', $phone );
            update_option( 'wp-phone-message-phone-prefix', $prefix );
            update_option( 'wp-phone-message-full-phone-number', $fullPhoneNumber );
            update_option( 'wp-phone-message-title', $title );
            update_option( 'wp-phone-message-text', $text );
            update_option( 'wp-phone-message-button', $button );
            update_option( 'wp-phone-message-textarea', $textarea );
            update_option( 'wp-phone-message-name', $name_place );
            update_option( 'wp-phone-message-name-active', $name_active );
            update_option( 'wp-phone-message-name-active-widget', $name_active_widget );
            update_option( 'wp-phone-message-name-mandatory', $name_mandatory );
            update_option( 'wp-phone-message-address', $address_place );
            update_option( 'wp-phone-message-address-active', $address_active );
            update_option( 'wp-phone-message-address-active-widget', $address_active_widget );
            update_option( 'wp-phone-message-address-mandatory', $address_mandatory );
            update_option( 'wp-phone-message-phone', $phone_place );
            update_option( 'wp-phone-message-phone-active', $phone_active );
            update_option( 'wp-phone-message-phone-active-widget', $phone_active_widget );
            update_option( 'wp-phone-message-phone-mandatory', $phone_mandatory );
            update_option( 'wp-phone-message-email', $email_place );
            update_option( 'wp-phone-message-email-active', $email_active );
            update_option( 'wp-phone-message-email-active-widget', $email_active_widget );
            update_option( 'wp-phone-message-email-mandatory', $email_mandatory );

        }

        public function setMessage($message){
            update_option( 'wp-phone-message-form-message', $message);
        }

        public function getFullPhoneNumber(){
            return get_option( 'wp-phone-message-full-phone-number' );
        }
    }
}
