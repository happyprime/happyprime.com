<?php

namespace HappyPrime\Theme;

add_action( 'wp_enqueue_scripts', 'HappyPrime\Theme\enqueue_styles' );

/**
 * Enqueue the default styles provided by the parent theme.
 *
 * @since 0.0.1
 */
function enqueue_styles() {
	wp_enqueue_style( 'parent-css', get_template_directory_uri() .'/style.css' );
}
