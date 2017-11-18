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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	</head>	
	<body>
		<header class="main-header">
			<figure class="main-header__logo">
				<?php the_custom_logo(); ?>
			</figure>
			<?php wp_nav_menu( array(
				'theme_location' 		=> 'main-menu',
				'container'				=> 'nav',
				'container_class'		=> 'main-header__nav',
				'items_wrap'			=> '<ul class="main-header__nav-list %2$s">%3$s</ul>', //TODO add classes to ul
				)
			); 
				?>
			<?php dynamic_sidebar('footer'); ?>

		</header>
	
