<?php
    if( current_user_can( 'edit_users' ) ){
    ?>
<div class="wrap">
      <h1 class="admin-page-title"><?= esc_html( get_admin_page_title() ); ?></h1>

      <?= WpPhoneMessageForm::getSettingsTabs($active_tab); ?>

      <form class="wp-phone-message-form" method="post" action="<?= esc_html( admin_url( 'admin-post.php' ) ); ?>?">

            <h1 class="admin-page-title"><?= __( 'Managing Form Generated on the Widget', 'wp-phone-message' ); ?></h1>

            <table class="form-table">
                  <tbody>
                        <tr>
                              <th>
                                    <label for="wp-phone-message-name-widget">Name Area in Widget :</label>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-name-active-widget"
                                          name="wp-phone-message-name-active-widget"
                                          <?= ( get_option('wp-phone-message-name-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-name-active-widget">Active Name Input Area in widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-name-mandatory-widget"
                                          name="wp-phone-message-name-mandatory-widget"
                                          <?= ( get_option('wp-phone-message-name-mandatory-widget') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-name-mandatory-widget">Name Input Area Mandatory in widget</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-name-widget" type="text" id="wp-phone-message-name-widget"
                                          value="<?= get_option('wp-phone-message-name-widget'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-name-widget-description">The Name input placeholder in widget.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-phone-widget">Phone Area in Widget Form: </label>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-phone-active-widget"
                                          name="wp-phone-message-phone-active-widget"
                                          <?= ( get_option('wp-phone-message-phone-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-phone-active-widget">Active Phone Input Area in widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-phone-mandatory-widget"
                                          name="wp-phone-message-phone-mandatory-widget"
                                          <?= ( get_option('wp-phone-message-phone-mandatory-widget') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-phone-mandatory-widget">Phone Input Area Mandatory in widget</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-phone-widget" type="text" id="wp-phone-message-phone-widget"
                                          value="<?= get_option('wp-phone-message-phone-widget'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-phone-widget-description">The Phone input placeholder in widget.</p>
                              </td>
                        </tr>
                        <tr>
                              <th>
                                    <label for="wp-phone-message-extra-widget">Extra Area in Widget Form: </label>
                                    <?= WpPhoneMessageForm::isPremiumOnly(); ?>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-extra-active-widget"
                                          name="wp-phone-message-extra-active-widget"
                                          <?= ( get_option('wp-phone-message-extra-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-extra-active-widget">Active Extra Input Area in widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-extra-mandatory-widget"
                                          name="wp-phone-message-extra-mandatory-widget"
                                          <?= ( get_option('wp-phone-message-extra-mandatory-widget') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-extra-mandatory-widget">Extra Input Area Mandatory in widget</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-extra-widget" type="text" id="wp-phone-message-extra-widget"
                                          value="<?= get_option('wp-phone-message-extra-widget'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-extra-widget-description">The Extra input placeholder in widget.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-email-widget">Email Address Area in Widget Form: </label>
                                    <?= WpPhoneMessageForm::isPremiumOnly(); ?>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-email-active-widget"
                                          name="wp-phone-message-email-active-widget"
                                          <?= ( get_option('wp-phone-message-email-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-email-active-widget">Active Email Address Input Area in widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-email-mandatory-widget"
                                          name="wp-phone-message-email-mandatory-widget"
                                          <?= ( get_option('wp-phone-message-email-mandatory-widget') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-email-mandatory-widget">Email Address Input Area Mandatory in widget</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-email-widget" type="text" id="wp-phone-message-email-widget"
                                          value="<?= get_option('wp-phone-message-email-widget'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-email-widget-description">The Email Address input placeholder in widget.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-dropdown-widget">Dropdown Area in Widget Form: </label>
                                    <?= WpPhoneMessageForm::isPremiumOnly(); ?>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-dropdown-active-widget"
                                          name="wp-phone-message-dropdown-active-widget"
                                          <?= ( get_option('wp-phone-message-dropdown-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-dropdown-active-widget">Active Dropdown Input Area in Widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-dropdown-mandatory-widget"
                                          name="wp-phone-message-dropdown-mandatory-widget"
                                          <?= ( get_option('wp-phone-message-dropdown-mandatory-widget') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-dropdown-mandatory-widget">Dropdown Input Area Mandatory</label>
                              </td>
                              <td>
                                    <textarea name="wp-phone-message-dropdown-widget" id="wp-phone-message-dropdown-widget"
                                          class="large-text code"
                                          rows="3"><?= get_option('wp-phone-message-dropdown-widget'); ?></textarea>
                                    <p class="description" id="wp-phone-message-dropdown-widget-description">The Dropdown input options. Please insert options separated by comma.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-textarea-widget">Text Area Placeholder in Widget Form: </label>
                                    <?= WpPhoneMessageForm::isPremiumOnly(); ?>
                              </th>
                              <td>
                                    <input name="wp-phone-message-textarea-widget" type="text" id="wp-phone-message-textarea-widget"
                                          value="<?= get_option('wp-phone-message-textarea-widget'); ?>"
                                          class="regular-text" />
                                    <p class="description" id="wp-phone-message-textarea-widget-description">The textarea placeholder.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-button-widget">Button Title in Widget Form: </label>
                              </th>
                              <td>
                                    <input name="wp-phone-message-button-widget" type="text" id="wp-phone-message-button-widget"
                                          value="<?= get_option('wp-phone-message-button-widget'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-button-widget-description">The Button Title will appear on the button of the message form.</p>
                              </td>
                        </tr>
                  </tbody>
            </table>

            <div class="form-messages">
                  <?php echo get_option('wp-phone-message-form-message'); ?>
                  <input type="hidden" id="wp-phone-message-full-phone-number"
                        value="<?= get_option('wp-phone-message-full-phone-number'); ?>" />
            </div>
            <input type="hidden" name="action" value="wp-phone-message-widget">
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
