<?php
/**
 * Title: Arunika: Perkenalan studio dengan gambar dan angka.
 * Slug: arunika/about-intro
 * Categories: arunika, about
 * Keywords: tentang, studio, filosofi
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","anchor":"tentang","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" id="tentang" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_1200x1200.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Ruang kerja Studio Arunika dengan meja gambar dan maket', 'frost' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"accent","fontSize":"x-small"} -->
			<p class="has-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Tentang Studio', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"max-48"} -->
			<h2 class="wp-block-heading has-max-48-font-size"><?php echo esc_html__( 'Arunika berarti cahaya pagi. Itulah titik awal setiap rancangan kami.', 'frost' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Kami adalah studio kecil yang percaya bahwa bangunan yang baik dimulai dari cahaya, udara, dan cara penghuninya menjalani hari. Setiap proyek kami kerjakan secara personal, dengan material lokal dan detail yang mudah dirawat.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"},"blockGap":{"left":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"textColor":"primary","fontFamily":"display","fontSize":"max-48"} -->
					<p class="has-primary-color has-text-color has-display-font-family has-max-48-font-size">60+</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"x-small"} -->
					<p class="has-x-small-font-size"><?php echo esc_html__( 'Proyek contoh', 'frost' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"textColor":"primary","fontFamily":"display","fontSize":"max-48"} -->
					<p class="has-primary-color has-text-color has-display-font-family has-max-48-font-size">9</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"x-small"} -->
					<p class="has-x-small-font-size"><?php echo esc_html__( 'Kota di Indonesia', 'frost' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"textColor":"primary","fontFamily":"display","fontSize":"max-48"} -->
					<p class="has-primary-color has-text-color has-display-font-family has-max-48-font-size">1</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"x-small"} -->
					<p class="has-x-small-font-size"><?php echo esc_html__( 'Tim, dari awal hingga akhir', 'frost' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
