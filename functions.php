<?php

namespace HappyPrime\Theme;

add_action( 'wp_enqueue_scripts', 'HappyPrime\Theme\enqueue_styles', 9 );
add_action( 'wp_enqueue_scripts', 'HappyPrime\Theme\dequeue_parent_fonts', 11 );
add_action( 'init', 'HappyPrime\Theme\add_shortcode' );
add_action( 'wp_footer', 'HappyPrime\Theme\analytics_footer' );

/**
 * Enqueue additional stylesheets, including the default stylesheet provided
 * by the parent theme.
 *
 * @since 0.0.1
 */
function enqueue_styles() {
	wp_enqueue_style( 'parent-css', get_template_directory_uri() .'/style.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Raleway:300,600,900' );
}

/**
 * De-queue the fonts provided by the parent theme.
 */
function dequeue_parent_fonts() {
	wp_dequeue_style( 'twentyseventeen-fonts' );
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

/**
 * Output the Happy Prime GA tag in the footer.
 *
 * @since 0.0.2
 */
function analytics_footer() {
	?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-104910839-1', 'auto');
		ga('send', 'pageview');

	</script>
	<?php
}
