=== Simple BreadCrumb ===

Contributors: Jérôme OLLIVIER
Tags: breadcrumb, shortcode
Requires at least: 4.9
Tested up to: 6.1
Stable tag: 3.11.1
License: GPLv2 or later
Requires PHP: 8.1
Copyright: {2023} {Jérôme OLLIVIER} {email: hello@jerome-freelance.fr}
    This program is a free software; you can redistribute it and/or modify it under the termes of the GNU General Public License,
    version 2, or later, as published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful, but WHITOUT ANY WARRANTLY; without event the implied warranty
    of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
    See the GNU General Public License for more details.

    You shoud have received a copy of the GNU General Public License along with this program; if not, write to the 
    Free Sofware Foundatuon, Inc., 51 Franklin St, First Floor, Boston, MA 02110-1301 USA

A simple breadcrumb plugin for articles and pages

== Description ==

Simple Breadcrumb is an easy to use plugin, paste the shortcode, and it will appear on your pages

== Installation ==

Upload the Simple Breadcrumb plugin to your blog, activate it

== Utilisation ==

Paste the [mybreadcrumb] shortcode on your page

Or use it globally, in your theme's header.php : 
For example : 
	<div style = "padding-left: 15px;">
	<?php 
	if( function_exists('fil_ariane')) {
		echo fil_ariane(); 
	}
	?>


1, 2, 3: You're done!

== Changelog ==

= 1.0 =
Initial release.
*Release Date - 27 January 2023*

