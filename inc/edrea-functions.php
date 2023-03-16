<?php

/**
 * Edrea themes functions.
 *
 * @package Edrea
 * 
 * @version 1.0.0
 * @copyright  Copyright (c) 2023, Leonardo Doherty
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * 
 */

function edrea_trending_posts() {

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1, 
	);
	 
	$query = new WP_Query( $args );

	$post_slider_content = array();

	while( $query->have_posts() ) {

		$query->the_post();

		if( has_tag( 'Trending' ) > 0 ) {

			$post = get_post( get_the_ID() );

			$post_detail = array(
				'title' => $post->post_title,
				'excerpt' => $post->post_excerpt,
				'permalink' => get_the_permalink( get_the_ID() ),
				'date' => $post->post_date,
				'thumbnail_url' => get_the_post_thumbnail_url( get_the_ID() )
			);

			array_push( $post_slider_content, $post_detail );

		}

	}

	return $post_slider_content;

}

/**
 * Load more ajaxify
 */
add_action( 'wp_ajax_nopriv_edrea_load_more', 'edrea_load_more' );
add_action( 'wp_ajax_edrea_load_more', 'edrea_load_more' );

function edrea_load_more() {

	$page_order = isset( $_POST['count'] ) ? $_POST['count'] : 2;

	$args = array(
		'post_type' => 'post',
		'paged' => $page_order,
	);

	$query = new WP_Query( $args );

	$html = '';

	while( $query->have_posts() ) {

		$query->the_post();

		$html .= get_template_part( 'template-parts/content', get_post_type() );

	}

	echo $html; 

	wp_die();

}

/**
 * Edrea Custom Breadcrumbs
 * Only show in single-post, in other page will not work correctly 
 * 
 * @return breadcrumbs
 */
function edrea_breadcrumbs_single_post() {

	$category = get_the_category( get_the_ID() )[0];
	$cat_link = get_category_link( $category->cat_ID );
	$title = substr( get_the_title(), 0 , 20 ) . '...';
	?>
		<ul class="edrea-breadcrumbs">
			<li><a href="<?php echo get_home_url(); ?>"><?php echo __( 'Blogs', 'edrea' ); ?></a><span>></span></li>
			<li><a href="<?php echo $cat_link; ?>"><?php echo $category->name; ?></a><span>></span></li>
			<li><?php echo $title; ?></li>
		</ul>
	<?php
}

/**
 * Edrea show 5 recent post
 */
function edrea_recent_post_data() {

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 5
	);
	
	$query = new WP_Query( $args ); 

	$recent_posts = (array) array();

	if( $query->have_posts() ) {	

		while( $query->have_posts() ) {
			$query->the_post();
			$query_recent_post = array(
				"thumbnail" => get_the_post_thumbnail_url(),
				"title" => get_the_title(),
				"permalink" => get_the_permalink()
			);

			array_push( $recent_posts, $query_recent_post );
		}

		wp_reset_postdata();	
	}


	return $recent_posts;
	
}

/**
 * Custom color text header
 */
function edrea_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'edrea_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => 'FFFFFF',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'edrea_header_style',
			)
		)
	);
}

add_action( 'after_setup_theme', 'edrea_custom_header_setup' );

if ( ! function_exists( 'edrea_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see edrea_custom_header_setup().
	 */
	function edrea_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			$color = "#$header_text_color";
			?>
			.edrea-header__wrapper .main-navigation ul li a {
				color: <?php echo esc_attr( $color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;