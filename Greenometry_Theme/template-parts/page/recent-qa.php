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
 * 
 **/
?>	
		<?php $greenometry_qa_labels = get_post_type_object( 'question_answer' ) ?>
		<section>
			<h1>
				<?php 
				$greenometry_qa_labels = get_post_type_object( 'question_answer' );
				echo 'Recent' . $greenometry_qa_labels->labels->name;
				?>
			</h1>
			<h4><?php echo $greenometry_qa_labels->description ?></h4>

		<?php
		//arguments list for Q&A query
		$recent_qa_posts_args = array( 
			'post_type'			=> 'question_answers',
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

			<div>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<div>
					<h4><?php the_category( ', ' ); ?></h4>
					<h2><?php the_title(); ?></h2>
					<p><?php the_field( 'answer' ); ?></p>
					<small>Posted: <?php the_time( 'F j, Y' ) ?></small>
					<?php //enter social menu here ?>
				</div>
			</div>

		<?php endwhile; endif; ?>
	
			<div><?php previous_posts_link( '< Older Posts' ); ?></div>
			<div><?php next_posts_link( 'Newer Posts' ); ?></div>

			<?php
			//reset main query object
			$wp_query = NULL;
			$wp_query = $main_query_backup;
			?>

		<?php //category sidebar  ?>
	
		</section>