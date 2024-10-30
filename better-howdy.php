<?php
/*
Plugin Name: Better Howdy
Plugin URI: http://sivel.net/wordpress/better-howdy/
Description: Remove 'Howdy' and restructure the 'Howdy' line.  Props to Ozh for <a href="http://planetozh.com/blog/my-projects/no-howdy-a-plugin-for-wordpress/">No Howdy</a>.
Author: Matt Martz
Version: 1.2
Author URI: http://sivel.net/

        Copyright (c) 2008-2011 Matt Martz (http://sivel.net)
        Better Howdy is released under the GNU General Public License (GPL)
        http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( ! is_admin() )
	return;

add_filter( 'admin_user_info_links', 'better_howdy' );

function better_howdy( $links ) {
	$links[5] = str_replace( 'Howdy,', 'Logged in as', $links[5] );
	return $links;
}
