<?php get_header(); ?>

<main class="edrea-single-post edrea-main">
    <div class="container">
        <?php edrea_breadcrumbs_single_post(); ?>
        <div class="edrea-single-post__wrapper">
            <div class="edrea-single-post__wrapper--left">
                <h1 class="edrea-single-post__title"><?php echo get_the_title(); ?></h1>
                <div class="edrea-single-post__meta">

                </div>
                <?php echo the_content(); ?>
            </div>
            <div class="edrea-single-post__wrapper--right">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 