<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>

		<footer>
			<div class="grid_12">
				<div id="footer-outer" class="">
					<div id="footer">
						<div id="footer-border"></div><!-- draw footer left border -->
						<div id="footer-inner">
							<div id="sciencespo-logo" class="floating"></div>
							<div id="dimishs-logo" class="floating"></div>
							<div id="hci-logo" class="floating"></div>
							<?php
						$options = get_option('sample_theme_options');
    						print_r($options);
							
						?>
						
						</div>
						
					</div><!-- the logo -->
				</div>
			</div>
		</footer>
	</div>	
	<?php wp_footer(); ?>
</body>
</html>