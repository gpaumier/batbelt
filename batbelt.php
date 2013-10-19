<?php
/*
Plugin Name: BatBelt
Plugin URI: https://github.com/gpaumier/batbelt
Description: A ragbag WordPress plugin for functionality specific to gpc
Version: 0.1
Author: Guillaume Paumier
Author URI: https://guillaumepaumier.com
License: GPLv3
*/

/*  
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
*/

# Include PHP files declaring custom content types and taxonomies

require_once('custom_content.php'); 
require_once('custom_taxonomies.php'); 

# Disable call to wp.com made by Jetpack
# per http://wordpress.org/support/topic/plugin-jetpack-by-wordpresscom-unnecessary-java-script-call

function dequeue_devicepx() {
	wp_dequeue_script( 'devicepx' );
}

add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );


# Add piwik script

function load_piwik_js() {  
        wp_register_script( 'piwik', plugins_url( '/stats.js', __FILE__ ) );  
        wp_enqueue_script( 'piwik' );  
}  
   
add_action( 'wp_enqueue_scripts', 'load_piwik_js' );  

?>