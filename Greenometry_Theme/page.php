<?php  
/**
 * Page Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO:
 * 
 **/

get_header();

get_template_part( '/template-parts/page/content', 'page' );

if ( is_page('About Us') ){
	get_template_part('/template-parts/page/team', 'page' );
	get_template_part('/template-parts/page/support', 'page');
} else if ( is_page('Ask Greenometry') ) {
	get_template_part('/template-parts/page/recent', 'qa');
} else {
	echo '<div></div>'; //Add some sort of divider
}

get_footer();


?>
