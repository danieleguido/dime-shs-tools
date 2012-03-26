<?php
/**
 * The category template file.
 * It contains all post about selected categories.
 * A file category-%slug%.php will override this structure completely (cfr category-studies).
 */
get_header(); ?>	
<?php // unabled, testget_sidebar(); ?>

<?php 
	$args = array( 
		"category"=>$wp_query->get_queried_object_id()
	);
	$posts = get_posts( $args );	
?>

<!-- categories show please -->
		<section>
			<div id="view" class="grid_12">
				<div id="sidebar-outer" class="grid_3 outer">
					<?php get_sidebar ();?>
					
				</div>
				<div id="page-outer" class="grid_9 outer">
					<div id="page" class="inner">
					
					<?php
						
						foreach( $posts as $post ){
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