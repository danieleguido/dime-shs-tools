<?php
/**
 * The category template file.
 * It contains all post about selected categories.
 * A file category-%slug%.php will override this structure completely (cfr category-studies).
 */
get_header(); ?>	
<?php // unabled, testget_sidebar(); ?>

<?php 
	$category = get_the_category();
	 
	// the very last category among the category list
	$args = array( 
		"category"=>array_pop( $category )->term_id 
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
							// loop using custom template. to be improved, of course.
							echo '
								<article>
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