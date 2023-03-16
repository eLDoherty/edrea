<?php 

/**
 * The main template.
 * 
 * @package Edrea
 *
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

global $wp_query;

$args = array(
    'prev_text'          => __( 'Older', 'edrea' ),
    'next_text'          => __( 'Newest', 'edrea' ),
    'screen_reader_text' => __( 'Posts navigation', 'edrea' ),
    'aria_label'         => __( 'Posts', 'edrea' ),
    'class'              => 'posts-navigation',
);

$posts = array(
    'post_type' => 'post',
);

$query = new WP_Query( $posts );

$trends = edrea_trending_posts();

$total_posts = (int) $wp_query->post_count;

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
                                <a class="trending-button" href="<?php echo $trend['permalink']; ?>"><?php echo __( 'Read Now', 'edrea' ); ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                 <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        <?php endif; ?>
        
        <div id="edrea-ajax-wrapper" class="edrea-archive-blog__wrapper edrea-masonry">
            <?php if ( $query->have_posts() ) : 
                    /* Start the Loop */
                    while ( $query->have_posts() ) :
                        
                        $query->the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;
                    
                endif;
            ?> 
        </div>
        <div class="edrea-load-more">
            <input type="hidden" id="button-text" value="<?php echo __("All Caught", 'edrea' );?>">
            <button id="button-load-more" value="<?php echo admin_url('admin-ajax.php'); ?>"><?php echo __( 'Load more', 'edrea' ); ?></button>
        </div>
    </div>
</main>

<?php get_footer(); ?>

