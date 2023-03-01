<?php

$args = array(
    'prev_text'          => __( 'Older' ),
    'next_text'          => __( 'Newest' ),
    'screen_reader_text' => __( 'Posts navigation' ),
    'aria_label'         => __( 'Posts' ),
    'class'              => 'posts-navigation',
);

get_header(); ?>

<main id="primary" class="edrea-archive-blog">
    <div class="container">
        <div class="edrea-archive-blog__wrapper edrea-masonry">
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
    </div>
</main>

<?php get_footer(); ?>