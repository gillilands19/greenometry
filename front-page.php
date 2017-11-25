<?php  
/**
 * Front Page Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO:
 * Add subscribe heading to custom fields
 * Create Subscribe contact form 7
 * Put recent posts loop into function for abstraction
 * 
 **/
?>
<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="top-content">
			<h1 class="top-content__heading"><?php  the_field( 'tagline' );  ?></h1>
			<button class="top-content__btn">Learn More</button>
		</section>
		<section class"subscribe-front">
			<h4 class="subscribe-front__heading"><?php the_field( 'subscribe_heading' ); ?></h4>
			<div class="subscribe-front__form-container"><?php /*place subscribe form here*/ ?></div>
		</section>

		<?php endwhile; endif; ?>

		<section class="recent-posts">
			<h2 class="recent-posts__heading">Recent Posts</h2>
			<?php //recent_posts_home();
			$latest_posts_home = new WP_Query( array( 'posts_per_page' => 3 ) );
			if ( $latest_posts_home->have_posts() ) : while ( $latest_posts_home->have_posts() ) : $latest_posts_home->the_post();
			?>

			<div class="recent-posts__post-container">
				<figure class="recent-posts__post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
				<h3 class="recent-posts__post-title"><?php the_title(); ?></h3>
				<p class="recent-posts__post-excerpt"><?php the_excerpt(); ?></p>
				<a href="<?php echo get_permalink(); ?>">
					<button class="recent-posts__more-link">Read More</button>
				</a>
			</div>
			<?php endwhile; endif; ?>
		</section>

		<section class="ask-front">
			<h2 class="ask-front__heading">Ask Greenometry</h2>
			<h4 class="ask-front__sub-heading">You have the questions and we have the data! send us your questions and we will provide the answers</h4>
			<?php //TODO add Ask Greenometry template part or query ask greenometry page content or add c7 shortcode ?>
		</section>

<?php get_footer(); ?>