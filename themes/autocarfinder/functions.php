<?php
/**
 * This file adds functions to the AutoCarFinder WordPress theme.
 *
 * @package autocarfinder
 */

namespace AutoCarFinder;

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {

	// Enqueue editor styles and fonts.
	add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {
	wp_enqueue_style( sanitize_title( __NAMESPACE__ ), get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );

/**
 * Add Dashicons for use with block styles.
 */
function enqueue_block_dashicons() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_dashicons' );

/**
 * Add block style variations.
 */
function register_block_styles() {

	$block_styles = array(
		'core/button'                    => array(
			'secondary-button' => __( 'Secondary', 'autocarfinder' ),
		),
		'core/list'                      => array(
			'list-check'        => __( 'Check', 'autocarfinder' ),
			'list-check-circle' => __( 'Check Circle', 'autocarfinder' ),
			'list-boxed'        => __( 'Boxed', 'autocarfinder' ),
		),
		'core/query-pagination-next'     => array(
			'wp-block-button__link' => __( 'Button', 'autocarfinder' ),
		),
		'core/query-pagination-previous' => array(
			'wp-block-button__link' => __( 'Button', 'autocarfinder' ),
		),
		'core/code'                      => array(
			'dark-code' => __( 'Dark', 'autocarfinder' ),
		),
		'core/cover'                     => array(
			'blur-image-less' => __( 'Blur Image Less', 'autocarfinder' ),
			'blur-image-more' => __( 'Blur Image More', 'autocarfinder' ),
			'rounded-cover'   => __( 'Rounded', 'autocarfinder' ),
		),
		'core/column'                    => array(
			'column-box-shadow' => __( 'Box Shadow', 'autocarfinder' ),
		),
		'core/post-excerpt'              => array(
			'excerpt-truncate-2' => __( 'Truncate 2 Lines', 'autocarfinder' ),
			'excerpt-truncate-3' => __( 'Truncate 3 Lines', 'autocarfinder' ),
			'excerpt-truncate-4' => __( 'Truncate 4 Lines', 'autocarfinder' ),
		),
		'core/group'                     => array(
			'column-box-shadow' => __( 'Box Shadow', 'autocarfinder' ),
		),
		'core/separator'                 => array(
			'separator-dotted' => __( 'Dotted', 'autocarfinder' ),
			'separator-thin'   => __( 'Thin', 'autocarfinder' ),
		),
		'core/image'                     => array(
			'rounded-full' => __( 'Rounded Full', 'autocarfinder' ),
			'media-boxed'  => __( 'Boxed', 'autocarfinder' ),
		),
		'core/preformatted'              => array(
			'preformatted-dark' => __( 'Dark Style', 'autocarfinder' ),
		),
		'core/post-terms'                => array(
			'term-button' => __( 'Button Style', 'autocarfinder' ),
		),
		'core/video'                     => array(
			'media-boxed' => __( 'Boxed', 'autocarfinder' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );

/**
 * Load custom block styles only when the block is used.
 */
function enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "autocarfinder-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );

/**
 * Register pattern categories.
 */
function pattern_categories() {

	$block_pattern_categories = array(
		'autocarfinder/card'           => array(
			'label' => __( 'Cards', 'autocarfinder' ),
		),
		'autocarfinder/call-to-action' => array(
			'label' => __( 'Call To Action', 'autocarfinder' ),
		),
		'autocarfinder/features'       => array(
			'label' => __( 'Features', 'autocarfinder' ),
		),
		'autocarfinder/hero'           => array(
			'label' => __( 'Hero', 'autocarfinder' ),
		),
		'autocarfinder/pages'          => array(
			'label' => __( 'Pages', 'autocarfinder' ),
		),
		'autocarfinder/posts'          => array(
			'label' => __( 'Posts', 'autocarfinder' ),
		),
		'autocarfinder/pricing'        => array(
			'label' => __( 'Pricing', 'autocarfinder' ),
		),
		'autocarfinder/testimonial'    => array(
			'label' => __( 'Testimonials', 'autocarfinder' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );

