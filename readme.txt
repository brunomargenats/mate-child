=== Mate ===
Contributors: Bruno Margenats
Requires at least: 5.2
Tested up to: 5.2.2
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Rename the child theme folder with your brand name (in lowercase).
2. Edit all theme info in style.css. Text Domain HAS to be the same name as your child theme folder. Let "Template: mate" unchanged.
3. Modify screenshot.png.
4. Activate your Child Theme.
5. If your website logo became a question mark «?», congratulations, your Child Theme is working!
6. Copy /config/ folder from Mate theme and paste it inside the Child Theme folder.
7. Edit config/config.php only changing TRUE/FALSE variables.
8. Edit config/variables.css values to reflect your brand colors and style.
9. Replace logo.svg inside assets/images/logo.svg.
10. Change --logo-width and --logo-height variables inside variables.css. This will control your logo area and will let all remaining space to your navigation.
11. For adding new CSS, you can use the main style.css. For adding new scripts, you can use scripts.js in assets/js. Scripts will load on footer.
12. All inline scripts and code that is usually loaded on <head></head> like google analytics, favicons, etc. goes in template-parts/header/head-inline-scripts.php
13. All inline scripts and code that is usually loaded before </body> goes in template-parts/footer/inner-footer-content.php
14. All JS and CSS files that we load through a function goes in functions/custom-styles-scripts.php. Some scripts like jQuery can be enqueued directly in this file.
15. Finally, try to copy as few files as possible from the parent theme and the more specific the files the better. This will let you update the Mate Theme without any problems.
16. Enjoy!

== Licenses ==

Barlow
License: Open Font License
Source: https://fonts.google.com/specimen/Barlow

Open Sans
License: Open Font License
Source: https://fonts.google.com/specimen/Open+Sans


== Changelog ==

Version 1.2
-------------------------
- New « go to anchor » javascript function. Now working on IE.
- Better instructions on functions.php

Version 1.1
-------------------------
- Better installation instructions
- Logo.svg is now different from parent theme.
- Footer/inner-footer-content.php added.

Version 1.0
-------------------------
- First release!
