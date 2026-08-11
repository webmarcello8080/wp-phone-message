<?php

if ( !function_exists( 'wp_phone_message_loader' ) ) {
	function wp_phone_message_settings_link( $links ) {
		$links[] = '<a href="' .
			admin_url( 'options-general.php?page=wp-phone-message-admin' ) .
			'">' . __('Settings', 'my-phone-message-wp') . '</a>';
		return $links;
	}
	add_filter('plugin_action_links_' . PLUGIN_WPM_BASENAME, 'wp_phone_message_settings_link');
}
