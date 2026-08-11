<?php

if ( !class_exists( 'WpPhoneMessageForm' ) ) {

   class WpPhoneMessageForm {
      
      public static function getSettingsTabs(string|null $active_tab): void {
         ?>
            <h2 class="nav-tab-wrapper">
               <a href="<?php echo admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=general_settings' ?>" class="nav-tab <?php echo $active_tab == 'general_settings' ? 'nav-tab-active' : ''; ?>">General Settings</a>
               <a href="<?php echo admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=shortcode_form' ?>" class="nav-tab <?php echo $active_tab == 'shortcode_form' ? 'nav-tab-active' : ''; ?>">ShortCode Form</a>
               <a href="<?php echo admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=widget_form' ?>" class="nav-tab <?php echo $active_tab == 'widget_form' ? 'nav-tab-active' : ''; ?>">Widget Form</a>
               <a href="<?php echo admin_url( 'options-general.php?page=wp-phone-message-admin' ) . '&tab=style' ?>" class="nav-tab <?php echo $active_tab == 'style' ? 'nav-tab-active' : ''; ?>">Style</a>
            </h2>
         <?php
      }

      public static function getDropdown(string|null $class, string|null $id, string|null $optionsList, string|null $mandatory): string{
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