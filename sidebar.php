<?php
/**
 * Sidebar Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements
 * finish nav menu args
 * 
 * 
 **/
?>

	<aside class="category-sidebar">
		<ul class="categor-sidebar__item-list">
			<?php 

			$qa_category_terms = get_terms( array( 'taxonomy' => 'question_answer_category', 'hide_empty' => false ) );
			$site_url = get_site_url();
			$site_url .= '/?question_answer_category=';
			foreach($qa_category_terms as $term) {
				echo '<a href="' . $site_url . $term->slug . '"><li>' . $term->name .'</li></a>';
			}	
			?>
		</ul>
	</aside>