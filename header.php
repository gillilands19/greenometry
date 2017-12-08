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
		<?php wp_head(); ?>
		
		<!-- STOP! before adding anything to the head, check the functions.php file and see if it is
		added dynamically. if it's not, add it to the appropriate function. 
		The first two functions are for meta tags and enqueueing styles and scripts.  -->

	</head>	
	<body>
		<header class="main-header">
			<figure class="main-header__logo">
				<?php the_custom_logo(); ?>
			</figure>
			<?php 
			wp_nav_menu( array(
				'theme_location' 		=> 'main-menu',
				'container'				=> 'nav',
				'container_class'		=> 'main-header__nav',
				'items_wrap'			=> '<ul class="main-header__nav-list %2$s">%3$s</ul>',
				)
			); 
			?>
			<button class="donate-button" href="<?php bloginfo('wpurl'); ?>/donate">Donate</button>

		</header>
	
