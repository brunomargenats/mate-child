=== Mate ===
Contributors: Bruno Margenats
Requires at least: 5.2
Tested up to: 5.2.2
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Copy config/config.php from Mate theme and paste it inside child theme. Then, edit the file if needed.
2. You can edit all variables or just replace some variables from Mate theme:
2a. All variables: Copy config/variables.css from Mate theme and paste it inside this child theme. Then, edit the file as needed.
2b. Some variables: Copy the variables that you need to change (inside config/variables.css in Mate theme) ant paste them inside style.css of this child theme.
3. Replace logo.svg inside assets/images/logo.svg. Don't forget to change --logo-width and --logo-height variables.
4. Edit all theme info in style.css. Let "Template: mate" unchanged.
5. Edit functions.php. Replace textdomain "mate_child" with the same textdomain you put in style.css.
6. Load your custom JS and CSS files inside functions/custom-styles-scripts.php. Some scripts like jQuery can be enqueued directly in this file.
7. For running your new scripts files or for some tiny functions, there's already a scripts.js in assets/js that you can edit. 
8. If needed, all inline scripts and codes like google analytics, favicons, etc. usually are loaded in the head. Use template-parts/header/head-inline-scripts.php for that.
9. If needed, all other inline scripts and codes that you can load in footer goes in template-parts/footer/inner-footer-content.php.
10. Modify screenshot.png.
11. Finally, try to copy as less files as possible from the parent theme. This will let you update it without problems.
12. Enjoy!

== Licenses ==

Barlow
License: Open Font License
Source: https://fonts.google.com/specimen/Barlow

Open Sans
License: Open Font License
Source: https://fonts.google.com/specimen/Open+Sans


== Changelog ==
Version 1.0
-------------------------
- First release!
