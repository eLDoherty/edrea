<?php 

$args = array(
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
            <div class="swiper">
                <div class="edrea-archive-blog__slider swiper-wrapper">
                    <?php foreach( $trends as $trend ) : ?>
                        <div class="edrea-archive-blog__slider--item swiper-slide">
                            <div class="trending-thumbnail">
                                <img src="<?php echo $trend['thumbnail_url'] ?>" alt="<?php echo $trend['title']; ?>">
                            </div>
                            <div class="trending-detail">
                                <h2 class="trending-title"><?php echo $trend['title']; ?></h2>
                                <p class="trending-excerpt"><?php echo $trend['excerpt']; ?></p>
                                <a class="trending-button" href="<?php echo $trend['permalink']; ?>">Read Now</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                 <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
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