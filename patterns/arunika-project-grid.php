<?php
/**
 * Title: Arunika: Grid portofolio proyek.
 * Slug: arunika/project-grid
 * Categories: arunika, portfolio
 * Keywords: portofolio, proyek, galeri, karya
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","anchor":"portofolio","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|small","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|small"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" id="portofolio" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--medium)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"accent","fontSize":"x-small"} -->
			<p class="has-accent-color has-text-color has-x-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html__( 'Portofolio', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"fontSize":"max-48"} -->
			<h2 class="wp-block-heading has-max-48-font-size"><?php echo esc_html__( 'Proyek pilihan', 'frost' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Beberapa karya contoh dari rumah tinggal, interior, hingga renovasi bangunan lama di berbagai kota.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Semua Proyek', 'frost' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_800x800.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Fasad rumah dengan teras kayu dan atap miring', 'frost' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
				<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Rumah Tinggal · Sleman, 2025', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Rumah Teras Kayu', 'frost' ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_white_800x800.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Interior kafe dengan rangka kayu ekspos', 'frost' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
				<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Interior Komersial · Gianyar, 2025', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Kafe Lumbung', 'frost' ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_800x800.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Ruang keluarga apartemen bernuansa hangat', 'frost' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
				<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Interior · Jakarta Selatan, 2024', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Apartemen Senja', 'frost' ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_white_800x800.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Vila dengan dinding batu kapur dan kolam', 'frost' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
				<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Arsitektur · Badung, 2024', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Vila Bukit Kapur', 'frost' ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_800x800.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Ruang kerja terbuka dengan tanaman rambat', 'frost' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
				<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Interior Kantor · Bandung, 2023', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Kantor Rimba', 'frost' ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sample_white_800x800.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Rumah joglo yang direnovasi dengan pendopo terbuka', 'frost' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"4px","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
				<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html__( 'Renovasi · Surakarta, 2023', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Joglo Pulang', 'frost' ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
