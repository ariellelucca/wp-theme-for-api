<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Abril_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand">
					<div class="justify-content-start">
						<div class="site-branding">
							<?php
							if ( !empty (get_custom_logo() ) ) {
								the_custom_logo();
							}

							else {
								$sample_theme_description = get_bloginfo( 'description', 'display' );
								if ( $sample_theme_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $sample_theme_description; ?></p>
								<?php 
								endif; 
							}
							?>
						</div><!-- .site-branding -->
					</div>

					<div class="justify-content-end">
						<button class="navbar-toggler collapsed hidden-lg" type="button" data-toggle="collapse" data-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false" aria-label="Toggle navigation">
							<?php 
								echo sampletheme_get_svg('assets/icons/bars-solid.svg'); 
							?>
						</button>
					</div>

					<nav id="site-navigation" class="main-navigation collapse">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu'
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->
