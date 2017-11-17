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
			<div class="support-container__item-container">
				<figure class="support-container__icon">
					<?php the_field( 'donate_icon' ); ?>
				</figure>
				<h3 class="support-container__item-heading">Donate</h3>
				<p class="support-container__item-subtitle">Our projects and research need your financial support!</p>
			</div>
			<div class="support-container__item-container">
				<figure class="support-container__icon">
					<?php the_field( 'share_icon' ); ?>
				</figure>
				<h3 class="support-container__item-heading">Share</h3>
				<p class="support-container__item-subtitle">Help us spread the word.</p>
			</div>
			<div class="support-container__item-container">
				<figure class="support-container__icon">
					<?php the_field( 'donate_icon' ); ?>
				</figure>
				<h3 class="support-container__item-heading">Collaborate</h3>
				<p class="support-container__item-subtitle">Have ideas or contributions? Get in touch.</p>
			</div>			
		
		</section>