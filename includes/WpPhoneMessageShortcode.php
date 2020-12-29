<?php
if ( !class_exists( 'WpPhoneMessageShortcode' ) ) {

    class WpPhoneMessageShortcode {

        private $pluginModel;

        public function __construct(){
            add_action( 'init', array( $this, 'registerShortcode' ));
            add_action( 'wp_enqueue_scripts', array( $this, 'shortcodeStyle' ) );

            $this->pluginModel = new WpPhoneMessageModel;
        }

        public function registerShortcode(){
            add_shortcode('wp-phone-message', array( $this, 'renderShortcode' ));
        }

        public function renderShortcode($atts){
            include_once( PLUGIN_WPM_PATH . 'views/shortcode-form.php' );
            return $shortcode_form;
        }

        public function shortcodeStyle(){
            wp_enqueue_style('wp-phone-message-shortcode', PLUGIN_WPM_URL . 'css/shortcode.min.css', array(), null, 'all' );
            wp_enqueue_script('wp-phone-message-shortcode', PLUGIN_WPM_URL . 'js/shortcode.min.js', array( 'jquery' ), '1.0.0', true );
            wp_localize_script( 'wp-phone-message-shortcode', 'wp_phone_message_data',
                array( 
                    'fullPhoneNumber' => $this->pluginModel->getFullPhoneNumber() ,
                )
            );
        }
    }
}
