<?php
/*
Template Name Posts: Section
*/
$single_category = get_the_category();
get_header(); ?>	
<?php // unabled, testget_sidebar(); ?>

<!-- categories show please -->
<?php 
	
	 
	$args = array( 
		"category"=>$single_category[0]->cat_ID 
	);
	$posts = get_posts( $args );
?>

<!-- section: post should always bring user here. show please -->
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
		<script>
			$(window).load(function(){
				
			});
		</script>


<?php get_footer(); ?>