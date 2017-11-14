<?php
/**
 * Page-Resources Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add custom excerpt length as function?
 * Register Post Type publications
 * publications post type loop
 * add classes to elements
 * add link to videos archive page
 **/

get_header();
?>
		page-resources.php
		<section>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<small><?php the_field( 'resources_subtitle' ); ?></small>

		<?php endwhile; endif; ?>
		</section>
		<section>
		<?php $latest_posts_resources = new WP_Query( array( 'posts_per_page' => 3 ) );
			if ( $latest_posts_resources->have_posts() ) : while ( $latest_posts_resources->have_posts() ) : $latest_posts_resources->the_post();
		?>

			<h2>Recent Articles &amp Posts</h2>
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">See More</a>
			<div>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>"><button>Read More</button></a>
			</div>
		<?php endwhile; endif; ?>
		</section>
		<section>
		<?php
			$recent_videos_resources = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 3 ) );
			if ( $recent_videos_resources->have_posts() ) : while ( $recent_videos_resources->have_posts() ) : $recent_videos_resources->the_post();
			?>

			<div>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3><?php the_title(); ?></h3>
				<a href="<?php the_permalink(); ?>"><button>Read More</button></a>
			</div>

		<?php endwhile; endif; ?>

		<?php //publications loop goes here ?>
		</section>


<?php get_footer(); ?>

