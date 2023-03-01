<?php get_header(); ?>

<main id="primary" class="edrea-archive-search">
    <div class="container">
        <div class="archive-blog">
            <?php if ( have_posts() ) : ?>
                <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;

                    the_posts_navigation();

                endif;
                ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>