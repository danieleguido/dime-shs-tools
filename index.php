<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

 
get_header(); ?>	
<?php // unabled, testget_sidebar(); ?>

<!-- categories show please -->
<!-- categories show please -->
<?php 
	$category = get_the_category();
	 
	$args = array( 
		"category"=>$category[0]->cat_ID 
	);
	$posts = get_posts( $args );
?>

<!-- categories show please -->
		<section>
			<div id="view" class="grid_12">
				<div id="sidebar-outer" class="grid_3 outer">
				<?php get_sidebar (); // maybe sidebar here ?>
					
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