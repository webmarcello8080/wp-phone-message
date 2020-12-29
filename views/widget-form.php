<div class="whatapp-wrapper">
    <form class="whatapp-form" id="whatapp-widget-form">
        <p class="whatapp-text"><?= $text; ?></p>
        <?php
        if(get_option('wp-phone-message-name-active-widget')){
            echo '<input type="text" class="wp-phone-message-name" id="wp-phone-message-widget-name" placeholder="' . get_option('wp-phone-message-name') . '"  ' . get_option('wp-phone-message-name-mandatory') . ' />';
        }
        if(get_option('wp-phone-message-address-active-widget')){
            echo '<input type="text" class="wp-phone-message-address" id="wp-phone-message-widget-address" placeholder="' . get_option('wp-phone-message-address') . '"  ' . get_option('wp-phone-message-address-mandatory') . ' />';
        }
        if(get_option('wp-phone-message-phone-active-widget')){
            echo '<input type="text" class="wp-phone-message-phone" id="wp-phone-message-widget-phone" placeholder="' . get_option('wp-phone-message-phone') . '"  ' . get_option('wp-phone-message-phone-mandatory') . ' />';
        }
        if(get_option('wp-phone-message-email-active-widget')){
            echo '<input type="email" class="wp-phone-message-email" id="wp-phone-message-widget-email" placeholder="' . get_option('wp-phone-message-email') . '"  ' . get_option('wp-phone-message-email-mandatory') . ' />';
        }
        ?>
        <textarea class="wp-phone-message-message" id="wp-phone-message-widget-message" placeholder="<?= get_option('wp-phone-message-textarea'); ?>" required></textarea>
        <p class="whatapp-error" id="whatapp-widget-error" ></p>
        <input type="submit" class="wp-phone-message-button" id="wp-phone-message-widget-button" value="<?= get_option('wp-phone-message-button'); ?>" />
    </form>
</div>