<?php
/**
 * Title: Arunika: Hero studio dengan gambar latar.
 * Slug: arunika/hero-studio
 * Categories: arunika, banner, featured
 * Keywords: hero, studio, arsitektur, interior
 * Viewport Width: 1400
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_1920x1200.jpg' ) ); ?>","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":85,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|small","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small);min-height:85vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_1920x1200.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","textColor":"base","layout":{"type":"constrained","contentSize":"820px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide has-base-color has-text-color">
		<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"}},"fontSize":"x-small"} -->
		<p class="has-x-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Studio Arsitektur & Interior · Yogyakarta', 'frost' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"fontSize":"max-96"} -->
		<h1 class="wp-block-heading has-max-96-font-size"><?php echo esc_html__( 'Ruang yang tenang, tumbuh bersama penghuninya.', 'frost' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"large"} -->
		<p class="has-large-font-size"><?php echo esc_html__( 'Studio Arunika merancang rumah, interior, dan ruang usaha yang hangat, hemat energi, dan berakar pada iklim tropis Indonesia.', 'frost' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:button {"backgroundColor":"accent","textColor":"base"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="#portofolio"><?php echo esc_html__( 'Lihat Portofolio', 'frost' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#kontak"><?php echo esc_html__( 'Jadwalkan Konsultasi', 'frost' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
