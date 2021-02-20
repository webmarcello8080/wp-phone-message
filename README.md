# wp-phone-message
Wordpress Plugin made to send a Whatsapp message from your Wordpress website

## Description

WP Phone Message is a Wordpress plugin that gives the possibility to render a simple message form that will open a Whatsapp chat on a new window. You will have the possibility to display the message form through shotcode in order to display the form inside a page or a post, or the possibility to display the message for through a widget.

### Settings include:
* Enter your international prefix (required)
* Enter a valid whatsapp phone number (required)
* Enter the form title
* Enter form text
* Enter form bottom text
* Possibility to add name field in shortcode form
* Possibility to add extra field in shortcode form
* Possibility to add phone number field in shortcode form
* Possibility to add email address field in shortcode form
* Possibility to add name field in widget form
* Possibility to add extra field in widget form
* Possibility to add phone number field in widget form
* Possibility to add email address field in widget form
* Making fields mandatory
* Possibility to set fields placeholder

### Widget Settings:
* Enter the form title
* Enter form text
* Possibility to add name field
* Possibility to add extra field
* Possibility to add phone number field
* Possibility to add email address field
* Making fields mandatory
* Possibility to set fields placeholder

The widget will send the whatsapp to the phone number set on the setting section.

## Installation.

Download the plugin in your computer, explode the ZIP file on your plugin folder in your wordpress website. 
On your wordpress dashboard, go to Plugins => Installed Plugins, search for WP Phone Message and activate the Plugin.

### Settings

The WP Phone Message setting are on the wordpress dashboard on Settings => WP Phone Message
WP Phone Message automatically with change your whatsapp phone number and your international prefix in order to make it suitable with the Whatsapp API.

Here is your WP Phone Message setting:

![WP Phone Message settings](http://webmarcello.co.uk/wp-content/uploads/2020/02/plugin-settings.jpg)

##  Shortcode
Using WP Phone Message is very simple and it doesn't require any API Key or registration.
Please complete the form below. International Prefix and Whatsapp phone number are required.
In order to display the Whatsapp message form on your page please add the shortcode [wp-phone-message] to your page/post content.

Here is your WP Phone Message form:

![WP Phone Message form](http://webmarcello.co.uk/wp-content/uploads/2020/02/plugin-message-form.jpg)

## Widget
You can also display the WP Phone Message form through a widget:

Here is your WP Phone Message widget form:

![WP Phone Message widget form](http://webmarcello.co.uk/wp-content/uploads/2020/02/plugin-widget.jpg)


Here is your WP Phone Message widget:

![WP Phone Message form](http://webmarcello.co.uk/wp-content/uploads/2020/02/plugin-widget-form.jpg)

## NOTE From Whatsapp API
How to add international contacts' phone numbers
To add an international contact's phone number:

* Open your phone's extra book.
* When adding the contact's phone number, start by entering a plus sign (+).
* Enter the country code, followed by the full phone number.
Note: A country code is a numerical prefix that must be entered before the full national phone number to make a call to another country. You can search online to find the country code you need.
For example, if a contact in the United States (country code "1") has the area code "408" and phone number "XXX-XXXX", you'd enter +1 408 XXX XXXX.

Note:
* Make sure to remove any leading 0s or special calling codes.
* If you meant to add a local (in country) phone number to your phone's extra book, enter the number as if you were calling your contact on the phone.
* All phone numbers in Argentina (country code "54") should have a "9" between the country code and area code. The prefix "15" must be removed so the final number will have 13 digits total: +54 9 XXX XXX XXXX
* Phone numbers in Mexico (country code "52") need to have "1" after "+52", even if they're Nextel numbers.
