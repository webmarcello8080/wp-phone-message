<?php

if ( !class_exists( 'WpPhoneMessageForm' ) ) {

   class WpPhoneMessageForm {
      
      public static function isPremiumOnly() {
         if ( wp_phone_message_wpm_fs()->is__premium_only() ) {
            if(!wp_phone_message_wpm_fs()->is_plan('premium')){
               ?>
               <p class="description form-messages" >This Field is available only for Premium customers.</p>
               <?php
            }
         }
      }

   }
}