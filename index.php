<?php get_header(); ?>

<main id="primary" class="edrea-archive-blog">
    <div class="container">
        <div class="edrea-archive-blog__wrapper edrea-masonry">
            <?php if ( have_posts() ) : ?>
                <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;


                endif;
                ?>
        </div>
        <?php the_posts_navigation(); ?>
    </div>
</main>

<?php get_footer(); ?>