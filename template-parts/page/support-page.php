<?php  
/**
 * Support-Page Template Part - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: add icon fields to about page
 * add classes to elements
 * 
 * 
 **/
?>		




		support-page.php
		<section class="support-container">
		
			<h1 class="support-container__heading">Support Us</h1>
            
			<div class="support-container__item-container1">
				<figure class="support-container__icon">
					<?php the_field( 'donate_icon' ); ?>
				</figure>
                <img id="donate" src="<?php bloginfo( 'template_directory' ); ?>/assets/donate1.png" alt="donate">
				<h3 class="support-container__item-heading">Donate</h3>
				<p class="support-container__item-subtitle">Our projects and research <br> greatly appreciate your financial support.</p>
			</div>
            
			<div class="support-container__item-container2">
				<figure class="support-container__icon">
					<?php the_field( 'share_icon' ); ?>
				</figure>
                <img id="share" src="<?php bloginfo( 'template_directory' ); ?>/assets/share.png" alt="share">
				<h3 class="support-container__item-heading">Share</h3>
				<p class="support-container__item-subtitle">Help us spread the word.<br> Share our page.</p>
			</div>
            
			<div class="support-container__item-container3">
				<figure class="support-container__icon">
					<?php the_field( 'donate_icon' ); ?>
				</figure>
                <img id="collab" src="<?php bloginfo( 'template_directory' ); ?>/assets/collab.png" alt="collab">
				<h3 class="support-container__item-heading">Collaborate</h3>
				<p class="support-container__item-subtitle">Have ideas or contributions? <br>Get in touch!</p>
			</div>
            
		
		</section>