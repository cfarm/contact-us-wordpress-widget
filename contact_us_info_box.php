<?php
/*
Plugin Name: Contact Us Info Box
	Plugin URI: http://blogt.brynmawr.edu
Description: Allows users to add contact info to the "Contact Us" left nav box in the Bryn Mawr templates.
Version: 1
Author: Catherine Farman
Author URI: http://blogt.brynmawr.edu
*/

/*  Copyright 2009  Catherine Farman 

	modified for blogt.brynmawr.edu using "Custom User CSS" plugin source code by Jeremiah Orem

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('admin_menu', 'contact_us_info_box_menu');


function contact_us_info_box_insert_value() {
	echo stripslashes(get_option('contact_us_info_box_value'));
}

function contact_us_info_box_menu() {
	add_options_page('Contact Us Info Box Options', 'Contact Us Info Box', 8, __FILE__, 'contact_us_info_box_options');
}

function contact_us_info_box_options() {
	$updated = false;
	$opt_name = 'contact_us_info_box_value';
	
	$css_val = get_option( $opt_name );

	if( $_POST['action'] == 'update' ) {
		$css_val = $_POST[ $opt_name ];

		update_option( $opt_name, $css_val );
		$updated = true;
	}

	include_once(dirname(__FILE__) . '/contact_us_info_box_options.php');
}

?>
