<?php 
	get_header(); 

	$args = array( 
		"category"  => $wp_query->get_queried_object_id(),
		"post_type" => "study"
	);
	$studies = get_posts( $args );	
?>
		<!-- show studies ( post type studies inside category studies ) -->
		<section>
			<div id="view" class="grid_12">
				<div id="sidebar-outer" class="grid_3 outer">
					<?php get_sidebar ();?>
				</div>
				<div id="page-outer" class="grid_9 outer">
					<div id="page" class="inner">
					
					<?php
						
						foreach( $studies as $post ){
							$edit_link = is_user_logged_in()? '<a class="edit" href="'.get_edit_post_link( $post->id ).'" title="edit content">edit</a>':'';
							
							// loop using custom template. to be improved, of course.
							echo '
								<article>
									'.$edit_link.'
									<a id="'.$post->post_name.'">
										<h1>'.$post->post_title.'</h1>
									</a>
									<div>
										'.$post->post_content.'
									</div>
								</article>	
							';

						}
					?>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</section>
		


<?php get_footer(); ?>