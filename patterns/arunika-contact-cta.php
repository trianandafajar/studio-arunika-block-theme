<?php
/**
 * Title: Arunika: Ajakan kontak dengan detail studio.
 * Slug: arunika/contact-cta
 * Categories: arunika, call-to-action, contact
 * Keywords: kontak, konsultasi, hubungi, cta
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","anchor":"kontak","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"secondary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-secondary-background-color has-text-color has-background has-link-color" id="kontak" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"}},"fontSize":"x-small"} -->
			<p class="has-x-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Mulai Proyek', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"max-60"} -->
			<h2 class="wp-block-heading has-max-60-font-size"><?php echo esc_html__( 'Mari merancang ruang yang Anda impikan.', 'frost' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php echo esc_html__( 'Ceritakan rencana Anda. Sesi konsultasi awal selama 45 menit membantu kita memetakan kebutuhan, lokasi, dan perkiraan anggaran.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"backgroundColor":"accent","textColor":"base"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="mailto:halo@studioarunika.example"><?php echo esc_html__( 'Jadwalkan Konsultasi', 'frost' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%">
			<!-- wp:separator {"backgroundColor":"stone","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-stone-color has-alpha-channel-opacity has-stone-background-color has-background is-style-wide"/>
			<!-- /wp:separator -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><strong><?php echo esc_html__( 'Studio', 'frost' ); ?></strong><br><?php echo esc_html__( 'Jl. Contoh No. 12, Sleman, D.I. Yogyakarta', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><strong><?php echo esc_html__( 'Surel', 'frost' ); ?></strong><br><a href="mailto:halo@studioarunika.example">halo@studioarunika.example</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><strong><?php echo esc_html__( 'Jam Kerja', 'frost' ); ?></strong><br><?php echo esc_html__( 'Senin – Jumat, 09.00 – 17.00 WIB', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
