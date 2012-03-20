<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'study',
		array(
			'labels' => array(
				'name' => __( 'study' ),
				'singular_name' => __( 'Study' )
			),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array(
			'post_tag',
			'category',
			)
		)
	);
}

/**
 * activate theme options
 */
require_once ( get_template_directory() . '/theme-options.php' );
?>