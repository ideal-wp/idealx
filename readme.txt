=== idealx ===
Contributors : mohamedtaman
Tested up to: 5.6
Requires at least : 5.0
Requires PHP: 7.0
Stable tag: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

idealx is a fast, fully customization & beautiful WordPress theme suitable for blog, business website. 

== Features ==
* Woocommerce
* Translation-Ready
* Responsive
* Google Fonts
* Unlimited Colors
* Options Panel

== Description ==

idealx is a fast, fully customizable & beautiful WordPress theme suitable for blog, business website, 
It offers special features and templates so it works perfectly with all page builders like Elementor, Beaver Builder, Visual Composer, SiteOrigin, Divi, etc. Some of the other features: 
 # Responsive # RTL & Translation Ready  # Regularly updated # Designed, Developed, Maintained & Supported by the theme Developer. 

== Installation ==

- From within WordPress -
1. Visit "Appearance > Themes > Add New"
2. Search for "idealx"
3. Install and activate

== Frequently Asked Questions ==

= Is there theme documentation? =

Yes, go here: https://idealx.mtaman.com/docs/  

= Is there demo content available? =

Yes, go here: https://idealx.mtaman.com 

= Is there a free support form for this theme? =

Yes, go here: https://wordpress.org/support/theme/idealx

== Changelog ==
= Theme Name: idealx =
v1.0.8

Changed: Place off skip link to after body tag open.
Add : css outline: auto to buttons in the hero.

v1.0.7

fix: taman.js, some vars/functions are in the global scope changed vars  idealx_ *.
fix: Links within content must be underlined added css a text-decoration: underline.
fix: Skip link - okish it should be focused before the header hero.
Changed : Screenshot 

v1.0.6

fix: admin browser error wp Color Picker
Fix: Pressing tab key after the last item of menu focus should be on the cancel button

v1.0.5

-Fix: On format-gallery.php line 54 Found This <ul class="uk-slideshow-items uk-height-viewport="min-height: 300"">
( uk-height-viewport is an attribute it will not be inside class )
-fix: Found This: if ( is_singular() && get_option( 'thread_comments' ) )
Please also check comments is open
-fix:Pressing tab key after the last item of menu focus should be on the cancel button
-changed : Theme URI


v1.0.4

1-  Removing: The youtube video on the theme's admin page
2-  Fix: console issues: Failed to load resource
3-  Fix: removing: custom-header & Background  Header Text Color, Header Image, Background Image don't work.
4-  Fix: herro-section.php: L32, changed esc_html to esc_url.
5-  Fix:   footer/footer.php L38, date_i18n
6-  Fix: format-image.php
          L79, that's an attribute echang to esc_attr
          L75,94, that's an echoing function
7-  Fix: the_permalink(,the_time(, the_title( to get_ version
8-  Fix: ends get_posts with wp_reset_postdata()
9-  Fix: theme-setup.php
                L49-53, move that in after_setup_theme
                L153 Please add: if ( is_admin() ) return $length;
                L190,217 that's basically the_posts_pagination
                L385, escape
10-  Fix: admin-enqueue.php, js-dynamic.php
don't enqueue the script on all the admin pages, only where it's needed. admin_enqueue_scripts offers a param to check the current view.
11- Fix:  provide original files of minification scripts & files in assets folder  
12-  Fix: header.php  the pingback_url is conditional, adding  is_singular() && pings_open( get_queried_object() ) and escape it.
13- Fix: Skip link - not ok
14- Fix: Keyboard navigation - not ok
14- Update: ScreenShot img
14- Update: Theme URI
14- Update: Author URI
14- Update: Translation POT file

v1.0.3
- new: add new blog layout ( standard)
- Fix: Repair and fix all WordPress theme requirements. before theme Becoming review and become live.

v1.0.2
- Disabled: Post Formats
- Disabled: Redirect to welcome page

v1.0.1
- new: add editor style
- Improvement: 404 Page
- Improvement: Update Ttemplate files name
- Improvement: output Security escaping function 
- Fix: javascript file not load

v1.0.0
- Initial releas

== License ==

idealx WordPress Theme, Copyright 2020 idealx .
idealx is distributed under the terms of the GNU GPL.

idealx is based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc.
Underscores is distributed under the terms of the GNU GPL v2 or later.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

Integral bundles the following third-party resources:

###
= uikit =
uikit have been helped along thanks to the fine work of.
Source: (https://getuikit.com/),
https://github.com/uikit/uikit.git
Licensed under MIT ( https://github.com/uikit/uikit/blob/develop/LICENSE.md )
###

###
= select2 = 
Source: (https://github.com/select2/select2)
Licensed under MIT Source( https://github.com/select2/select2/blob/develop/LICENSE.md )
###

###
= select2-bootstrap-theme =
Source: (https://github.com/select2/select2-bootstrap-theme)
Licensed under MIT Source( https://github.com/select2/select2-bootstrap-theme/blob/master/LICENSE )
###

###
= TGM Plugin Activation =
Source: (http://tgmpluginactivation.com/)
Licensed under GNU General Public License version 2 Source( https://opensource.org/licenses/GPL-2.0 )
###

###
= Superfish = 
Source:(https://superfish.joelbirch.design/examples/nav-bar/)
License: Distributed under the terms of the MIT and GPL licenses
Copyright: Joel Birch
###

###
= fontawesome-free-5 =
Source: (https://fontawesome.com/)
 is free, open source, and GPL friendly
License ( https://fontawesome.com/license/free)
###

###
= Raleway Font =
Licensed under SIL Open Font License (OFL) Source (https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL) 
(https://fonts.google.com/specimen/Raleway#license),
https://github.com/impallari/Raleway/blob/master/OFL.txt
###

###
= 404 - img =
Lovely bulldog pup
Source: (https://skitterphoto.com/photos/4169/lovely-bulldog-pup),
Licensed under Creative Commons CC0 (https://skitterphoto.com/license)
###

###
= Screenshot - img =
nature-horizon-wilderness-mountain-cloud-sunrise-13688
Source: (https://stocksnap.io/photo/night-tree-PYKXRTWIUX)
Licensed under Creative Commons CC0 (https://creativecommons.org/publicdomain/zero/1.0/)
###