<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edrea
 */

if ( ! is_active_sidebar( 'edrea-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="edrea-widget-area">
	<?php dynamic_sidebar( 'edrea-sidebar' ); ?>
</aside>