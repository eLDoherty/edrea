<article class="edrea-card article-<?php echo get_the_ID(); ?>">
    <div class="edrea-card__thumbnail">
        <a href="<?php echo get_the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
        </a>
    </div>
    <div class="edrea-card__detail">
        <a href="<?php echo get_the_permalink(); ?>"><h1 class="article-title"><?php echo get_the_title(); ?></h1></a>
        <p class="article-excerpt"><?php echo get_the_excerpt(); ?></p>
    </div>
</article>