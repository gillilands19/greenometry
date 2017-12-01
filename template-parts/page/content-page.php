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

		
		<section id="sunset" class="top-content">
			content-page.php
			<h1 class="top-content__heading"><?php the_title(); ?></h1>
            
            
			<h2 class="top-content__subtitle"><?php the_field( 'page_subtitle' ); ?></h2>
            
            
			<article class="top-content__content"><?php the_content(); ?></article>

		
		</section>