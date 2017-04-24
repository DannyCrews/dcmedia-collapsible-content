<?php
/**
 * DCMedia Collapsible Content Plugin
 *
 * @package     DCMedia\CollapsibleContent
 * @author      Dan Crews
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: DCMedia Collapsible Content
 * Plugin URI:
 * Description: DCMedia Collapsible Content is a WordPress plugin that shows and hides content.
 * Version:     1.0.0
 * Author:      Dan Crews
 * Author URI:
 * Text Domain: dcmedia_collapsible_content
 * Requires WP: 4.7
 * Requires PHP: 5.5
 */

/*
DCMedia Collapsible Content is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.

DCMedia Collapsible Content is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with DCMedia Collapsible Content.
*/

namespace DCMedia\CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Oh, silly, there's nothing to see here.");
}

define( 'COLLAPSIBLE_CONTENT_PLUGIN', __FILE__ );
define( 'COLLAPSIBLE_CONTENT_DIR', plugin_dir_path( __FILE__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'COLLAPSIBLE_CONTENT_URL', $plugin_url );
define( 'COLLAPSIBLE_CONTENT_TEXT_DOMAIN', 'collapsible_content' );

include __DIR__ . '/src/plugin.php' ;
