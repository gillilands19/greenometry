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
		
			<h1>Support Us</h1>
			<div>
				<figure>
					<?php the_field( 'donate_icon' ); ?>
				</figure>
				<h3>Donate</h3>
				<p>Our projects and research need your financial support!</p>
			</div>
			<div>
				<figure>
					<?php the_field( 'share_icon' ); ?>
				</figure>
				<h3>Share</h3>
				<p>Help us spread the word.</p>
			</div>
			<div>
				<figure>
					<?php the_field( 'donate_icon' ); ?>
				</figure>
				<h3>Collaborate</h3>
				<p>Have ideas or contributions? Get in touch.</p>
			</div>			
		
		</section>