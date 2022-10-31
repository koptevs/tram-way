<?php

	// Exit if accessed directly.
	defined( 'ABSPATH' ) || exit;

	// PlanB's includes directory.
	$tramway_inc_dir = 'inc';

	// Array of files to include.
	$tramway_includes = array(
		// '/theme-settings.php',                  // Initialize theme default settings.
		 '/setup.php',                           // Theme setup and custom theme supports.
		// '/widgets.php',                         // Register widget area.
		'/enqueue.php',                         // Enqueue scripts and styles.
		// '/template-tags.php',                   // Custom template tags for this theme.
		// '/pagination.php',                      // Custom pagination for this theme.
		// '/hooks.php',                           // Custom hooks.
		// '/extras.php',                          // Custom functions that act independently of the theme templates.
		// '/customizer.php',                      // Customizer additions.
		// '/custom-comments.php',                 // Custom Comments file.
		 '/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
		// '/editor.php',                          // Load Editor functions.
		// '/block-editor.php',                    // Load Block Editor functions.
		// '/deprecated.php',                      // Load deprecated functions.
	);

	// Include files.
	foreach ( $tramway_includes as $file ) {
		require_once get_theme_file_path( $tramway_inc_dir . $file );
	}
