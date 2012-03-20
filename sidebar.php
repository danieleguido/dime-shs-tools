					<div id="sidebar">
						<div id="logomoto"><?php echo get_bloginfo( 'description' ); ?></div>
						
						<!-- posts per categories -->
						<ul>
							<?php
							
							foreach( $posts as $post ){
								echo '
								<li>
									<div class="allPage">
									<a href="#'.$post->post_name.'">'.$post->post_title.'</a>
									</div>
					
								</li>	
								';
							}
							
							// load custom posts from category
							
							
							foreach( get_posts( 'category_name=apps' ) as $post ){
								echo '
								<li style="padding: 10px 0 10px 7px">
									<div class="application">
									<a href="#'.$post->post_name.'">'.$post->post_content.'</a>
									</div>
								</li>
								';
							}
							
							?>
						</ul>
					</div>