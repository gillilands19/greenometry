<?php
/**
 * Archive-Category Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements
 **/

get_header();
?>

		<section>
		category.php
			<h1><?php echo single_cat_title(); ?></h1>
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>"><button>Read More</button></a>
			</div>

		<?php endwhile; ?>

			<div><?php previous_posts_link( '< Older Posts' ); ?></div>
			<div><?php next_posts_link( 'Newer Posts >' ); ?></div>

		<?php endif; ?>



		</section>

		<?php get_footer(); ?>