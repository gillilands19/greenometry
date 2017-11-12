<?php  
/**
 *Team-Page Template Part - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add classes to elements 
 * add team_members as custom post-type
 * put loop/query in function for abstraction
 * 
 **/
?>		
		
		<section>
			<h1><?php
			$greenometry_team_labels = get_post_type_object( 'team_members' ); 
			echo $greenometry_team_labels->labels->name ?>
			</h1>
			<?php
			$greenometry_team = new WP_Query( array( 'post_type' => 'team_members' ) );
			if ( $greenometry_team->have_posts() ) : while ( $greenometry_team->have_posts() ) : $greenometry_team->the_post();
			?>
			<div>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<strong><?php the_title(); ?></strong>
				<p>
					<?php the_field( 'title' ); ?><br>
					<?php the_field( 'title_two' ); ?>
				</p>
			</div>

			<?php endwhile; endif; ?>
			
		
		</section>