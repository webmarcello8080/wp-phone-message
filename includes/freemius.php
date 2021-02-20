<?php

if ( ! function_exists( 'wp_phone_message_wpm_fs' ) ) {
    // Create a helper function for easy SDK access.
    function wp_phone_message_wpm_fs() {
        global $wpm_fs;

        if ( ! isset( $wpm_fs ) ) {
            // Include Freemius SDK.
            require_once PLUGIN_WPM_PATH . 'freemius/start.php';

            $wpm_fs = fs_dynamic_init( array(
                'id'                  => '7845',
                'slug'                => 'wp-phone-message',
                'type'                => 'plugin',
                'public_key'          => 'pk_96faea554c5400ff00a15b200fd41',
                'is_premium'          => true,
                'premium_suffix'      => 'Premium',
                // If your plugin is a serviceware, set this option to false.
                'has_premium_version' => true,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                'menu'                => array(
                    'slug'           => 'wp-phone-message-admin',
                    'support'        => false,
                    'parent'         => array(
                        'slug' => 'options-general.php',
                    ),
                ),
               //  // Set the SDK to work in a sandbox mode (for development & testing).
               //  // IMPORTANT: MAKE SURE TO REMOVE SECRET KEY BEFORE DEPLOYMENT.
               //  'secret_key'          => 'sk_QJm%p>es2*s^D5$>_i)@ae[7W*-jz',
            ) );
        }

        return $wpm_fs;
    }

    // Init Freemius.
    wp_phone_message_wpm_fs();
    // Signal that SDK was initiated.
    do_action( 'wpm_fs_loaded' );
}
