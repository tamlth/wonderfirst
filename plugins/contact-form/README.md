# Contact form plugin for WonderCMS
### Author: Herman Adema (http://ademafoto.nl/)

## Description
Plugin for adding a contact form to a WonderCMS website.

## Preview
![Plugin preview](/preview.jpg)


# Instructions
Before editing any files, create a copy of your current theme and set it as default. Do all the changes in the copied theme. **This will help you avoid a theme update overriding your contact form.**

## 1. Install plugin
1. Login to your WonderCMS website.
2. Click "Settings" and click "Plugins".
3. Find plugin in the list and click "install".
4. Plugin will be automatically activated.

## 2. In the installed plugin directory, open the "config" file and change the below values
 - ** Change "your.email@example.com" to your actual email**
 - ** Change "home" to page where you want the contact form displayed

```
emailAddress=your.email@example.com
page=home

```
Save changes to config file.


## 3. Put the code below in your custom theme.php to display the contact on the page specified in the config file

```
<?php echo contact_form(); ?>
```
Save changes to theme.php.
