<?php
if ( !class_exists( 'WpPhoneMessageFrontend' ) ) {

   class WpPhoneMessageFrontend {
      
      private $pluginModel;

      public function __construct(){
         add_action( 'wp_enqueue_scripts', array( $this, 'shortcodeStyle' ) );
         add_action('wp_head', array( $this, 'addCustomCss' ));

         $this->pluginModel = new WpPhoneMessageModel;
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

      public function addCustomCss(){
         if( get_option('wp-phone-message-css') ){
            echo '<style>';
            echo get_option('wp-phone-message-css');
            echo '</style>';
         }
      }
   }
}