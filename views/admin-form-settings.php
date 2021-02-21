<?php
    if( current_user_can( 'edit_users' ) ){
    ?>
<div class="wrap">
      <h1 class="admin-page-title"><?= esc_html( get_admin_page_title() ); ?></h1>

      <?= WpPhoneMessageForm::getSettingsTabs($active_tab); ?>

      <form  class="wp-phone-message-form" method="post" action="<?= esc_html( admin_url( 'admin-post.php' ) ); ?>?">

            <h1 class="admin-page-title"><?= __( 'WP Phone Message General Settings', 'wp-phone-message' ); ?></h1>

            <div class="form-description">
                  Using WP Phone Message is very simple and it doens't require any API Key or registration.<br />
                  Please complete the form below. International Prefix and Whatsapp phone number are required.<br />
                  In order to display the Whatsapp message form on your page please add the shortcode
                  <strong>[wp-phone-message]</strong> to your page/post content.<br />
            </div>

            <table class="form-table">
                  <tbody>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-phone-prefix">International Prefix* :</label>
                              </th>
                              <td>
                                    <input name="wp-phone-message-phone-prefix" type="text"
                                          id="wp-phone-message-phone-prefix"
                                          value="<?= get_option('wp-phone-message-phone-prefix'); ?>"
                                          class="regular-text" />
                                    <p class="description" id="wp-phone-message-phone-prefix-description">Insert the
                                          international prefix of your Whatsapp phone number.
                                    </p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-phone-number">
                                          Whatsapp phone number* :
                                    </label>
                              </th>
                              <td>
                                    <input name="wp-phone-message-phone-number" type="text"
                                          id="wp-phone-message-phone-number"
                                          value="<?= get_option('wp-phone-message-phone-number'); ?>"
                                          class="regular-text" />
                                    <p class="description" id="wp-phone-message-phone-number-description">Insert a valid
                                          Whatsapp number that will receive the messages.<br />
                                          <strong>Please be sure to insert a valid phone number without international prefix.</strong>
                                    </p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-title">
                                          Title :
                                    </label>
                              </th>
                              <td>
                                    <input name="wp-phone-message-title" type="text" id="wp-phone-message-title"
                                          value="<?= get_option('wp-phone-message-title'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-title-description">The title will appear
                                          on the top of the message form.</p>
                              </td>
                        </tr>
                  </tbody>
            </table>

            <div class="form-messages">
                  <?php echo get_option('wp-phone-message-form-message'); ?>
                  <input type="hidden" id="wp-phone-message-full-phone-number"
                        value="<?= get_option('wp-phone-message-full-phone-number'); ?>" />
            </div>
            <input type="hidden" name="action" value="wp-phone-message-settings">
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
