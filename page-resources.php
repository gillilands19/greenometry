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
 * 
 * Pull advanced custom fields for publications
 * 
 * make post type headings dynamic
 * 
 * 
 **/

get_header();
?>
		<section class="heading-container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1 class="posts-container__heading"><?php the_title(); ?></h1>
			<h4 class="posts-container__subtitle"><?php the_field( 'resources_subtitle' ); ?></h4>

		<?php endwhile; endif; ?>
		</section>

		<section class="posts-container">
			<h2 class="posts-container__post-type-heading">Recent Articles &amp; Posts</h2>
			<a class="posts-container__all-posts-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">See More</a>
		<?php $latest_posts_resources = new WP_Query( array( 'posts_per_page' => 3 ) );
			if ( $latest_posts_resources->have_posts() ) : while ( $latest_posts_resources->have_posts() ) : $latest_posts_resources->the_post();
		?>
			
			<div class="posts-container__post-container">
				<figure class="posts-container__post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3 class="posts-container__post-title"><?php the_title(); ?></h3>
				<p class="posts-container__post-excerpt"><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>"><button class="posts-container_more-link">Read More</button></a>
			</div>
		<?php endwhile; endif; ?>
		</section>


		<section class="posts-container">
		<h2 class="posts-container__post-type-heading">Recent Videos</h2>
		<a class="posts-container__all-posts-link" href="<?php echo get_post_type_archive_link( 'videos' ) ?>">See More</a>
		<?php
			$recent_videos_resources = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 3 ) );
			if ( $recent_videos_resources->have_posts() ) : while ( $recent_videos_resources->have_posts() ) : $recent_videos_resources->the_post();
			?>
			<div class="posts-container__post-container">
				<figure class="posts-container__post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3 class="posts-container__post-title"><?php the_title(); ?></h3>
				<a href="<?php the_permalink(); ?>"><button class="posts-container__more-link">Watch</button></a>
			</div>

		<?php endwhile; endif; ?>
		</section>
		<section>
		<?php 
			$recent_publications_resources = new WP_Query( array( 'post_type' => 'publications', 'posts_per_page' => 7 ) );
			if ( $recent_publications_resources->have_posts() ) : while ( $recent_publications_resources->have_posts() ) : $recent_publications_resources->the_post();
			//pull advanced custom fields for publications
		?>


		<?php endwhile; endif; ?>
		</section>

<?php get_footer(); ?>

