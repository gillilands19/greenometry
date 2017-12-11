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
		team-page.php

		<?php $greenometry_team_labels = get_post_type_object( 'team_members' );  ?>

		<section class="team-container">            
            
			<h1 class="team-container__heading"><?php
			$greenometry_team_labels = get_post_type_object( 'team_members' ); 
			echo $greenometry_team_labels->labels->name; ?>
			</h1>
            <section class="team-container__member-wrapper">
			<?php
			$greenometry_team = new WP_Query( array( 'post_type' => 'team_members', 'order' => 'ASC' ) );
			if ( $greenometry_team->have_posts() ) : while ( $greenometry_team->have_posts() ) : $greenometry_team->the_post();
			?> 
      		<div class="team-container__member-container">
				<figure class="team-container__member-photo">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</figure>
				<a href="<?php the_permalink(); ?>"><strong class="team-container__member-name"><?php the_title(); ?></strong></a>
				<p class="team-container__member-titles">
					<?php the_field( 'title' ); ?><br>
					<?php the_field( 'title_two' ); ?>
				</p>
			</div>
			<?php endwhile; endif; ?>

		</section>
            
            <br><br>
            
			<!--<button class="team-container__directors"><a href="#">Board of Directors</a></button>-->
            
           <!-- <button class="team-container__advisory"><a href="#">Advisory Council</a></button>-->
		
		</section>