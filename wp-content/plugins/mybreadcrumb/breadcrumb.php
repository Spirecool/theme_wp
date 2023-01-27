<?php

/*
Plugin Name: Simple Breadcrumb Shortcode
Description: Simple Breadcrumb Shortcode is an easy to use plugin, paste the shortcode, and it will appear on your pages
Version: 1.0
Author: Jérôme OLLIVIER
Author URI: https://www.jerome-freelance.com/
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

*/

function fil_ariane()
{
    global $post;

    if (!is_home()) {
        
        $fil = '';
        $fil.= '<a href="'.get_bloginfo( 'wpurl' ).'">';
        $fil.= get_bloginfo('name');
        $fil.= '</a> > ';

        $parents = array_reverse( get_ancestors( $post->ID, 'page' ));
        foreach ($parents as $parent) {
            $fil.= '<a href="'.get_permalink( $parent ).'">';
            $fil.= get_the_title( $parent );
            $fil.= '</a> > ';
        }
        $fil.= $post->post_title;
        return $fil;
    }
   
//     else {
// echo '';
//     }
}

add_shortcode('mybreadcrumb', 'fil_ariane');

// function exemple_shortcode() {
//     return "je suis un shortcode";
// }

// add_shortcode('monshortcode', 'exemple_shortcode');<?php
