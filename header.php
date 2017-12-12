<?php
/**
 * Header for Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements
 * finish nav menu args
 * 
 * 
 **/
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- STOP! before adding anything to the head, check the functions.php file and see if it is
		added dynamically. if it's not, add it to the appropriate function. 
		The first two functions are for meta tags and enqueueing styles and scripts.  -->
		
		<?php wp_head(); ?>
	</head>	
	<body>
		<header class="main-header">
			
				<!-- Logo -->
				<figure class="main-header__logo">
					<?php the_custom_logo(); ?>
				</figure>

				<div id="mobile-navigation">

				<!-- Mobile Menu Icons -->
				<div id="menu-icons">
					<span id="open">
						&#9776;
					</span> <!-- #open -->

					<span id="close">
						&#10006;
					</span> <!-- #close -->
				</div> <!-- #menu-icons -->
			</div><!-- #mobile-navigation -->
			
			<div id="navigation-container">
				<!-- Main Navigation -->
				<?php wp_nav_menu( array('theme_location' => 'main-menu','container' => 'nav','container_class' => 'main-header__nav','items_wrap' => '<ul class="main-header__nav-list %2$s">%3$s</ul>')); ?>

				<!-- Donate Button -->
				<a class="donate-button" href="<?php echo get_site_url(); ?>/donate">Donate</a>
			</div><!-- #navigation-container -->

		</header>
	
