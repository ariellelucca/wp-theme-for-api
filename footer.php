<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Abril_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="row">
				<div class="col-xs-12 col-lg-6">
					<a href="<?php echo esc_url( __( 'https://wordpress.com/', 'sample-theme' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( '@ Abril Mídia S.A. All rights reserved.', 'sample-theme' ) );
						?>
					</a>
				</div>
				<div class="col-xs-12 col-lg-6">
					<a href="<?php echo esc_url( __( 'https://wordpress.com/', 'sample-theme' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Powered by %s', 'sample-theme' ), 'WordPress.com VIP' );
						?>
					</a>
				</div>
			</div>

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
