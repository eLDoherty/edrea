<?php 

$arg = array(
    'prev_text'          => __( 'Older' ),
    'next_text'          => __( 'Newest' ),
    'screen_reader_text' => __( 'Posts navigation' ),
    'aria_label'         => __( 'Posts' ),
    'class'              => 'posts-navigation',
);

$trends = edrea_trending_posts();

get_header(); ?>

<main id="primary" class="edrea-archive-blog">
    <div class="container">
        <?php if( $trends ) : ?>
            <div class="edrea-archive-blog__slider">
                <?php foreach( $trends as $trend ) : ?>
                    <div class="edrea-archive-blog__slider--item">
                        <div class="trending-thumbnail">
                            <img src="<?php echo $trend['thumbnail_url'] ?>" alt="<?php echo $trend['title']; ?>">
                        </div>
                        <div class="trending-detail">
                            <h2 class="trending-title"></h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
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