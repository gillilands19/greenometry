<?php
/**
 * Archive Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO:
 **/

get_header();
?>

		
		<?php $queried_object = get_queried_object(); ?>
		<section class="heading-container">
			<h1 class="heading-container__heading">Recent <?php echo $queried_object->labels->name; ?></h1>
			<h4 class="heading-container__subtitle"><?php echo $queried_object->description; ?></h4>
			<hr>
		</section>

			<section class="posts-container">
			<section class="posts-container__single-wrapper">
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="posts-container__post-container">
				<figure class="posts-container__post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3 class="posts-container__post-title"><?php the_title(); ?></h3>
				<p class="posts-container__post-excerpt"><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="resource-button">View</button></a>
			</div>

		<?php endwhile; ?>

			<div class="previous-posts-link"><?php next_posts_link( '< Older Posts' ); ?></div>
			<div class="next-class-link"><?php previous_posts_link( 'Newer Posts >' ); ?></div>

		<?php endif; ?>

		</section>
		</section>

		<?php get_footer(); ?>