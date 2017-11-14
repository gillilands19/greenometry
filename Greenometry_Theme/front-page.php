<?php  
/**
 * Front Page Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements
 * Add subscribe heading to custom fields
 * Create Subscribe contact form 7
 * Add template part or query ask greenometry content
 * Put recent posts loop into function for abstraction
 * 
 **/
?>
front-page.php
<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section>
			<h1><?php  the_field( 'tagline' );  ?></h1>
			<button>Learn More</button>
		</section>
		<section>
			<p><?php the_field( 'subscribe_heading' ); ?></p>
			<div><?php /*place subscribe form here*/ ?></div>
		</section>

		<?php endwhile; endif; ?>

		<section>
			<h2>Latest Posts</h2>
			<?php //recent_posts_home();
			$latest_posts_home = new WP_Query( array( 'posts_per_page' => 3 ) );
			if ( $latest_posts_home->have_posts() ) : while ( $latest_posts_home->have_posts() ) : $latest_posts_home->the_post();
			?>

			<div>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php echo get_permalink(); ?>">
					<button>Read More</button>
				</a>
			</div>
			<?php endwhile; endif; ?>
		</section>

		<section>
			<h2>Ask Greenometry</h2>
			<p>You have the questions and we have the data! send us your questions and we will provide the answers</p>
			<?php //TODO add Ask Greenometry template part or query ask greenometry page content or add c7 shortcode ?>
		</section>

<?php get_footer(); ?>