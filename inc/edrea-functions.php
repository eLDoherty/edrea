<?php

/**
 * Get trending post by tags
 */
function edrea_trending_posts() {

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1, 
	);
	 
	$query = new WP_Query( $args );

	$post_slider_id = array();

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

			array_push( $post_slider_id, $post_detail );

		}

	}

	return $post_slider_id;

}

/**
 * Load more ajaxify
 */
add_action( 'wp_ajax_nopriv_edrea_load_more', 'edrea_load_more' );
add_action( 'wp_ajax_edrea_load_more', 'edrea_load_more' );

function edrea_load_more() {

	$page_order = isset( $_POST['count'] ) ? $_POST['count'] : 9;

	$args = array(
		'post_type' => 'post',
		'paged' => $page_order
	);

	$query = new WP_Query( $args );

	while( $query->have_posts() ) {

		$query->the_post();

		$html = get_template_part( 'template-parts/content', get_post_type() );

	}

	echo $html;

	wp_die();

}

