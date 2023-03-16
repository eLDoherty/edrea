<?php 

/**
 * Single Page Template.
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
 */

get_header(); ?>

<main id="post-<?php the_ID(); ?>" <?php post_class( 'edrea-single-post edrea-main' ); ?>>
    <div class="container">
        <div class="edrea-page__wrapper">
            <h1 class="edrea-single-post__title"><?php echo get_the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?> 