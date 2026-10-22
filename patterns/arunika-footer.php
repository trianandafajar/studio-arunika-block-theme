<?php
/**
 * Title: Arunika: Footer empat kolom dengan alamat dan atribusi.
 * Slug: arunika/footer
 * Categories: arunika, footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|stone"}}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:site-title {"level":0} /-->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Studio arsitektur dan desain interior yang merancang ruang tenang, hangat, dan tanggap iklim tropis.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Jelajahi', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:list {"className":"is-style-no-disc"} -->
			<ul class="wp-block-list is-style-no-disc">
				<!-- wp:list-item -->
				<li><a href="#layanan"><?php echo esc_html__( 'Layanan', 'frost' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#portofolio"><?php echo esc_html__( 'Portofolio', 'frost' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#proses"><?php echo esc_html__( 'Proses', 'frost' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#kontak"><?php echo esc_html__( 'Kontak', 'frost' ); ?></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Studio', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Jl. Contoh No. 12', 'frost' ); ?><br><?php echo esc_html__( 'Sleman, D.I. Yogyakarta', 'frost' ); ?><br><a href="mailto:halo@studioarunika.example">halo@studioarunika.example</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Ikuti', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:list {"className":"is-style-no-disc"} -->
			<ul class="wp-block-list is-style-no-disc">
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Instagram', 'frost' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'Pinterest', 'frost' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#"><?php echo esc_html__( 'LinkedIn', 'frost' ); ?></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:separator {"align":"wide","backgroundColor":"stone","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-stone-color has-alpha-channel-opacity has-stone-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"x-small"} -->
	<div class="wp-block-group alignwide has-x-small-font-size">
		<!-- wp:paragraph -->
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html__( 'Studio Arunika. Konten contoh untuk demo tema.', 'frost' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Berbasis', 'frost' ); ?> <a href="https://github.com/wpengine/frost">Frost</a> <?php echo esc_html__( 'oleh WP Engine · GPL-3.0', 'frost' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
