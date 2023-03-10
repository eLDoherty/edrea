<?php 

/**
 * Archive template.
 *
 * @package Edrea
 */

$args = array(
    'prev_text'          => __( 'Older', 'edrea' ),
    'next_text'          => __( 'Newest', 'edrea' ),
    'screen_reader_text' => __( 'Posts navigation'. 'edrea' ),
    'aria_label'         => __( 'Posts', 'edrea' ),
    'class'              => 'posts-navigation',
);

get_header(); ?>

<main id="post-<?php the_ID(); ?>" class="edrea-archive-blog <?php post_class(); ?>">
    <div class="container">
        <div id="edrea-ajax-wrapper" class="edrea-archive-blog__wrapper edrea-masonry">
            <?php if ( have_posts() ) : 
                    /* Start the Loop */
                    while ( have_posts() ) :
                        
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;

                endif;
            ?> 
        </div>
        <?php the_posts_navigation( $args ); ?>
        <?php wp_link_pages(); ?>
    </div>
</main>

<?php get_footer(); ?>