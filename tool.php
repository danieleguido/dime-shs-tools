<?php
/*
Template Name: Tool
*/
get_header();
?>
	<a href="#" title="other projects" id="other-projects">+</a>
	
	<div id="the-others" class="container_12">
		<div class="grid_12">
			<div id="the-others-outer">
				<div id="the-others-inner">
					<ul>
						<!--
						<li {% if tool = "bequali" %}class="selected"{% endif %}><a href="/reanalyse" title="_-dime-shs quali-_ -- __-BEQUALI-__ -- a wonderful tool for gaming">BeQuali</a></li>
						<li {% if tool = "pquanti" %}class="selected"{% endif %}><a href="/dime-shs/quanti#suite" title="_-dime-shs quali-_ --  PQUANTI -- the basic panel management ever">bquanti</a></li>
						<li {% if tool = "hci" %}class="selected"{% endif %}><a title="hci web" href="/dime-shs/hci#suite">hci</a></li>-->
						&nbsp;
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
				<div id="menu-pages-outer" class="grid_6 outer outer_gain_1"><!-- the page menu -->
					<div id="menu-pages" class="inner">
						<ul>
							<li class="menu-project {%if bodyid == 'project'%}menuCurrent{%endif%}">
								<div class="icon-outer"><div class="icon"></div></div>
								
								<a href="{% url index %}">Project</a></li>
							<li class="menu-methodology {%if bodyid == 'method'%}menuCurrent{%endif%}">
								<div class="icon-outer"><div class="icon"></div></div>
								<a href="{% url index %}?p=method">Methodology</a></li>
							<li class="menu-access {%if bodyid == 'access'%}menuCurrent{%endif%}">
								<div class="icon-outer"><div class="icon"></div></div>
								<a href="{% url index %}?p=access">Access</a></li>
						</ul>
					</div>
				</div>
				<div id="menu-settings-outer" class="grid_3 outer outer_gain_2"><!-- the page menu -->
					<div id="menu-settings" class="inner">
						<ul>
							<li id="menu-language" class="en">
								<div class="icon-outer">
									<div class="icon"></div>
									
								</div>
								<div class="alternate-outer">
									<div class="alternate" style="display:none">
											<!-- div class="alt-icon en selected"><div class="icon"></div><a href="#en">english</a></div -->
											<div class="alt-icon fr"><div class="icon"></div><a href="fr" title="switch language to french">french</a></div>
											
									</div>
								</div>
								<a href="#" onclick="return false;" >language</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</header>
		
		<section>
			<div id="view" class="grid_12">
				<div id="sidebar-outer" class="grid_3 outer">
					<div id="sidebar">
						<div id="logomoto">hello sunshine <?php echo $page_id?></div>
							<ul>
							<?php wp_list_pages("title_li=&depth=1&child_of={$page_id}&link_before='<div class=\"allPage currentPage\">'&link_after='</div>'"); ?>
							</ul>
					</div>
				</div>
				<div id="page-outer" class="grid_9 outer">
					<div id="page" class="inner">pagecontent</div>
				</div>
			</div>
			<div class="clear"></div>
		</section>
		
		<footer>
			<div class="grid_12">
				<div id="footer-outer" class="">
					<div id="footer">
						<div id="footer-border"></div><!-- draw footer left border -->
						<div id="footer-inner">
							<div id="sciencespo-logo" class="floating"></div>
							<div id="dimishs-logo" class="floating"></div>
							<div id="hci-logo" class="floating"></div>
						</div>
						
					</div><!-- the logo -->
				</div>
			</div>
		</footer>
	</div>
</body>
</html>