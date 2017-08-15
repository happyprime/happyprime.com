<div class="site-branding">
	<div class="wrap">

		<a href="https://happyprimeweb.com/" class="custom-logo-link" rel="home" itemprop="url">
			<svg class="hp-mark" width="100px" height="100px" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="hp-mark-elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<circle class="circle" id="Oval"  fill="#3f3f3f" cx="50" cy="50" r="49"></circle>
					<polygon class="prime" id="prime" fill="#F9E000" points="53.792 38.304 48.32 38.304 53.144 21.024 59.696 21.024"></polygon>
				</g>
			</svg></a>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->
	</div><!-- .wrap -->
</div><!-- .site-branding -->
