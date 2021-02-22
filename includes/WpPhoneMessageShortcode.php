<?php
if ( !class_exists( 'WpPhoneMessageShortcode' ) ) {

    class WpPhoneMessageShortcode {

        public function __construct(){
            add_action( 'init', array( $this, 'registerShortcode' ));
        }

        public function registerShortcode(){
            add_shortcode('wp-phone-message', array( $this, 'renderShortcode' ));
        }

        public function renderShortcode($atts){
            include_once( PLUGIN_WPM_PATH . 'views/shortcode-form.php' );
            return $shortcode_form;
        }
    }
}
