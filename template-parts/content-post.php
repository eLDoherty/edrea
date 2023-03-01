<?php

$excerpt = substr( get_the_excerpt(), 0 , 100 );

?>

<article class="edrea-card article-<?php echo get_the_ID(); ?>">
    <div class="edrea-card__thumbnail">
        <a href="<?php echo get_the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
        </a>
        <div class="article-date">
            <span><?php echo get_the_date(); ?></span>
        </div>
    </div>
    <div class="edrea-card__detail">
        <a href="<?php echo get_the_permalink(); ?>"><h1 class="article-title"><?php echo get_the_title(); ?></h1></a>
        <p class="article-excerpt"><?php echo $excerpt; ?> . . . <a href="<?php echo get_the_permalink(); ?>">read more</a></p>
    </div>
</article>