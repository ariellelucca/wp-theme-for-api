<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Abril_Theme
 */

?>

	<footer id="footer" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-6">
						<div class="copy-abril">
							<a href="<?php echo esc_url( __( 'https://wordpress.com/', 'sample-theme' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( '@ Abril Mídia S.A. All rights reserved.', 'sample-theme' ) );
								?>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-lg-6">
						<div class="copy-wp">
							<a href="<?php echo esc_url( __( 'https://wordpress.com/', 'sample-theme' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Powered by %s', 'sample-theme' ), 'WordPress.com VIP' );
								?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
