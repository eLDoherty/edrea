<?php get_header(); ?>

<main id="post-<?php the_ID(); ?>" class="edrea-single-post edrea-main <?php post_class(); ?>">
    <div class="container">
        <div class="edrea-page__wrapper">
            <h1 class="edrea-single-post__title"><?php echo get_the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?> 