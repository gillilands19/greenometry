<?php  
/**
 * Recent-QA Template Part - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements 
 * put loop/query in function for abstraction
 * sidebar template for categories
 * add pagination
 * add social menu links to each recent question
 * put query options in args array for abstraction
 * add QA categories to recent questions
 * 
 **/
?>	
		<?php $greenometry_qa_labels = get_post_type_object( 'question_answer' ) ?>
		<section class="recent-posts">
		recent-qa.php
			<h1 class="recent-posts__heading">
				<?php 
				$greenometry_qa_labels = get_post_type_object( 'question_answer' );
				echo 'Recent ' . $greenometry_qa_labels->labels->name;
				?>
			</h1>
			<h4 class="recent-posts__subtitle"><?php echo $greenometry_qa_labels->description ?></h4>

		<?php
		//arguments list for Q&A query
		$recent_qa_posts_args = array( 
			'post_type'			=> 'question_answer',
			'posts_per_page'	=> 5,
		);
		$recent_qa_posts_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		
		//init custom Q&A query
		$recent_qa_posts = new WP_Query( $recent_qa_posts_args );
		
		//Backup global wp_query and set to Q&A query for pagination
		$main_query_backup = $wp_query;
		$wp_query = NULL;
		$wp_query = $recent_qa_posts;

		if ( $recent_qa_posts->have_posts() ) : while ( $recent_qa_posts->have_posts() ) : $recent_qa_posts->the_post();
		?>

			<div class="recent-posts__qa-container">
				<figure class="recent-posts__qa-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
				<div class="recent-posts__qa-text-container">
					<h4 class="recent-posts__qa-category"><?php the_category( ', ' ); ?></h4>
					<h2 class="recent-posts__qa-title"><?php the_title(); ?></h2>
					<p class="recent-posts__qa-answer"><?php the_field( 'answer' ); ?></p>
					<small class="recent-posts__qa-date">Posted: <?php the_time( 'F j, Y' ) ?></small>
					<?php //enter social menu here ?>
				</div>
			</div>

		<?php endwhile; ?>

			<div class="prev-posts-link"><?php previous_posts_link( '< Older Posts' ); ?></div>
			<div class="next-posts-link"><?php next_posts_link( 'Newer Posts' ); ?></div>
	
		<?php endif; ?>

		</section>

			<?php
			//reset main query object
			$wp_query = NULL;
			$wp_query = $main_query_backup;
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