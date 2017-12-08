<?php  
/**
 * Content-Page Template Part - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO:
 * 
 **/
?>		
		
		<section class="single-section">
			content-page.php
			<h1 class="single-section__heading"><?php the_title(); ?></h1>
			<h2 class="single-section__subtitle"><?php the_field( 'page_subtitle' ) ?></h2>
			<article class="single-section__content"><?php the_content(''); ?></article>
		
		</section>