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
 * If post type is question_answer return 
 * 
 **/

get_header();
?>
		single.php
		<section>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

			<?php 
			

			/**
			 * This is exploratory for rewriting links when listing the categories, so that the link will redirect to a list of categories
			 * that only includes one Post type. for example, I only want to see the Question and answers post type that has a category of technology.
			 * 
			 *  
			 * The better option may be enabling a custom taxonomy for the Q&A post type. This way the custom taxonomy will be queried instead of the
			 * Category Taxonomy which is attached to the Post object.
			 * **/
			
			
			// echo get_site_url() . '<br>';
			// echo get_post_type() . '<br>';
			// $category_list = get_the_category();
			// var_dump($category_list);
			// echo $category_list[0]->name;


			// add_filter( 'term_link', function ($termlink) {
			// 	$category_list = get_the_category();
			// 	$termlink = get_site_url() . '/' . get_post_type() . '/' . $category_list[0]->slug;
			// }, 10, 1 );
			
			?>

			<?php 
			if(get_post_type() == 'question_answer') {
				$the_terms = get_terms( 'question_answer_category', array( 'hide_empty' => 0 ) );
				echo get_term_link('technology', 'question_answer_category');
				var_dump($the_terms);
			}
			

			?>

			<h1><?php the_title(); ?></h1>
			<div>
				<small><?php the_time( 'F j, Y' ); echo ' | '; the_category( ', ' ); echo ' | '; ?></small>
				<?php //add social menu here ?>
			</div>

			<article>
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
