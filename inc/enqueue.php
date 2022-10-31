<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'tramway_scripts' ) ) {

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function tramway_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		// wp_die($theme_version);
		// wp_die($the_theme);
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		// wp_die( $suffix );
		// Grab asset urls.
		$theme_styles  = "/css/theme{$suffix}.css";
		$theme_scripts = "/js/theme{$suffix}.js";

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
		// wp_die( $css_version );
		wp_enqueue_style( 'tramway-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );

		wp_enqueue_style( 'tramway-font-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap' );
		wp_enqueue_style( 'tramway-font-jost', 'https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap' );

		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-bs', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );

		// wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
		// wp_die($js_version);

		// wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/js/glightbox.min.js', array(), $js_version, true );

		// wp_enqueue_script( 'ikunderstrap-scripts', get_template_directory_uri() . $theme_scripts, array('glightbox'), $js_version, true );
		wp_enqueue_script(
			'tramway-scripts',
			get_template_directory_uri() . $theme_scripts,
			array(),
			$js_version,
			true
		);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'tramway_scripts' );
