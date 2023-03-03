<?php get_header(); ?>

<main class="edrea-single-post">
    <div class="container">
        <?php edrea_breadcrumbs_single_post(); ?>
        <h1 class="edrea-single-post__title"><?php echo get_the_title(); ?></h1>
        <div class="edrea-single-post__meta">

        </div>
        <?php echo the_content(); ?>
    </div>
</main>

<?php get_footer(); ?> 