<?php

/**
 * Footer Template - Greenometry Theme
 * 
 * 
 * TODO:
 * add social menu
 * add contact form 7 for subscribe
 * 
 **/

?>

		<footer class="footer">

			<div class="footer__subscribe">
				<h4>Subscribe To Our Mailing List</h4>
				<?php dynamic_sidebar('footer'); ?>	
			</div>

			<div class="footer__nav">
				<?php 
				//footer social media navigation goes here 

				wp_nav_menu( array(
					'theme_location' 		=> 'social',
					'container'				=> 'nav',
					'container_class'		=> 'footer__nav',
					'items_wrap'			=> '<ul class="footer__nav-list %2$s">%3$s</ul>',
					)
				); 
				?>
				
			</div>

			<a class="donate-link" href="<?php echo get_site_url() ?>/donate"><button class="donate-button">Donate</button></a>
		</footer>

	<?php wp_footer(); ?> 
	</body>
</html>

You were linking buttons and troubleshooting their styling!!!