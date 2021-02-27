<?php
if ( !class_exists( 'WpPhoneMessageFrontend' ) ) {

   class WpPhoneMessageFrontend {
      
      private $pluginModel;

      public function __construct(){
         add_action( 'wp_enqueue_scripts', array( $this, 'shortcodeStyle' ) );

         $this->pluginModel = new WpPhoneMessageModel;
      }

      public function shortcodeStyle(){
         // select style based on setting
         switch( get_option('wp-phone-message-style') ){
            case 'dark': wp_enqueue_style('wp-phone-message-shortcode', PLUGIN_WPM_URL . 'css/shortcodeDark.min.css', array(), null, 'all' );
                  break;
            case 'simple': wp_enqueue_style('wp-phone-message-shortcode', PLUGIN_WPM_URL . 'css/shortcodeSimple.min.css', array(), null, 'all' );
                  break;
            case 'elegant': wp_enqueue_style('wp-phone-message-shortcode', PLUGIN_WPM_URL . 'css/shortcodeElegant.min.css', array(), null, 'all' );
                  break;
            case 'none': break;
            default: wp_enqueue_style('wp-phone-message-shortcode', PLUGIN_WPM_URL . 'css/shortcode.min.css', array(), null, 'all' );
         }
         
         if( get_option('wp-phone-message-css') ){
            wp_enqueue_style('wp-phone-message-custom-styles', PLUGIN_WPM_URL . 'css/custom_user.css', array(), null, 'all' );
         }

         wp_enqueue_script('wp-phone-message-shortcode', PLUGIN_WPM_URL . 'js/shortcode.min.js', array( 'jquery' ), '1.0.0', true );
         wp_localize_script( 'wp-phone-message-shortcode', 'wp_phone_message_data',
               array( 
                  'fullPhoneNumber' => $this->pluginModel->getFullPhoneNumber() ,
               )
         );
      }
   }
}