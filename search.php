<?php

/**
 * Search template.
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
 */

$args = array(
    'prev_text'          => __( 'Older', 'edrea' ),
    'next_text'          => __( 'Newest', 'edrea' ),
    'screen_reader_text' => __( 'Posts navigation', 'edrea' ),
    'aria_label'         => __( 'Posts', 'edrea' ),
    'class'              => 'posts-navigation',
);

if( isset( $_GET['s'] ) ) {
    $inputUser = esc_html( $_GET['s'] );
}

get_header(); ?>

<main id="primary" class="edrea-archive-blog">
    <div class="container">
        <?php printf( __("<h2 class='edrea-input-search'>Search for <span>%s</span> :</h2>", 'edrea'), $inputUser ); ?>
       
            <?php if ( have_posts() ) : 

                    ?>
                    <div id="edrea-ajax-wrapper" class="edrea-archive-blog__wrapper edrea-masonry">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;

                    ?> 
                    </div> 
                    <?php
                                    
                        else :

                            get_template_part( 'template-parts/content', 'empty' );
                endif;
            ?> 

        <?php the_posts_navigation( $args );  ?>
    </div>
</main>

<?php get_footer(); ?>