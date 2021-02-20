<?php
if ( !class_exists( 'WpPhoneMessageAdmin' ) ) {

    class WpPhoneMessageAdmin {

        private $model;

        public function __construct(){
            add_action( 'admin_menu', array( $this, 'adminMenu' ) );
            add_action( 'admin_post_wp-phone-message-form-message', array( $this, 'adminSave' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'adminStyle' ) );
            $this->model = new WpPhoneMessageModel;
        }

        public function adminMenu() {
            add_options_page(
                'WP Phone Message Settings',
                'WP Phone Message',
                'manage_options',
                'wp-phone-message-admin',
                array( $this, 'adminPage' ),
                91
            );
        }

        public function adminPage() {
            //show the form
            include_once( PLUGIN_WPM_PATH . 'views/admin-form.php' );
        }
        
        public function adminSave(){
            // save data
            if( ( $_POST['wp-phone-message-phone-number'] ) && ( $_POST['wp-phone-message-phone-prefix'] ) ) {
                $_POST['wp-phone-message-phone-number'] = $this->cleanPhoneNumber($_POST);
                $this->model->setData($_POST);
                $this->model->setMessage('Settings saved.');
            }
            else{
                $this->model->setData($_POST);
                $this->model->setMessage('International prefix and Whatsapp phone number are required.');
            }

            $this->adminRedirect();
        }

        private function adminRedirect() {
            // redirect at the end of the process
            if(isset( $_POST['_wp_http_referer'] )){
                // redirect the user to the appropriate page
                $url = sanitize_text_field(
                    wp_unslash( $_POST['_wp_http_referer'] ) // Input var okay.
                );
                // Finally, redirect back to the admin page.
                wp_safe_redirect( urldecode( $url ) );
                exit;
            }
            else{
                wp_safe_redirect( urldecode( '/wp-admin' ) );
                exit;
            }
        }

        public function adminStyle() {
            wp_enqueue_style('wp-phone-message-intel-tel', PLUGIN_WPM_URL . 'js/intl-tel-input/build/css/intlTelInput.css', array(), null, 'all' );
            wp_enqueue_script('wp-phone-message-intel-tel', PLUGIN_WPM_URL . 'js/intl-tel-input/build/js/intlTelInput.js' );
            wp_enqueue_style('wp-phone-message-admin', PLUGIN_WPM_URL . 'css/admin.min.css', array(), null, 'all' );
            wp_enqueue_script('wp-phone-message-admin', PLUGIN_WPM_URL . 'js/admin.min.js', array( 'jquery' ), '1.0.0', true );
        }

        private function adminCallback() { // Section Callback
            echo '<p>This section is part of WP Phone Message Plugin</p>';
        }
        
        private function cleanPhoneNumber($args){
            $prefix = str_replace(' ', '', sanitize_text_field( $args['wp-phone-message-phone-prefix'] ));
            $phone = sanitize_text_field( $args['wp-phone-message-phone-number'] );

            if(is_numeric(substr($prefix, 0, 1))){
                $prefix = '+'. $prefix;
            }
           
            $phone = preg_replace('/^' . preg_quote($prefix, '/') . '/', '0', $phone);
           
            return $phone;
        }
    }
}
