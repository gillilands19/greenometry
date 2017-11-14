<?php
/**
 * Archive Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements
 **/

get_header();
?>

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
 **/

 get_header();
 ?>

		<section>
		archive.php
		<?php $queried_object = get_queried_object(); ?>
			<h1>Recent <?php echo $queried_object->labels->name; ?></h1>
			<small><?php echo $queried_object->description; ?></small>
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