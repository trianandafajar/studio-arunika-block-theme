<?php
/**
 * Title: Arunika: Header dengan judul situs, navigasi, tombol konsultasi.
 * Slug: arunika/header
 * Categories: arunika, header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0px"}},"border":{"bottom":{"color":"var:preset|color|stone","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--stone);border-bottom-width:1px;margin-top:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--small);padding-bottom:24px;padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->
			<!-- wp:site-title /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
				<!-- wp:navigation-link {"label":"Tentang","url":"#tentang","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Layanan","url":"#layanan","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Portofolio","url":"#portofolio","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Proses","url":"#proses","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Kontak","url":"#kontak","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
			<!-- wp:buttons {"className":"is-style-hidden-mobile"} -->
			<div class="wp-block-buttons is-style-hidden-mobile">
				<!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="#kontak" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php echo esc_html__( 'Konsultasi', 'frost' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
