<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
 */

if ( ! is_active_sidebar( 'edrea-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="edrea-widget-area">
	<?php dynamic_sidebar( 'edrea-sidebar' ); ?>
</aside>