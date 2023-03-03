<?php 

global $post;
$author_id = $post->post_author;

$author_display_name = get_the_author_meta( 'display_name', $author_id );
$author_profile_image = get_avatar( $author_id, 30 );

get_header(); ?>

<main class="edrea-single-post edrea-main">
    <div class="container">
        <?php edrea_breadcrumbs_single_post(); ?>
        <div class="edrea-single-post__wrapper">
            <div class="edrea-single-post__wrapper--left">
                <h1 class="edrea-single-post__title"><?php echo get_the_title(); ?></h1>
                <div class="edrea-single-post__meta">
                    <div class="edrea-single-post__meta--author">
                        <?php echo $author_profile_image; ?>
                        <p class="edrea-author-name"><?php echo $author_display_name; ?></p>
                    </div>
                    <div class="post-date">
                        <img src="<?php echo get_template_directory_uri() . '/public/assets/icons/calendar.svg'; ?>" alt="<?php echo __( "Post date" ); ?>">
                        <p class="post-date"><?php echo get_the_date(); ?></p>
                    </div>
                </div>
                <?php echo the_content(); ?>
            </div>
            <div class="edrea-single-post__wrapper--right">                
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="edrea-social-sharer">
            <?php echo get_template_part( '/utils/social-sharer' ); ?>
        </div>
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
        ?>
    </div>
</main>

<?php get_footer(); ?> 