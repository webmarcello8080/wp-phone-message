<?php

if ( !class_exists( 'WpPhoneMessageForm' ) ) {

   class WpPhoneMessageForm {
      
      public static function isPremiumOnly() {
         if ( wp_phone_message_wpm_fs()->is_not_paying() ) {
            ?>
            <p class="description form-messages" >This Field is available only for Premium customers.
               <a href="<?= wp_phone_message_wpm_fs()->get_upgrade_url() ?>">
               <?= __('Upgrade Now!', 'wp-phone-message')  ?>
               </a>
            </p>
            <?php
         }
      }

   }
}