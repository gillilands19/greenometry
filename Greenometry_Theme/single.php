<?php
/**
 * Single Template - Greenometry Theme
 * 
 * @author Sean Gilliland, Melissa Wong, Analia Arredondo, Ronald Hamasaki
 * @version 1.0 
 * 
 * 
 * TODO: Add filter function to the content. get_the_content will need to be used. Split content in half by p tag and add custom field for quote 
 * add classes to elements
 **/

get_header();
?>
		single.php
		<section>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

			<?php 
			
			// echo get_site_url() . '<br>';
			// echo get_post_type() . '<br>';
			// $category_list = get_the_category();
			// var_dump($category_list);
			// echo $category_list[0]->name;


			// add_filter( 'term_link', function ($termlink) {
			// 	$category_list = get_the_category();
			// 	$termlink = get_site_url() . '/' . get_post_type() . '/' . $category_list[0]->slug;
			// }, 10, 1 );
			
			?>

			<h1><?php the_title(); ?></h1>
			<div>
				<small><?php the_time( 'F j, Y' ); echo ' | '; the_category( ', ' ); echo ' | '; ?></small>
				<?php //add social menu here ?>
			</div>

			<article>
				<?php $content = get_the_content();
					the_content();
				?>
			</article>

			<?php endwhile; endif; ?>
		</section>

<?php get_footer(); ?>
