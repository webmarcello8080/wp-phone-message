<?php

    if( current_user_can( 'edit_users' ) ){
    ?>
<div class="wrap">
      <h1 class="admin-page-title"><?= esc_html( get_admin_page_title() ); ?></h1>

      <form method="post" action="<?= esc_html( admin_url( 'admin-post.php' ) ); ?>">

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
                                    <label for="wp-phone-message-phone-prefix">
                                          International Prefix* :
                                    </label>
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
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-text">
                                          Text :
                                    </label>
                              </th>
                              <td>
                                    <textarea name="wp-phone-message-text" id="wp-phone-message-text"
                                          class="large-text code"
                                          rows="3"><?= get_option('wp-phone-message-text'); ?></textarea>
                                    <p class="description" id="wp-phone-message-text-description">The text will appear
                                          on the top of the message form.</p>
                              </td>
                        </tr>
                  </tbody>
            </table>

            <h1 class="admin-page-title"><?= __( 'Managing Form' ); ?></h1>

            <table class="form-table">
                  <tbody>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-name">
                                          Name Area :
                                    </label>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-name-active"
                                          name="wp-phone-message-name-active"
                                          <?= ( get_option('wp-phone-message-name-active') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-name-active">Active Name Input Area in
                                          shortcode</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-name-active-widget"
                                          name="wp-phone-message-name-active-widget"
                                          <?= ( get_option('wp-phone-message-name-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-name-active-widget">Active Name Input Area in
                                          widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-name-mandatory"
                                          name="wp-phone-message-name-mandatory"
                                          <?= ( get_option('wp-phone-message-name-mandatory') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-name-mandatory">Name Input Area Mandatory</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-name" type="text" id="wp-phone-message-name"
                                          value="<?= get_option('wp-phone-message-name'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-name-description">The Name area input
                                          placeholder.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-address">
                                          Address Area :
                                    </label>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-address-active"
                                          name="wp-phone-message-address-active"
                                          <?= ( get_option('wp-phone-message-address-active') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-address-active">Active Address Input Area in
                                          shortcode</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-address-active-widget"
                                          name="wp-phone-message-address-active-widget"
                                          <?= ( get_option('wp-phone-message-address-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-address-active-widget">Active Address Input Area in
                                          widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-address-mandatory"
                                          name="wp-phone-message-address-mandatory"
                                          <?= ( get_option('wp-phone-message-address-mandatory') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-address-mandatory">Address Input Area Mandatory</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-address" type="text" id="wp-phone-message-address"
                                          value="<?= get_option('wp-phone-message-address'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-address-description">The Address area
                                          input placeholder.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-phone">
                                          Phone Area :
                                    </label>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-phone-active"
                                          name="wp-phone-message-phone-active"
                                          <?= ( get_option('wp-phone-message-phone-active') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-phone-active">Active Phone Input Area in
                                          shortcode</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-phone-active-widget"
                                          name="wp-phone-message-phone-active-widget"
                                          <?= ( get_option('wp-phone-message-phone-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-phone-active-widget">Active Phone Input Area in
                                          widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-phone-mandatory"
                                          name="wp-phone-message-phone-mandatory"
                                          <?= ( get_option('wp-phone-message-phone-mandatory') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-phone-mandatory">Phone Input Area Mandatory</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-phone" type="text" id="wp-phone-message-phone"
                                          value="<?= get_option('wp-phone-message-phone'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-phone-description">The Phone area input
                                          placeholder.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-email">
                                          Email Address Area :
                                    </label>
                              </th>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-email-active"
                                          name="wp-phone-message-email-active"
                                          <?= ( get_option('wp-phone-message-email-active') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-email-active">Active Email Address Input Area in
                                          shortcode</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-email-active-widget"
                                          name="wp-phone-message-email-active-widget"
                                          <?= ( get_option('wp-phone-message-email-active-widget') ? 'checked' : '') ?>
                                          value="1">
                                    <label for="wp-phone-message-email-active-widget">Active Email Address Input Area in
                                          widget</label>
                              </td>
                              <td>
                                    <input type="checkbox" id="wp-phone-message-email-mandatory"
                                          name="wp-phone-message-email-mandatory"
                                          <?= ( get_option('wp-phone-message-email-mandatory') ? 'checked' : '') ?>
                                          value="required">
                                    <label for="wp-phone-message-email-mandatory">Email Address Input Area
                                          Mandatory</label>
                              </td>
                              <td>
                                    <input name="wp-phone-message-email" type="text" id="wp-phone-message-email"
                                          value="<?= get_option('wp-phone-message-email'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-email-description">The Email Address
                                          area input placeholder.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-textarea">
                                          Text Area Placeholder :
                                    </label>
                              </th>
                              <td>
                                    <input name="wp-phone-message-textarea" type="text" id="wp-phone-message-textarea"
                                          value="<?= get_option('wp-phone-message-textarea'); ?>"
                                          class="regular-text" />
                                    <p class="description" id="wp-phone-message-textarea-description">The textarea
                                          placeholder.</p>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">
                                    <label for="wp-phone-message-title">
                                          Button Title :
                                    </label>
                              </th>
                              <td>
                                    <input name="wp-phone-message-button" type="text" id="wp-phone-message-button"
                                          value="<?= get_option('wp-phone-message-button'); ?>" class="regular-text" />
                                    <p class="description" id="wp-phone-message-button-description">The Button Title
                                          will appear on the button of the message form.</p>
                              </td>
                        </tr>
                  </tbody>
            </table>

            <div class="form-messages">
                  <?php echo get_option('wp-phone-message-form-message'); ?>
                  <input type="hidden" id="wp-phone-message-full-phone-number"
                        value="<?= get_option('wp-phone-message-full-phone-number'); ?>" />
            </div>

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
<p> <?php __("You are not authorized to perform this operation.") ?> </p>
<?php   
    }
