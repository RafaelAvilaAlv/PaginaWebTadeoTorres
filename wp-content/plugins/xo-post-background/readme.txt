=== XO Post Background ===
Contributors: ishitaka
Tags: background
Requires at least: 4.9
Tested up to: 6.2
Stable tag: 2.0.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

XO Post Background is a plugin to set background image and color for each post.

== Description ==

XO Post Background is a plugin to set background image and color for each post.

Background image details (size, position, etc.) and background color can only be set in WordPress 5.7 or higher block editors.

== Installation ==

1. Upload the `xo-post-background` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the Plugins menu in WordPress.

== Screenshots ==

1. Block Editor
2. Classic Editor

== Changelog ==

= 2.0.7 =
* Fixed background image scaling issue on iOS Safari.

= 2.0.5 =
* Fixed PHP 5.6 compatibility issue.

= 2.0.4 =
* Fixed a bug that the background color was not reflected.

= 2.0.3 =
* Supported transparency in background color.
* Fixed a bug that caused error messages to appear in the editor for custom posts that do not support custom fields.

= 2.0.2 =
* Added gradient option to background color.

= 2.0.1 =
* Fixed a bug that was not translated.

= 2.0.0 =
* Added options such as setting the position of the background image and the background color.

= 1.4.1 =
* Fixed an issue that did not work before version 4.4.

= 1.4.0 =
* Migrated language packs to translate.wordpress.org (GlotPress).

= 1.3.0 =
* Changed not to set the background on the archive page by default.
* Added 'xo_post_background_enable_archive' filter.

= 1.2.0 =
* Added 'xo_post_background_style' filter.

= 1.1.0 =
* First release.
