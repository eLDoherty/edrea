<?php

/**
 * Edrea Card.
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
 */

$excerpt = substr( get_the_excerpt(), 0 , 120 );
$categories = get_the_category( get_the_ID() );

?>

<article class="edrea-card article-<?php echo get_the_ID(); ?>">
    <div class="edrea-card__thumbnail">
        <?php if( get_the_post_thumbnail_url() ) : ?>
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
            </a>
            <div class="article-date">
                <span><?php echo get_the_date(); ?></span>
            </div>
        <?php endif; ?>
        <?php if( $categories ) : ?>
        <div class="article-category">
            <?php $i = 0; foreach( $categories as $category ): $i++; 
                if( $i === 1 ) { $color= "#e77221"; } elseif( $i === 2 ) { $color = "#53CDE2"; } else { $color = "#005792"; } ?>
                <?php if( $i < 4 ) : ?>
                    <a class="cat" href="<?php echo get_category_link( $category->term_id ); ?>"><p style="background-color: <?php echo $color; ?>;"><?php echo $category->name; ?></p></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if( strlen( get_the_post_thumbnail_url() ) < 1 ) : ?>
        <br><br>
    <?php endif; ?>
    <div class="edrea-card__detail">
        <?php if( strlen( get_the_post_thumbnail_url() ) < 1 ) : ?>
            <br><br>
        <?php endif; ?>
        <a href="<?php echo get_the_permalink(); ?>"><h1 class="article-title"><?php echo get_the_title(); ?></h1></a>
        <p class="article-excerpt"><?php echo $excerpt; ?> . . . <a href="<?php echo get_the_permalink(); ?>"><?php echo __( 'read more', 'edrea' ); ?></a></p>
    </div>
</article>