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
 * add pagination
 * 
 **/
?>	


<?php
$recent_qa_posts = new WP_Query( array( 'post_type' => 'question_answers', 'posts_per_page' => 5 ) );


?>


	