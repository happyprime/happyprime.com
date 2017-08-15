<?php

namespace HappyPrime\Theme;

add_action( 'wp_enqueue_scripts', 'HappyPrime\Theme\enqueue_styles' );
add_action( 'init', 'HappyPrime\Theme\add_shortcode' );

/**
 * Enqueue the default styles provided by the parent theme.
 *
 * @since 0.0.1
 */
function enqueue_styles() {
	wp_enqueue_style( 'parent-css', get_template_directory_uri() .'/style.css' );
}

/**
 * Register the Happy Prime SVG logo shortcode.
 *
 * @since 0.0.1
 */
function add_shortcode() {
	\add_shortcode( 'happy_prime_logo', 'HappyPrime\Theme\logo_svg' );
}

/**
 * Return content for the Happy Prime inline SVG logo.
 *
 * @since 0.0.1
 *
 * @return string
 */
function logo_svg() {
	ob_start();
	?>
	<svg class="hp-mark" width="100px" height="100px" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<g id="hp-mark-elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			<circle class="circle" id="Oval" stroke="#FFFFFF" fill="#3f3f3f" cx="50" cy="50" r="49"></circle>
			<polygon class="prime" id="prime" fill="#F9E000" points="53.792 38.304 48.32 38.304 53.144 21.024 59.696 21.024"></polygon>
		</g>
	</svg>
	<?php

	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}
