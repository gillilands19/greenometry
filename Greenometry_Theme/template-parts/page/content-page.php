<?php  
/**
 * Content-Page Template Part - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements 
 * 
 **/
?>		
		
		<section>
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<h2><?php the_field( 'page_subtitle' ) ?></h2>
			<article><?php the_content(''); ?></article>

			<?php endwhile; endif; ?>
		
		</section>