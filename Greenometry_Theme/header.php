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
	</head>	
	<body>
		<header>
			<figure>
				<?php the_custom_logo(); ?>
			</figure>
			<?php wp_nav_menu( array(
				'theme_location' 		=> 'main-menu',
				'container'				=> 'nav',
				'items_wrap'			=> '<ul class="%2$s">%3$s</ul>', //TODO add classes to ul
				)
			); 
				?>
		</header>
	
