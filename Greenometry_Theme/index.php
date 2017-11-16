<?php
/**
* Index Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: add classes to elements
 * make heading and subtitle dynamic
 * limit posts per page
 **/

 get_header();
 ?>
		index.php
		<section class="posts-container">
			<h1 class="posts-container__heading">Recent Articles &amp Posts</h1>
			<h4 class="posts-container__subtitle">Subtitle</h4>
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="posts-container__post-container">
				<figure class="posts-container__post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3 class="posts-container__post-title"><?php the_title(); ?></h3>
				<p class="posts-container__post-excerpt"><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>"><button class="posts-container__more-link">Read More</button></a>
			</div>

		<?php endwhile; ?>

			<div class="previous-posts-link"><?php previous_posts_link( '< Older Posts' ); ?></div>
			<div class="next-posts-link"><?php next_posts_link( 'Newer Posts >' ); ?></div>

		<?php endif; ?>



		</section>

		<?php get_footer(); ?>