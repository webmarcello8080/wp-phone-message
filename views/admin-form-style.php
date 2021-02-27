<?php
    if( current_user_can( 'edit_users' ) ){
    ?>
<div class="wrap">
      <h1 class="admin-page-title"><?= esc_html( get_admin_page_title() ); ?></h1>

      <?= WpPhoneMessageForm::getSettingsTabs($active_tab); ?>

      <form  class="wp-phone-message-form" method="post" action="<?= esc_html( admin_url( 'admin-post.php' ) ); ?>?">

            <h1 class="admin-page-title"><?= __( 'Managing the Style of the Form', 'wp-phone-message' ); ?></h1>

            <table class="form-table">
                  <tbody>
                        <tr>
                              <th>
                                    <label for="wp-phone-message-style">Select the form Style :</label>
                                    <?= WpPhoneMessageForm::isPremiumOnly(); ?>
                              </th>
                              <td>
                                    <label>
                                          <input type="radio" name="wp-phone-message-style" value="" <?= (get_option('wp-phone-message-style')== '') ?  "checked" : "" ;  ?>  />
                                          <span class="date-time-text format-i18n">Default Style</span>
                                    </label>
                                    <label>
                                          <input type="radio" name="wp-phone-message-style" value="dark" <?= (get_option('wp-phone-message-style')== 'dark') ?  "checked" : "" ;  ?>  />
                                          <span class="date-time-text format-i18n">Dark Style</span>
                                    </label>
                                    <label>
                                          <input type="radio" name="wp-phone-message-style" value="simple" <?= (get_option('wp-phone-message-style')== 'simple') ?  "checked" : "" ;  ?>  />
                                          <span class="date-time-text format-i18n">Simple Style</span>
                                    </label>
                                    <label>
                                          <input type="radio" name="wp-phone-message-style" value="elegant" <?= (get_option('wp-phone-message-style')== 'elegant') ?  "checked" : "" ;  ?>  />
                                          <span class="date-time-text format-i18n">Elegant Style</span>
                                    </label>
                                    <label>
                                          <input type="radio" name="wp-phone-message-style" value="none" <?= (get_option('wp-phone-message-style')== 'none') ?  "checked" : "" ;  ?>  />
                                          <span class="date-time-text format-i18n">Your Website Style</span>
                                    </label>
                              </td>
                        </tr>
                        <tr>
                              <th>
                                    <label for="wp-phone-message-css">Add extra CSS :</label>
                                    <?= WpPhoneMessageForm::isPremiumOnly(); ?>
                              </th>
                              <td>
                                    <textarea name="wp-phone-message-css" id="wp-phone-message-css"
                                          class="large-text code"
                                          rows="3"><?= get_option('wp-phone-message-css'); ?></textarea>
                                    <p class="description" id="wp-phone-message-css-description">Write your own CSS to change the design of the form.</p>
                              </td>
                        </tr>
                  </tbody>
            </table>

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
