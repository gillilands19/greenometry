<?php
/**
 * Single Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add filter function to the content. get_the_content will need to be used. Split content in half by p tag and add custom field for quote 
 * add classes to elements
 **/

get_header();
?>

		<section>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

			<h1><?php the_title(); ?></h1>
			<div>
				<small><?php the_time( 'F j, Y' ); echo ' | '; the_category( ', ' ); echo ' | '; ?></small>
				<?php //add social menu here ?>
			</div>

			<article>
				<?php $content = get_the_content();
					the_content();
				?>
			</article>

			<?php endwhile; endif; ?>
		</section>

<?php get_footer(); ?>
