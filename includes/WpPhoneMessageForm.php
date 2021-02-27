<?php

if ( !class_exists( 'WpPhoneMessageForm' ) ) {

   class WpPhoneMessageForm {
      
      public static function isPremiumOnly() {
         if ( wp_phone_message_wpm_fs()->is_not_paying() ) {
            ?>
            <p class="description form-messages" >This Option is available only for Premium customers.
               <a href="<?= wp_phone_message_wpm_fs()->get_upgrade_url() ?>">
               <?= __('Upgrade Now!', 'wp-phone-message')  ?>
               </a>
            </p>
            <?php
         }
      }

      public static function getSettingsTabs($active_tab){
         ?>
            <h2 class="nav-tab-wrapper">
               <a href="<?= admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=general_settings' ?>" class="nav-tab <?= $active_tab == 'general_settings' ? 'nav-tab-active' : ''; ?>">General Settings</a>
               <a href="<?= admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=shortcode_form' ?>" class="nav-tab <?= $active_tab == 'shortcode_form' ? 'nav-tab-active' : ''; ?>">ShortCode Form</a>
               <a href="<?= admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=widget_form' ?>" class="nav-tab <?= $active_tab == 'widget_form' ? 'nav-tab-active' : ''; ?>">Widget Form</a>
               <a href="<?= admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=style' ?>" class="nav-tab <?= $active_tab == 'style' ? 'nav-tab-active' : ''; ?>">Style</a>
            </h2>
         <?php
      }

      public static function getDropdown($class, $id, $optionsList, $mandatory){
         $arrayOptions = explode(',', $optionsList);
         $arrayOptions = array_map('trim',$arrayOptions);

         $output = '<select class="' . $class . '" id="' . $id . '" ' . $mandatory . '>';
         $output .= '<option value=""></option>';
         foreach($arrayOptions as $option){
            $output .= '<option value="' . $option . '">' . $option . '</option>';
         }
         $output .= '</select>';

         return $output;
      }
   }
}