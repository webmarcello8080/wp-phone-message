=== WP Phone Message ===
Contributors: webmarcello
Plugin Name: WP Phone Message
Tags: message, form, whatsapp, shortcode, widget, phone, text
Requires at least: 4.5.13
Tested up to: 7.0.3
Stable tag: trunk
Requires PHP: 8.0

Wordpress Plugin made to send a Whatsapp message from your Wordpress website.

== Description ==

WP Phone Message is a Wordpress plugin that gives the possibility to render a simple message form that will open a Whatsapp chat on a new window. You will have the possibility to display the message form through shotcode in order to display the form inside a page or a post, or the possibility to display the message for through a widget.

From February 2021, WP Phone Message becomes Premium, the basic functions of the plugin are still free but you have more options and more styles available if you go Premium

= Settings include: =
* Enter your international prefix (required)
* Enter a valid whatsapp phone number (required)
* Enter the form title

= Shortcode Settings =
* Enter form text
* Enter form bottom text
* Possibility to add name field in shortcode form 
* Possibility to add extra field in shortcode form 
* Possibility to add phone number field in shortcode form 
* Possibility to add email address field in shortcode form 
* Possibility to add a dropdown field in shortcode form 
* Making fields mandatory
* Possibility to set fields placeholder


= Widget Settings: =
* Enter the form title
* Enter form text
* Possibility to add name field
* Possibility to add extra field 
* Possibility to add phone number field
* Possibility to add email address field 
* Possibility to add a dropdown field 
* Making fields mandatory
* Possibility to set fields placeholder

The widget will send the whatsapp to the phone number set on the setting section.

= Styles: =
You can now choose from 4 different form styles.
You can also add your own CSS style that will be added to the code as file.

== Settings ==

The WP Phone Message setting are on the wordpress dashboard on Settings => WP Phone Message.
WP Phone Message automatically with change your whatsapp phone number and your international prefix in order to make it suitable with the Whatsapp API.

== Shortcode ==

Using WP Phone Message is very simple and it doesn't require any API Key or registration. 
Please complete the form below. International Prefix and Whatsapp phone number are required. 
In order to display the Whatsapp message form on your page please add the shortcode [wp-phone-message] to your page/post content.

== Widget ==

You can also display the WP Phone Message form through a widget

== NOTE From Whatsapp API ==

How to add international contacts' phone numbers To add an international contact's phone number:

* Open your phone's extra book.
* When adding the contact's phone number, start by entering a plus sign (+).
* Enter the country code, followed by the full phone number. Note: A country code is a numerical prefix that must be entered before the full national phone number to make a call to another country. You can search online to find the country code you need. For example, if a contact in the United States (country code "1") has the area code "408" and phone number "XXX-XXXX", you'd enter +1 408 XXX XXXX.

Note:

* Make sure to remove any leading 0s or special calling codes.
* If you meant to add a local (in country) phone number to your phone's extra book, enter the number as if you were calling your contact on the phone.
* All phone numbers in Argentina (country code "54") should have a "9" between the country code and area code. The prefix "15" must be removed so the final number will have 13 digits total: +54 9 XXX XXX XXXX
* Phone numbers in Mexico (country code "52") need to have "1" after "+52", even if they're Nextel numbers.


== Installation ==

[You can also download the plugin from here](https://github.com/webmarcello8080/wp-phone-message "wp-phone-message") 

e.g.

1. Upload the plugin files to the `/wp-content/plugins/wp-phone-message` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings -> WP Phone Message screen to configure the plugin
1. Insert your International Prefix and your whatsapp phone number and click on "Save Changes"


== Changelog ==

= 1.1.0 =
* New CSS style for 4 type of designs
* Create own style and add own CSS on backend
* Minified CSS/custom CSS and JS 

= 1.0.7 =
* Send phone number to JS through wp_localize

= 1.0.6 =
* Cleaning phone number and international prefix
* Managing error messages on admin area

= 1.0.5 =
* Possibility to add name field in shortcode form
* Possibility to add extra field in shortcode form
* Possibility to add phone number field in shortcode form
* Possibility to add email address field in shortcode form
* Possibility to add name field in widget form
* Possibility to add extra field in widget form
* Possibility to add phone number field in widget form
* Possibility to add email address field in widget form

= 1.0.4 =
* JS updated 
* admin validation fixed

= 1.0.3 =
* Possibility to add name field
* Possibility to add extra field
* Possibility to add phone number field
* Possibility to add email address field
* Making fields mandatory
* Possibility to set fields placeholder

= 1.0.2 =
* Minified CSS and JS files

= 1.0.1 =
* Fixing compatibility issue with Wordpress 5.3.x 

= 1.0.0 =
* Creating settings from
* Form validation
* Creating shortcode
* Creating widget 

== Frequently Asked Questions ==


== Screenshots ==

1. WP Phone Message setting
2. WP Phone Message form
3. WP Phone Message widget form
4. WP Phone Message widget

== Changelog ==


== Upgrade Notice ==
