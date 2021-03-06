<?php
/**
 * Taxonomy Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements
 *  add conditional, if is qa-category taxonomy show sidebar.php
 **/

get_header();
?>

		<section class="posts_container">
			<h1 class="posts-container__heading"><?php single_term_title(); ?></h1>
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