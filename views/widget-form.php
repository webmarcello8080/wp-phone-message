<div class="whatapp-wrapper">
    <form class="whatapp-form" id="whatapp-widget-form">
        <p class="whatapp-text"><?= $text; ?></p>
        <?php
        if(get_option('wp-phone-message-name-active-widget')){
            echo '<input type="text" class="wp-phone-message-name" id="wp-phone-message-widget-name" placeholder="' . get_option('wp-phone-message-name-widget') . '"  ' . get_option('wp-phone-message-name-mandatory-widget') . ' />';
        }
        if(get_option('wp-phone-message-phone-active-widget')){
            echo '<input type="tel" class="wp-phone-message-phone" id="wp-phone-message-widget-phone" placeholder="' . get_option('wp-phone-message-phone-widget') . '"  ' . get_option('wp-phone-message-phone-mandatory-widget') . ' />';
        }
        if ( wp_phone_message_wpm_fs()->is__premium_only() ) {
            if(get_option('wp-phone-message-extra-active-widget') && wp_phone_message_wpm_fs()->is_plan('premium')){
                echo '<input type="text" class="wp-phone-message-extra" id="wp-phone-message-widget-extra" placeholder="' . get_option('wp-phone-message-extra-widget') . '"  ' . get_option('wp-phone-message-extra-mandatory-widget') . ' />';
           }
            if(get_option('wp-phone-message-email-active-widget') && wp_phone_message_wpm_fs()->is_plan('premium')){
                echo '<input type="email" class="wp-phone-message-email" id="wp-phone-message-widget-email" placeholder="' . get_option('wp-phone-message-email-widget') . '"  ' . get_option('wp-phone-message-email-mandatory-widget') . ' />';
            }
            if(get_option('wp-phone-message-dropdown-active-widget') && wp_phone_message_wpm_fs()->is_plan('premium')){
                echo WpPhoneMessageForm::getDropdown('wp-phone-message-dropdown', 'wp-phone-message-widget-dropdown', get_option('wp-phone-message-dropdown-widget'), get_option('wp-phone-message-dropdown-mandatory-widget'));
            }
        }
        ?>
        <textarea class="wp-phone-message-message" id="wp-phone-message-widget-message" placeholder="<?= get_option('wp-phone-message-textarea-widget'); ?>" required></textarea>
        <p class="whatapp-error" id="whatapp-widget-error" ></p>
        <input type="submit" class="wp-phone-message-button" id="wp-phone-message-widget-button" value="<?= get_option('wp-phone-message-button-widget'); ?>" />
    </form>
</div>