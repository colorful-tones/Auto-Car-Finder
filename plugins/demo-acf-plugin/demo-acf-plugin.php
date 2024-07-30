<?php
/**
 * Plugin Name:       Demo ACF plugin
 * Description:       A demo WordPress plugin for custom ACF PRO Blocks, Post Types, Options Pages, Taxonomies  and more.
 * Requires at least: 6.4
 * Requires PHP:      7.4
 * Version:           0.1.9
 * Author:            ACF
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       demo-acf
 *
 * @package           demo-acf
 */

// Define our handy constants.
define( 'DEMO_ACF_VERSION', '0.1.7' );
define( 'DEMO_ACF_PLUGIN_DIR', __DIR__ );
define( 'DEMO_ACF_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'DEMO_ACF_PLUGIN_BLOCKS', DEMO_ACF_PLUGIN_DIR . '/blocks/' );

// Set custom load & save JSON points for ACF sync.
require 'includes/acf-json.php';
// Register blocks and other handy ACF Block helpers.
require 'includes/acf-blocks.php';
// Register a default "Site Settings" Options Page.
//require 'includes/acf-settings-page.php';
// Restrict access to ACF Admin screens.
require 'includes/acf-restrict-access.php';
// Display and template helpers.
require 'includes/template-tags.php';

// require 'includes/acf-classic.php';

/**
 * Enqueue Thickbox dependencies for lightbox.
 *
 * @link https://developer.wordpress.org/reference/functions/add_thickbox/
 *
 * @return void
 */
function demo_enqueue_thickbox() {
	// Only on the 'gallery' page.
	if ( is_singular( 'car' ) ) {
		wp_enqueue_script( 'thickbox' );
		//wp_enqueue_style( 'thickbox' );
	}
}
add_action( 'wp_enqueue_scripts', 'demo_enqueue_thickbox' );