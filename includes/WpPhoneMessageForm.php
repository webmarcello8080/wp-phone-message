<?php

if ( !class_exists( 'WpPhoneMessageForm' ) ) {

   class WpPhoneMessageForm {
      
   public static function isPremiumOnly() {
      ?>
      <p class="description form-messages" >This Field is available only for Premium customers.</p>
      <?php
   }

   }
}