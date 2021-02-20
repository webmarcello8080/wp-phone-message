<div class="whatapp-wrapper">
    <form class="whatapp-form" id="whatapp-widget-form">
        <p class="whatapp-text"><?= $text; ?></p>
        <?php
        if(get_option('wp-phone-message-name-active-widget')){
            echo '<input type="text" class="wp-phone-message-name" id="wp-phone-message-widget-name" placeholder="' . get_option('wp-phone-message-name-widget') . '"  ' . get_option('wp-phone-message-name-mandatory-widget') . ' />';
        }
        if(get_option('wp-phone-message-address-active-widget')){
            echo '<input type="text" class="wp-phone-message-address" id="wp-phone-message-widget-address" placeholder="' . get_option('wp-phone-message-address-widget') . '"  ' . get_option('wp-phone-message-address-mandatory-widget') . ' />';
        }
        if(get_option('wp-phone-message-phone-active-widget')){
            echo '<input type="text" class="wp-phone-message-phone" id="wp-phone-message-widget-phone" placeholder="' . get_option('wp-phone-message-phone-widget') . '"  ' . get_option('wp-phone-message-phone-mandatory-widget') . ' />';
        }
        if(get_option('wp-phone-message-email-active-widget')){
            echo '<input type="email" class="wp-phone-message-email" id="wp-phone-message-widget-email" placeholder="' . get_option('wp-phone-message-email-widget') . '"  ' . get_option('wp-phone-message-email-mandatory-widget') . ' />';
        }
        ?>
        <textarea class="wp-phone-message-message" id="wp-phone-message-widget-message" placeholder="<?= get_option('wp-phone-message-textarea-widget'); ?>" required></textarea>
        <p class="whatapp-error" id="whatapp-widget-error" ></p>
        <input type="submit" class="wp-phone-message-button" id="wp-phone-message-widget-button" value="<?= get_option('wp-phone-message-button-widget'); ?>" />
    </form>
</div>