<?php  
/**
 * Page Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: custom loop query for recent qa. this loop will be nested
 * create team page and support page parts. Use Custom Post Type for team members then nested loop
 * 
 **/

get_header();

echo 'page.php';

if (have_posts()) : while (have_posts()) : the_post();

get_template_part( '/template-parts/page/content', 'page' );

if ( is_page('about-us') ){
		
		get_template_part('/template-parts/page/team', 'page' );

		get_template_part('/template-parts/page/support', 'page');

}

if ( is_page('ask-greenometry') ) {
	get_template_part('/template-parts/page/recent', 'qa');
}

endwhile; endif;

get_footer();


?>
