<?php
    if( current_user_can( 'edit_users' ) ){
    ?>
<div class="wrap">
      <h1 class="admin-page-title"><?= esc_html( get_admin_page_title() ); ?></h1>

      <?= WpPhoneMessageForm::getSettingsTabs($active_tab); ?>

      <form  class="wp-phone-message-form" method="post" action="<?= esc_html( admin_url( 'admin-post.php' ) ); ?>?">

            <h1 class="admin-page-title"><?= __( 'Managing the Style of the Form', 'wp-phone-message' ); ?></h1>

            <div class="form-messages">
                  <?php echo get_option('wp-phone-message-form-message'); ?>
                  <input type="hidden" id="wp-phone-message-full-phone-number"
                        value="<?= get_option('wp-phone-message-full-phone-number'); ?>" />
            </div>
            <input type="hidden" name="action" value="wp-phone-message-style">
            <?php
                wp_nonce_field( 'wp-phone-message-settings-save', 'wp-phone-message-form-message' );
                submit_button();
            ?>
      </form>
</div><!-- .wrap -->
<?php
    }
    else {
      ?>
      <p><?php __("You are not authorized to perform this operation.", 'wp-phone-message') ?></p>
      <?php   
    }
