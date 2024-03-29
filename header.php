<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link  rel='stylesheet' type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css"><!-- include stored fonts -->
	<link  rel='stylesheet' type="text/css" href="<?php bloginfo('template_directory'); ?>/css/fonts.css"><!-- include stored fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><!-- include google font open sans -->
	<noscript><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/adapt/mobile.min.css" /></noscript><!-- noscript grid -->
	<script type="text/javascript">var ADAPT_CONFIG={path:'<?php bloginfo('template_directory'); ?>/css/adapt/',callback:function(i,width){try{
		Juice.adapt.update(i,width)
		}catch(error){}},dynamic:true,range:['0px    to 960px  = mobile.css', '960px  to 1080px = 960.css', '1080px  to 1280px = 960.min.css','1280px to 1600px = 1200.min.css','1600px to 1940px = 1560.min.css','1940px to 2540px = 1920.min.css','2540px = 2520.min.css']};
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/juice-0.0.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/adapt.min.js"></script><!-- adapt js, cfr. http://adapt.960.gs/ -->
	
	<!-- Add the favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico"/>
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico"/>
	<?php //theme roller
	
		$options = get_option('sample_theme_options');
		// dummy if cascade...
    	$less_theme = $options['less_theme'] == 0?'web':( $options['less_theme'] == 1?'quanti':'quali' );
    ?>
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/themes/<?php echo $less_theme ?>.less"><!-- replace with your main style less theme -->
	<script src="<?php bloginfo('template_directory'); ?>/js/less-1.2.2.min.js" type="text/javascript"></script><!-- less script cfr. http://lesscss.org/#about -->
	
	<!-- script src="<?php bloginfo('template_directory'); ?>/js/Juice.0.min.js" type="text/javascript"></script>less script cfr. http://lesscss.org/#about -->
	
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/juice-chrono.js""></script><!-- scrollto plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-scrollto.js""></script><!-- scrollto plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-scrolltofixed.js""></script><!-- scrollto plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-toplink.js""></script><!-- top link plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-scrollspy.js""></script><!-- bootstrap-like scrool spy plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-tooltipsy.min.js""></script><!-- tipsy like tooltip plugin from github -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap-modal.js""></script><!-- bootstrap modal plugin -->
	
	<script type="text/javascript">
		$(window).load(function() {
			Juice.init();
		});
		$(window).resize(function() {
			Juice.resize.update();
		});
	</script>
</head>

<body <?php body_class(); ?>>
	
	<a href="#" title="quanti tools" id="dime-shs-family" style="cursor: pointer; "></a>

	<!-- a href="#" title="other projects" id="other-projects">+</a -->
	
	<div id="the-others" class="container_12">
		<div class="grid_12">
			<div id="the-others-outer">
				<div id="the-others-inner">
					<!-- img src="<?php bloginfo('template_directory'); ?>/img/tools-logo.png" style="float:left" -->
					<ul>
						<li class="tools-overview">
							<a href="http://sciencespo.fr/dimeshs" title="_-dime-shs tools-_ -- a brief explication, and some words about the three tools">dime shs tools</a>
						</li>
						<li<?php echo $less_theme == "quali"? ' class="selected"':'' ?>>
							<a href="/bequali#suite" title="_-dime-shs tool-_ -- __-QUALI-__ -- the final suite for archive exploration, text analysis.">Quali</a>
						</li>
						<li<?php echo $less_theme == "quanti"? ' class="selected"':'' ?>>
							<a href="/quanti#suite" title="_-dime-shs tool-_ -- __-QUANTI-__ -- the magic suite for surveys data management">Quanti</a>
						</li>
						<li<?php echo $less_theme == "web"? ' class="selected"':'' ?>>
							<a href="/web#suite" title="_-dime-shs tool-_ -- __-WEB-__ -- the wonderful suite for -- web corpora management, web crawls, networks...">Web</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<a href="#top" id="top-link">Top of Page</a>
	
	<div class="container_12">
		<header>
			<div class="grid_12" id="section-line"><div id="section-line-inner"></div></div><!-- the straight line -->
		
			<div class="grid_12" id="header-inner"><!-- top menu structure -->
				<div id="logo-outer" class="grid_3 outer outer_gain_1">
					<a href="logo"><div id="logo"></div></a><!-- the logo -->
				</div> 
				<div id="menu-pages-outer" class="grid_7 outer "><!-- the page menu -->
					<div id="menu-pages" class="inner">
						 
						<ul>
							<?php
							$category = get_category_by_slug( 'menu-page' );
							
							$args=array(
							  'orderby' => 'order',
							  'child_of'=>$category->term_id
							);
							
							$categories=get_categories($args);
							
							$selected_term_id = -1;
							if( is_single() ){
								global $single_category; // category of the given post, cfr section.php (a post template)
								// get the category of single
								$selected_term_id = $single_category[0]->term_id;
								
								
							}
												
							foreach($categories as $k=>$category) { 
								echo '
									<li class="menu-' . $category->slug . ( is_category( $category->term_id ) || $selected_term_id == $category->term_id ? " menuCurrent": ( $k == 0 && is_home()?" menuCurrent":"" ) ) .' ">
										<div class="icon-outer"><div class="icon"></div></div>
										<a href="' . get_category_link( $category->term_id ) . '" title="' . $category->description . '">' . $category->name.'</a>
									</li>	
								';
							}
							
							unset( $categories);
							?>
						</ul>
					</div>
				</div>
				<div id="menu-settings-outer" class="grid_2 outer outer_gain_3"><!-- the page menu -->
					<div id="menu-settings" class="inner">
						<ul>
				
			
							<?php // qTranslate plugin only.
								global $q_config;
							?>
							<li id="menu-language" class="<?php echo $q_config['language'] ?>">
								<div class="icon-outer"><div class="icon"></div></div>
								<div class="alternate-outer">
									<div class="alternate" style="display:none" >
									<?php
									
									foreach( qtrans_getSortedLanguages() as $language ){
										if($language == $q_config['language']) continue; // ignore current language among the choices
										echo '
										<div class="alt-icon '. $language .'">
											<div class="icon"></div>
											<a href="'.qtrans_convertURL("", $language).'" hreflang="'.$language.'">'.$q_config['language_name'][$language].'</a>
										</div>
										';
										
									}
								
									?>
											
											
									</div>
								</div>
								<a href="#" onclick="return false;" ><?php echo $q_config['language_name'][ $q_config['language'] ] ?></a>
							</li>
							
							<?php if ( !is_user_logged_in() ): ?>
							
							<li id="menu-login">
								<div class="icon-outer"><div class="icon"></div></div>
								<a data-toggle="modal" href="#login">LOGIN</a>
							</li>
							
							<?php endif; ?>
							
						</ul>
						
						
						
					</div>
					<?php if ( is_user_logged_in() ): ?>
						
					<!-- note: absolute positioned logout -->
					<div id="logout-outer">
						<div id="logout-inner">
							<div>
								<a title="enter administration interface" href="<?php echo  get_admin_url()?>">admin</a>
							</div>
							<div class="splitter">
								<a title="logout user -- __-<?php echo wp_get_current_user()->user_login ?>-__" href="<?php echo wp_logout_url( home_url() )?>">logout</a>
							</div>
						</div>
					</div>
						
						
				<?php endif; ?>
				</div>
				
				
			</div>
			<div class="clear"></div>
		</header>
		
		<?php if ( !is_user_logged_in() ): ?>
		
		<div class="modal" id="login" style="display:none">
			<div class="modal-header">
    			<a class="close" data-dismiss="modal">×</a>
    			<h3>Login</h3>
  			</div>
  			<div class="modal-body">
			 
				<?php wp_login_form( $args ); ?>
		
  			</div>
			
		</div>
		
		
		
		<?php endif; ?>