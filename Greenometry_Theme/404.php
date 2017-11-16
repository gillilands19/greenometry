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

		<section class="404-container">
			<div>
				<h1 class="404-container__message">404 Page Not Found</h1>
			</div>
		</section>


<?php get_footer(); ?>