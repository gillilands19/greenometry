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
 * add conditional to display question_answer single post.
 * remove var dumps
 * If post type is question_answer return proper Q&A categories or create single-question_answer.php template
 * 
 **/

get_header();
?>
		<section class="single-post-container">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

			<?php 
			if(get_post_type() == 'question_answer') {
				$the_terms = get_terms( 'question_answer_category', array( 'hide_empty' => 0 ) );
				echo get_term_link('technology', 'question_answer_category');
			}
			

			?>

			<h1 class="single-post-container__single-heading"><?php the_title(); ?></h1>
			<div class="single-post-container__single-details-container">
				<small class="single-post-container__single-details"><?php the_time( 'F j, Y' ); echo ' | '; the_category( ', ' ); echo ' | '; ?></small>
				<?php //add social menu here ?>
			</div>
			<hr>

			<figure class="single-post-container__post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>

			<article class="single-post-container__single-content">
				<?php $content = get_the_content();
					the_content();
					if(get_post_type() == 'question_answer') {
						the_field( 'answer' );
					}
				?>
			</article>

			<?php endwhile; endif; ?>
		</section>

<?php get_footer(); ?>
