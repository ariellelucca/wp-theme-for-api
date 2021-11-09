<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abril_Theme
 */

get_header();


?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-8">
					<header>
						<h1 class="page-title screen-reader-text"><?php echo __('Latest news', 'sample-theme') ?></h1>
					</header>

					<div id="main-loop">
						<?php

						get_template_part( 'template-parts/content' );

						?>
					</div>
					<button type="button" data-last-value="2" id="loop-load-more"><?php echo __('Load More', 'sample-theme') ?></button>
				</div>

				<div class="col-xs-12 col-lg-4">
					<aside id="secondary" class="widget-area">
						<?php
							if ( is_active_sidebar( 'sidebar-home' ) ) {
								dynamic_sidebar( 'sidebar-home' ); 
							}
						?>
					</aside>
				</div>
			</div>
		</div>
	</main>

<?php

get_footer();
