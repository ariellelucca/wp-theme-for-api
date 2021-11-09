<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abril_Theme
 */

if ( ! is_active_sidebar( 'sidebar-home' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
</aside><!-- #secondary -->
