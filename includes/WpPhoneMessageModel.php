<?php
if ( !class_exists( 'WpPhoneMessageModel' ) ) {

    class WpPhoneMessageModel {

        public function setSettingsData($args){

            $phone = sanitize_text_field( $args['wp-phone-message-phone-number'] );
            $prefix = (int) str_replace(' ', '', sanitize_text_field( $args['wp-phone-message-phone-prefix'] ));
            $title = sanitize_text_field( $args['wp-phone-message-title'] );
            $fullPhoneNumber = (int) str_replace(' ', '', $prefix) . ltrim(str_replace(' ', '', $phone), '0') ;

            update_option( 'wp-phone-message-phone-number', $phone );
            update_option( 'wp-phone-message-phone-prefix', $prefix );
            update_option( 'wp-phone-message-full-phone-number', $fullPhoneNumber );
            update_option( 'wp-phone-message-title', $title );

        }

        public function setShortcodeData($args){
            // Shortcode Form Fields
            $text = sanitize_text_field( $args['wp-phone-message-text'] );
            $button = sanitize_text_field( $args['wp-phone-message-button'] );
            $name_place = sanitize_text_field( $args['wp-phone-message-name'] );
            $name_active = sanitize_text_field( $args['wp-phone-message-name-active'] );
            $name_mandatory = sanitize_text_field( $args['wp-phone-message-name-mandatory'] );
            $extra_place = sanitize_text_field( $args['wp-phone-message-extra'] );
            $extra_active = sanitize_text_field( $args['wp-phone-message-extra-active'] );
            $extra_mandatory = sanitize_text_field( $args['wp-phone-message-extra-mandatory'] );
            $phone_place = sanitize_text_field( $args['wp-phone-message-phone'] );
            $phone_active = sanitize_text_field( $args['wp-phone-message-phone-active'] );
            $phone_mandatory = sanitize_text_field( $args['wp-phone-message-phone-mandatory'] );
            $email_place = sanitize_text_field( $args['wp-phone-message-email'] );
            $email_active = sanitize_text_field( $args['wp-phone-message-email-active'] );
            $email_mandatory = sanitize_text_field( $args['wp-phone-message-email-mandatory'] );
            $dropdown_place = sanitize_text_field( $args['wp-phone-message-dropdown'] );
            $dropdown_active = sanitize_text_field( $args['wp-phone-message-dropdown-active'] );
            $dropdown_mandatory = sanitize_text_field( $args['wp-phone-message-dropdown-mandatory'] );
            $textarea = '';

            if ( wp_phone_message_wpm_fs()->is__premium_only() ) {
                $textarea = sanitize_text_field( $args['wp-phone-message-textarea'] );
            }

            // Shortcode Form Fields
            update_option( 'wp-phone-message-text', $text );
            update_option( 'wp-phone-message-button', $button );
            update_option( 'wp-phone-message-textarea', $textarea );
            update_option( 'wp-phone-message-name', $name_place );
            update_option( 'wp-phone-message-name-active', $name_active );
            update_option( 'wp-phone-message-name-mandatory', $name_mandatory );
            update_option( 'wp-phone-message-extra', $extra_place );
            update_option( 'wp-phone-message-extra-active', $extra_active );
            update_option( 'wp-phone-message-extra-mandatory', $extra_mandatory );
            update_option( 'wp-phone-message-phone', $phone_place );
            update_option( 'wp-phone-message-phone-active', $phone_active );
            update_option( 'wp-phone-message-phone-mandatory', $phone_mandatory );
            update_option( 'wp-phone-message-email', $email_place );
            update_option( 'wp-phone-message-email-active', $email_active );
            update_option( 'wp-phone-message-email-mandatory', $email_mandatory );
            update_option( 'wp-phone-message-dropdown', $dropdown_place );
            update_option( 'wp-phone-message-dropdown-active', $dropdown_active );
            update_option( 'wp-phone-message-dropdown-mandatory', $dropdown_mandatory );

        }

        public function setWidgetData($args){

            // widget form fields
            $button_widget = sanitize_text_field( $args['wp-phone-message-button-widget'] );
            $name_place_widget = sanitize_text_field( $args['wp-phone-message-name-widget'] );
            $name_active_widget = sanitize_text_field( $args['wp-phone-message-name-active-widget'] );
            $name_mandatory_widget = sanitize_text_field( $args['wp-phone-message-name-mandatory-widget'] );
            $extra_place_widget = sanitize_text_field( $args['wp-phone-message-extra-widget'] );
            $extra_active_widget = sanitize_text_field( $args['wp-phone-message-extra-active-widget'] );
            $extra_mandatory_widget = sanitize_text_field( $args['wp-phone-message-extra-mandatory-widget'] );
            $phone_place_widget = sanitize_text_field( $args['wp-phone-message-phone-widget'] );
            $phone_active_widget = sanitize_text_field( $args['wp-phone-message-phone-active-widget'] );
            $phone_mandatory_widget = sanitize_text_field( $args['wp-phone-message-phone-mandatory-widget'] );
            $email_place_widget = sanitize_text_field( $args['wp-phone-message-email-widget'] );
            $email_active_widget = sanitize_text_field( $args['wp-phone-message-email-active-widget'] );
            $email_mandatory_widget = sanitize_text_field( $args['wp-phone-message-email-mandatory-widget'] );
            $dropdown_place_widget = sanitize_text_field( $args['wp-phone-message-dropdown-widget'] );
            $dropdown_active_widget = sanitize_text_field( $args['wp-phone-message-dropdown-active-widget'] );
            $dropdown_mandatory_widget = sanitize_text_field( $args['wp-phone-message-dropdown-mandatory-widget'] );
            $textarea_widget = '';

            if ( wp_phone_message_wpm_fs()->is__premium_only() ) {
                $textarea_widget = sanitize_text_field( $args['wp-phone-message-textarea-widget'] );
            }

            // widget form fields
            update_option( 'wp-phone-message-button-widget', $button_widget );
            update_option( 'wp-phone-message-textarea-widget', $textarea_widget );
            update_option( 'wp-phone-message-name-widget', $name_place_widget );
            update_option( 'wp-phone-message-name-active-widget', $name_active_widget );
            update_option( 'wp-phone-message-name-mandatory-widget', $name_mandatory_widget );
            update_option( 'wp-phone-message-extra-widget', $extra_place_widget );
            update_option( 'wp-phone-message-extra-active-widget', $extra_active_widget );
            update_option( 'wp-phone-message-extra-mandatory-widget', $extra_mandatory_widget );
            update_option( 'wp-phone-message-phone-widget', $phone_place_widget );
            update_option( 'wp-phone-message-phone-active-widget', $phone_active_widget );
            update_option( 'wp-phone-message-phone-mandatory-widget', $phone_mandatory_widget );
            update_option( 'wp-phone-message-email-widget', $email_place_widget );
            update_option( 'wp-phone-message-email-active-widget', $email_active_widget );
            update_option( 'wp-phone-message-email-mandatory-widget', $email_mandatory_widget );
            update_option( 'wp-phone-message-dropdown-widget', $dropdown_place_widget );
            update_option( 'wp-phone-message-dropdown-active-widget', $dropdown_active_widget );
            update_option( 'wp-phone-message-dropdown-mandatory-widget', $dropdown_mandatory_widget );

        }

        public function setStyleData($args){
            $css = '';
            $style = '';
            
            if ( wp_phone_message_wpm_fs()->is__premium_only() ) {
                $css = $args['wp-phone-message-css'];
                $style = sanitize_text_field( $args['wp-phone-message-style'] );

                if($args['wp-phone-message-css']){
                    file_put_contents( PLUGIN_WPM_PATH . 'css/custom_user.css', $args['wp-phone-message-css']);
                }
            }

            update_option( 'wp-phone-message-css', $css );
            update_option( 'wp-phone-message-style', $style );
        }

        public function setMessage($message){
            update_option( 'wp-phone-message-form-message', $message);
        }

        public function getFullPhoneNumber(){
            return get_option( 'wp-phone-message-full-phone-number' );
        }
    }
}
